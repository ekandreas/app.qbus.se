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
		                <th>Id</th>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Created At</th>
		                <th>Updated At</th>
		            </tr>
		        </thead>
		    </table>
		</div>
	</div>
@endsection

@section('scripts')
<script>
	$(function() {
	    $('#users-table').DataTable({
	        processing: true,
	        serverSide: true,
            language: { "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Swedish.json" },			        
	        ajax: '{!! route('manage-process.data') !!}',
	        columns: [
	            { data: 'id', name: 'id' },
	            { data: 'name', name: 'name' },
	            { data: 'email', name: 'email' },
	            { data: 'created_at', name: 'created_at' },
	            { data: 'updated_at', name: 'updated_at' }
	        ]
	    });
	});
	</script>
@endsection