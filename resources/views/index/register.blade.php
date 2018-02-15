@extends('layout.app')

@section('title', 'Login')

@section('header') 
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('layout-content')
<div class="background-rect"></div>
<div class="login-container">
	<form class="form-horizontal">
		<h1 class="text-center">Registration</h1>
		<div class="form-group row">
			<label for="username" class="col-md-4 control-label">First name</label>
			<div class="col-md-8"><input type="input" class="form-control" id="Firstname" placeholder="First name" /></div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-md-4 control-label">Last name</label>
			<div class="col-md-8"><input type="input" class="form-control" id="Lastname" placeholder="Last name" /></div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-md-4 control-label">Email</label>
			<div class="col-md-8"><input type="input" class="form-control" id="Lastname" placeholder="Email" /></div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-md-4 control-label">Tel</label>
			<div class="col-md-8"><input type="input" class="form-control" id="Lastname" placeholder="Tel" /></div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-md-4 control-label">BTC Address</label>
			<div class="col-md-8"><input type="input" class="form-control" id="Lastname" placeholder="BTC Address" /></div>
		</div>
		<div class="form-group text-center">
			<a href="/home" class="btn btn-primary" role="button">Submit</a>
		</div>
	</form>
</div>
<div class="register-container text-center">
	<a href="/login" class="btn btn-secondary" role="button">Login</a>
</div>
@endsection