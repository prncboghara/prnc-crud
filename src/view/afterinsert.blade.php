@extends('crud::master')
@section('title','AfterInsertData')
@section('form')
<div class="jumbotron mt-5">
	<div class="alert alert-primary">
		Data Inserted Sucessfully
	</div>
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th class="col">Firstname</th>
				<th class="col">Lastname</th>
				<th class="col">Email</th>
				<th class="col">Address</th>
				<th class="col">Nationality</th>
			</tr>
			<tr>
				<td> {{$fname}} </td>
				<td> {{$lname}} </td>
				<td> {{$email}} </td>
				<td> {{$address}} </td>
				<td> {{$country}} </td>
			</tr>
		</thead>
	</table>
	<p class="lead mt-5">Hello Mr,{{$fname}}</p>
	<p class="lead">If you want to Update Your Data,So click On Update Button</p>
	<form class="form-group" action="/crud/showdata">
		<button type="submit" class="btn btn-primary form-control">Update</button>
	</form>
</div>
@endsection('form')