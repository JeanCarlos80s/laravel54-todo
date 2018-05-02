@extends('layout')

@section('content')
	
	<form action="{{ route('todos.save', ['id' => $todo->id]) }}" method="post">
		{{ csrf_field() }}
		<input text="text" class="form-control input-lg text-center" name="todo" value="{{ $todo->todo }}"/>
		}
	</form>

	<hr>

@stop