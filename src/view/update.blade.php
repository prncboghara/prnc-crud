@extends('crud::master')
@section('title','Show Data')
@section('form')
<div class="container">
	<div class="jumbotron mt-5">
		<form action="{{ route('show') }}" method="POST">
			<div class="form-group">
				<label for="exampleFormControlTextarea1"><span class="lead">Enter Your Email Address</span></label>
				<input type="email" class="form-control" name="email">
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-primary form-control mb-2">Send</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection('form')