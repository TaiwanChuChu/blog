@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="form-row">
			<div class="form-group col-12 mb-2">
				<a href="{{ route('chat.index') }}">
					<button class="btn btn-danger">離開</button>
				</a>
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Email</label>
				<input type="email" class="form-control" id="inputEmail4">
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4">Password</label>
				<input type="password" class="form-control" id="inputPassword4">
			</div>
			<div class="form-group col-md-12">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			</div>
		</div>
	</div>
@endsection
