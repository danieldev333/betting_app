@extends('layout.page')

@section('title', 'Home')

@section('content')
<div class="page-title">	
	<h2 class="ml-2 mt-2">Today's Events : {Dates}</h3>
</div>
<div class="home-container ml-2">
	<div class="todayevent-item-container">
		<div class="row">
			<div class="col-md-4">
				<div class="livestream-rect"></div>
			</div>
			<div class="col-md-8">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="event">Event ID: {EID} | EventName: {Ename}</label>
					</div>
					<div class="row">
						<div class="event-bar"></div>
					</div>
					<div class="row form-group">
						<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
					</div>
					<div class="form-group text-center">
						<a class="btn btn-secondary" href="/bets/place">Place A Bet</a>
					</div>
				</form>
			</div>
		</div>
		<div class="events-bar mt-1"></div>
	</div>
	<div class="todayevent-item-container">
		<div class="row">
			<div class="col-md-4">
				<div class="livestream-rect"></div>
			</div>
			<div class="col-md-8">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="event">Event ID: {EID} | EventName: {Ename}</label>
					</div>
					<div class="row">
						<div class="event-bar"></div>
					</div>
					<div class="row form-group">
						<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
					</div>
					<div class="form-group text-center">
						<a class="btn btn-secondary" href="/bets/place">Place A Bet</a>
					</div>
				</form>
			</div>
		</div>
		<div class="events-bar mt-1"></div>
	</div>
	<div class="todayevent-item-container">
		<div class="row">
			<div class="col-md-4">
				<div class="livestream-rect"></div>
			</div>
			<div class="col-md-8">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="event">Event ID: {EID} | EventName: {Ename}</label>
					</div>
					<div class="row">
						<div class="event-bar"></div>
					</div>
					<div class="row form-group">
						<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
					</div>
					<div class="form-group text-center">
						<a class="btn btn-secondary" href="/bets/place">Place A Bet</a>
					</div>
				</form>
			</div>
		</div>
		<div class="events-bar mt-1"></div>
	</div>
	<div class="todayevent-item-container">
		<div class="row">
			<div class="col-md-4">
				<div class="livestream-rect"></div>
			</div>
			<div class="col-md-8">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="event">Event ID: {EID} | EventName: {Ename}</label>
					</div>
					<div class="row">
						<div class="event-bar"></div>
					</div>
					<div class="row form-group">
						<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
					</div>
					<div class="form-group text-center">
						<a class="btn btn-secondary" href="/bets/place">Place A Bet</a>
					</div>
				</form>
			</div>
		</div>
		<div class="events-bar mt-1"></div>
	</div>
	<div class="todayevent-item-container">
		<div class="row">
			<div class="col-md-4">
				<div class="livestream-rect"></div>
			</div>
			<div class="col-md-8">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="event">Event ID: {EID} | EventName: {Ename}</label>
					</div>
					<div class="row">
						<div class="event-bar"></div>
					</div>
					<div class="row form-group">
						<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
					</div>
					<div class="form-group text-center">
						<a class="btn btn-secondary" href="/bets/place">Place A Bet</a>
					</div>
				</form>
			</div>
		</div>
		<div class="events-bar mt-1"></div>
	</div>
</div>
@endsection