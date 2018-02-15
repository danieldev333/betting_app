@extends('layout.app')

@section('title', 'Login')

@section('header') 
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('layout-content')
<div class="background-rect"></div>
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
			<a href="/home" class="btn btn-primary" role="button">Login</a>
		</div>
	</form>
</div>
<div class="register-container text-center">
	<a href="/register" class="btn btn-secondary" role="button">Register</a>
</div>
@endsection