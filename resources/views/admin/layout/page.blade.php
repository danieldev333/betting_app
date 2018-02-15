@extends('admin.layout.app')


@section('layout-content')

<div>
	@include('admin.layout.header')
</div>
<div class='content'>
	<h2 class="page-title">
		@yield('page-title')
	</h2>
	@yield('content')
</div>
@endsection