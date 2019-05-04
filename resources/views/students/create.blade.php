@extends('layouts/master')

@section('content')

<h2>Add a student</h2>

@include('partials.alert')
@include('partials.errors')

<form method="post" action="{{ route('students.store') }}">
	@csrf
	<div class='form-group'>
		<label for="name">Name</label>
		<input value="{{old('name')}}" type="text" name="name" class="form-control" id="name">
	</div>
	
	<div class='form-group'>
		<label for="email">email</label>
		<input value="{{old('email')}}" type="text" name="email" class="form-control" id="email">
	</div>
	<div class='form-group'>
		<button type="submit" class="btn btn-success">
			Add a student
		</button>
	</div>
	<!-- /.form-group -->
</form>

@endsection