@extends('layouts.master')

@section('parent-title','Register')
@section('page-title','Hantera processer')

@section('contents')
	<div class="box">

		<div class="box-header">
			<h3 class="box-title">Processer</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		    <table class="table table-bordered" id="users-table">
		    	<thead>
	                <tr>
	                    @foreach($datatable['fields'] as $key => $value)
	                        <th>{!! $value['label'] !!}</th>
	                    @endforeach
	                </tr>
                </thead>
		    </table>
		</div>
	</div>
@endsection

@section('scripts')
<script>
	$(function() {

		editor = new $.fn.dataTable.Editor( {
            ajax: {
                url: '{!! route('manage-process.editordata') !!}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            },
            table: '#users-table',
            idSrc: "id",
            fields: [
                @foreach($datatable['fields'] as $key => $value)
                    { label: '{!! $value['name'] !!}', 'name': '{!! $value['name'] !!}' },
                @endforeach
            ]
        } );

	    $('#users-table').DataTable({
            dom: "Blfrtip",
	        processing: true,
	        serverSide: true,
            language: { "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Swedish.json" },			        
	        ajax: '{!! route('manage-process.datatables') !!}',
	        columns: [
                @foreach($datatable['fields'] as $key => $value)
                    { data: '{!! $value['name'] !!}', 'name': '{!! $value['name'] !!}' },
                @endforeach
	        ],
	        select: true,
	        buttons: [
	            { extend: "create", editor: editor },
	            { extend: "edit",   editor: editor },
	            {
	                extend: 'collection',
	                text: 'Exportera',
	                buttons: [
	                    'excel',
	                    'csv',
	                    'pdf',
	                    'print'
	                ]
	            }
	        ]
       	    });
	});
	</script>
@endsection