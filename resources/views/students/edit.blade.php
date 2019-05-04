@extends('layouts/master')

@section('content')

<h2>Edit student</h2>


@include('partials.alert')
@include('partials.errors')
<form method="post" action="{{ route('students.update', ['student' => $student->id]) }}">
	@csrf
	@method('PUT')
	<div class='form-group'>
		<label for="name">Name</label>
		<input value="{{old('name', $student->name)}}" type="text" name="name" class="form-control" id="name">
	</div>
	
	<div class='form-group'>
		<label for="email">email</label>
		<input value="{{old('email', $student->email)}}" type="text" name="email" class="form-control" id="email">
	</div>
	<div class='form-group'>
		<button type="submit" class="btn btn-success">
			update a student
		</button>
	</div>
	<!-- /.form-group -->
</form>

@endsection