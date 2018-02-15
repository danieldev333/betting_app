@extends('admin.layout.page')

@section('title', 'Dashboard')

@section('page-title', 'Paid Payouts')

@section('content')
<div class="card search-panel">
	<div class="card-body">
		<div class="row">
			<div class="form-group col-sm-6 row">
		      	<label for="inputPassword" class="col-sm-4 col-form-label">User ID</label>
		      	<div class="col-sm-8">
					<input type="text" class="form-control" id="inputPassword" placeholder="User ID">
				</div>
			</div>
			<div class="form-group col-sm-6 row">
		      	<label for="inputPassword" class="col-sm-4 col-form-label">Event Name</label>
		      	<div class="col-sm-8">
					<input type="text" class="form-control" id="inputPassword" placeholder="Event Name">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-4 row">
		      	<label for="inputPassword" class="col-sm-4 col-form-label">Event ID</label>
		      	<div class="col-sm-8">
					<input type="text" class="form-control" id="inputPassword" placeholder="Event ID">
				</div>
			</div>
			<div class="form-group col-sm-8 row">
				<button class="btn mr-3" style="width:150px;">Today</button>
				<button class="btn mr-3" style="width:150px;">Yesterday</button>
				<button class="btn mr-3" style="width:150px;">This month</button>
				<button class="btn" style="width:150px;">This year</button>
			</div>
		</div>
		<div>
			<button class="btn btn-primary float-right" style="width:150px;">Search</button>
		</div>
	</div>
</div>
<div class="table-responsive-sm mt-2">
  <table class="table">
    <thead>
		<tr>
			<th scope="col">Date</th>
			<th scope="col">User ID</th>
			<th scope="col">Event ID</th>
			<th scope="col">Event Name</th>
			<th scope="col">Won</th>
			<th scope="col">Payout</th>
			<th scope="col">Paid</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td scope="row">2018-1-23</td>
			<td>Mark</td>
			<td>OTTO456</td>
			<td>Motto Race</td>
			<td>Bla</td>
			<td>$56</td>
			<td><i class="material-icons cursor">check_circle</i></td>
		</tr>
		<tr>
			<td scope="row">2018-1-23</td>
			<td>Mark</td>
			<td>OTTO456</td>
			<td>Motto Race</td>
			<td>Bla</td>
			<td>$56</td>
			<td><i class="material-icons cursor">check_circle</i></td>
		</tr>
		<tr>
			<td scope="row">2018-1-23</td>
			<td>Mark</td>
			<td>OTTO456</td>
			<td>Motto Race</td>
			<td>Bla</td>
			<td>$56</td>
			<td><i class="material-icons cursor">check_circle</i></td>
		</tr>
		<tr>
			<td scope="row">2018-1-23</td>
			<td>Mark</td>
			<td>OTTO456</td>
			<td>Motto Race</td>
			<td>Bla</td>
			<td>$56</td>
			<td><i class="material-icons cursor">check_circle</i></td>
		</tr>
	</tbody>
  </table>
</div>
@endsection