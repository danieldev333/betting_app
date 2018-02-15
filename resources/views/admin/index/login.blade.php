@extends('admin.layout.app')

@section('title', 'Login')

@section('layout-content')

<div class="top-container">
	<h1>Admin</h1>
</div>

<div class="login-container">
	<form class="form-horizontal">
		<h1 class="text-center">Welcome</h1>
		<div class="form-group row">
			<label for="username" class="col-md-4 control-label">Username</label>
			<div class="col-md-8"><input type="input" class="form-control" id="username" placeholder="Username" /></div>
		</div>
		<div class="row form-group">
			<label for="password" class="col-md-4 control-label">Password</label>
			<div class="col-md-8"><input type="password"  class="form-control" id="password" placeholder="Password" /></div>
		</div>
		<div class="form-group text-center">
			<a href="/admin/dashboard" class="btn btn-primary" role="button">Login</a>
		</div>
	</form>
</div>

@endsection