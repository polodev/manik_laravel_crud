@extends('layouts/master')

@section('content')
<div class='my-2'>
	<a class="btn btn-info" href="{{ route('students.create') }}">Add a students</a>
</div>
<!-- /.my-2 -->
<h2>All students</h2>

@include('partials.alert')

<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Action</th>
	</tr>

	@foreach($students as $student)
		<tr>
			<td>{{$student->name}}</td>
			<td>{{$student->email}}</td>
			<td>
				<a class="btn btn-secondary" href="{{ route('students.edit', ['student' => $student->id]) }}">Edit</a>
				<form onsubmit="return confirm('Are you sure you want to delete this entry?')" method="post" class="d-inline" action="{{ route('students.destroy', ['student' => $student->id]) }}">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
			</td>
		</tr>

	@endforeach

</table>
@endsection