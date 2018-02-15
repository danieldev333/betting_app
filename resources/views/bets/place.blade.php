@extends('layout.page')

@section('title', 'Home')


@section('content')
<div class="page-title">	
	<h2 class="ml-2 mt-2">Place A Bet : Feb 15, 2018</h3>
</div>
<div class="placebet-container ml-2">
	<div class="bet-info card">
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
		</div>
	</div>
	<div class="bet-form mt-3">
		<form class="form-horizontal">
			<h3>Choose a winner</h3>
			<div class="form-group row ml-2">
				<div class="float-left athelet-avatar"></div>
				<div class="float-left ml-1">
					Athelete 1
				</div>
			</div>
			<div class="form-group row ml-2">
				<div class="float-left athelet-avatar"></div>
				<div class="float-left ml-1">
					Athelete 1
				</div>
			</div>
			<div class="row form-group">
				<label for="password" class="col-md-4 control-label">Enter Amount</label>
				<div class="col-md-8"><input type="number"  class="form-control" id="amount" placeholder="Amount" /></div>
			</div>
			<div class="form-group text-center">
				<a href="/bets/place/finish" class="btn btn-primary" role="button">Submit</a>
			</div>
		</form>
	</div>
</div>								
@endsection