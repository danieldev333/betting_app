@extends('layout.page')

@section('title', 'Home')


@section('content')
<div class="history-search-container ml-2 mt-2">
	<form class="form-inline">
		<label class="mr-2">Search</label>
		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon1">Event ID</span>
		  </div>
		  <input type="text" class="form-control" placeholder="Event ID" aria-label="Event ID" aria-describedby="basic-addon1">
		</div>
		<div class="input-group ml-2">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon2">Date</span>
		  </div>
		  <input type="text" class="form-control" placeholder="Date" aria-label="Date" aria-describedby="basic-addon2">
		</div>
		<button type="button" class="btn btn-primary ml-2">Search</button>
	</form>
</div>
<div class="page-title">	
	<h2 class="ml-2 mt-2">History | Feb 15, 2018</h3>
</div>
<div class="history-container ml-2">
	<div class="history-item-container card">
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
			<div class="row">
				<div class="events-bar"></div>
			</div>
		</div>
	</div>
	<div class="history-item-container card mt-2">
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
			<div class="row">
				<div class="events-bar"></div>
			</div>
		</div>
	</div>
	<div class="history-item-container card mt-2">
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
			<div class="row">
				<div class="events-bar"></div>
			</div>
		</div>
	</div>
</div>								
@endsection