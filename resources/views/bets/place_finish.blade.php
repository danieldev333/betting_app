@extends('layout.page')

@section('title', 'Home')


@section('content')
<div class="placebet-container ml-2">
	<div class="finish-text text-center">
		Thank You. Your Bet Has Been Placed for<br />
		{Event ID} - {Eventname} - {AName}
	</div>
	<div class="form-group text-center mt-2">
		<a href="/bets/place" class="btn btn-primary" role="button">Edit Bet</a>
	</div>
	<div class="form-group text-center mt-2">
		<a href="/home" class="btn btn-primary" role="button">Submit</a>
	</div>
</div>								
@endsection