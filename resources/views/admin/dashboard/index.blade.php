@extends('admin.layout.page')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')
 <div class="row">
 	<div class="col-sm-6 mb-2">
 		<div class="card bg-light">
 			<h5 class="card-header">Present Day - Feb 15, 2018</h5>
 			<div class="card-body">
				<div>
					<label>Total Live Bets : $3848385</label>
				</div>
				<div>
					<label>Commision : $384385</label>
				</div>
			</div>
 		</div>

 		<div class="text-center">
 			<a href="/admin/payouts/pending" class="btn btn-secondary mt-5 btn-dashboard">Pending Payouts</a>
 		</div>
 		<div class="text-center">
 			<a href="/admin/payouts/paid" class="btn btn-secondary mt-3 btn-dashboard">Paid Payouts</a>
 		</div>
 		<div class="text-center">
 			<a href="/admin/payouts/history" class="btn btn-secondary mt-3 btn-dashboard">Payout History</a>
 		</div>
 	</div>
 	<div class="col-sm-6">
 		<div class="card bg-light">
 			<h5 class="card-header">Month to Date - Feb 2018</h5>
 			<div class="card-body">
				<div>
					<label>Total Live Bets : $3848385</label>
				</div>
				<div>
					<label>Commision : $384385</label>
				</div>
			</div>
 			<h5 class="card-header">Year to Date</h5>
 			<div class="card-body">
				<div>
					<label>Total Live Bets : $3848385</label>
				</div>
				<div>
					<label>Commision : $384385</label>
				</div>
			</div>
 		</div>

 		<div class="card bg-light mt-2">
 			<h5 class="card-header">Payment History</h5>
 			<div class="card-body">
 				<div><strong>Previous Month</strong></div>
				<div>
					<label>Total Live Bets : $3848385</label>
				</div>
				<div>
					<label>Commision : $384385</label>
				</div>
 				<div><strong>Month before Previous</strong></div>
				<div>
					<label>Total Live Bets : $3848385</label>
				</div>
				<div>
					<label>Commision : $384385</label>
				</div>
			</div>
 		</div>
 	</div>
 </div>
@endsection