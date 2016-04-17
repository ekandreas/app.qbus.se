@extends('layouts.master')

@section('contents')

      @include('contents.boxes')

      @include('contents.dashboard')

@endsection

@section('scripts')
	<script src="{{ asset('assets/pages/js/dashboard.js') }}"></script>
@endsection
