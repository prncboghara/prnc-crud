@extends('crud::master')
@section('title','Insert Data')
@section('form')
<div class="container mt-5">	
	<div class="jumbotron">
		<h1 class="text-center display-6">Fill Up Form!!</h1>
			<form class="needs-validation" action="{{ route('input')}}" method="POST">
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Firstname</span></label>
					<input type="text" class="form-control" name="fname">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Lastname</span></label>
					<input type="text" class="form-control" name="lname">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Email Address</span></label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Address</span></label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" name="Address" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1"><span class="lead">Select Your Nationality</span></label>
				</div>
				<select class="custom-select" name="country">
					<option selected>SELECT YOUR NATIONALITY</option>
					<option value="India">India</option>
					<option value="USA">USA</option>
					<option value="UK">UK</option>
				</select>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-primary form-control mb-2">Send</button>
				</div>
			</form>
	</div>
</div>
@endsection('form')