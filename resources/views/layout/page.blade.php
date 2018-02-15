@extends('layout.app')

@section('header') 
<link rel="stylesheet" href="/css/front.css">
@endsection

@section('layout-content')

<div>
	@include('layout.header')
</div>
<div class="row">
	<div class="col-md-8">
		@yield('content')
	</div>
	<div class="col-md-4">
		@include('layout.sidebar')
	</div>
</div>
<div>
	@include('layout.footer')
</div>
@endsection