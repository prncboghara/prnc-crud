@extends('crud::master')
@section('title','Set Data')
@section('form')
<div class="container mt-5">	
	<div class="jumbotron">
		<h1 class="text-center display-6">Change Your Update Item</h1>
		<div class="alert alert-success">
			<stong>Note:</stong> There You Can Not Changes On Your Gmail That Was Unique 
		</div>
			<form class="needs-validation" action="{{ route('update') }} " method="POST">
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Firstname</span></label>
					<input type="text" class="form-control" value="{{$fname}}" name="fname">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Lastname</span></label>
					<input type="text" class="form-control" value="{{$lname}}" name="lname">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Email Address</span></label>
					<input type="email" class="form-control" value="{{$email}}" name="email">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Address</span></label>
    				<input type="text" class="form-control" name="address" value="{{$address}}">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Select Your Nationality</span></label>
				</div>
				<select class="custom-select" value={{$country}} name="country">
					<option selected>SELECT YOUR NATIONALITY</option>
					<option value="India">India</option>
					<option value="USA">USA</option>
					<option value="UK">UK</option>
				</select>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-primary form-control mb-2">Update Data!!</button>
				</div>
			</form>
	</div>
</div>
@endsection('form')