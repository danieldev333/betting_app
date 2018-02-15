@extends('layout.page')

@section('title', 'Home')


@section('content')
<div class="page-title">	
	<h2 class="ml-2 mt-2">Open Bets : Feb 15, 2018</h3>
</div>
<div class="openbet-container ml-2">
	<div class="openbet-item-container card">
		<div class="card-body">
			<div class="row">
				<label for="event">1. Event ID: {EID}      Status: {Won/Lost/Pending}</label>
			</div>
			<div class="row">
				<label for="event">Event Name: {Ename}</label>
			</div>								
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<label for="event">Bet Amount Placed: {Bet_Amount_Placed}</label>
					</div>
					<div class="row">
						<label for="event">Bet Placed On: {Name_of_Athlete}</label>
					</div>
				</div>
			</div>									
			<div class="row">
				<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
			</div>
			<div class="text-center">
				<button class="btn">Watch Event</button>
			</div>
			<div class="row">
				<div class="events-bar"></div>
			</div>
		</div>
	</div>
	<div class="openbet-item-container card mt-2">
		<div class="card-body">
			<div class="row">
				<label for="event">2. Event ID: {EID}      Status: {Won/Lost/Pending}</label>
			</div>
			<div class="row">
				<label for="event">Event Name: {Ename}</label>
			</div>								
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<label for="event">Bet Amount Placed: {Bet_Amount_Placed}</label>
					</div>
					<div class="row">
						<label for="event">Bet Placed On: {Name_of_Athlete}</label>
					</div>
				</div>
			</div>									
			<div class="row">
				<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
			</div>
			<div class="text-center">
				<button class="btn">Watch Event</button>
			</div>
			<div class="row">
				<div class="events-bar"></div>
			</div>
		</div>
	</div>
	<div class="openbet-item-container card mt-2">
		<div class="card-body">
			<div class="row">
				<label for="event">3. Event ID: {EID}      Status: {Won/Lost/Pending}</label>
			</div>
			<div class="row">
				<label for="event">Event Name: {Ename}</label>
			</div>								
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<label for="event">Bet Amount Placed: {Bet_Amount_Placed}</label>
					</div>
					<div class="row">
						<label for="event">Bet Placed On: {Name_of_Athlete}</label>
					</div>
				</div>
			</div>									
			<div class="row">
				<label for="eventstarts">Live Event Starts in: Days : Hours : Minutes :</label>
			</div>
			<div class="text-center">
				<button class="btn">Watch Event</button>
			</div>
			<div class="row">
				<div class="events-bar"></div>
			</div>
		</div>
	</div>
</div>								
@endsection