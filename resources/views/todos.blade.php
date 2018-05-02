@extends('layout')

@section('content')
	
	<form action="{{ route('todo.store') }}" method="post">
		{{ csrf_field() }}
		<input text="text" class="form-control input-lg text-center" name="todo" placeholder="Create new todo"/>
		}
	</form>

	<hr>

	@foreach($todos as $todo)
		{{ $todo->todo }} 
		<a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger btn-xs"> x </a>
		<a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-warning btn-xs"> update </a>

		@if(!$todo->completed)
			<a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-success btn-xs"> Mark as complete </a>
		@else
			<span class="text-success">Completed!</span>
		@endif
		<hr>
	@endforeach

@stop