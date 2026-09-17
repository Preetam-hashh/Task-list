@extends('layouts.app')

@section('title','The List of Tasks')


@section('content')
<div>
  {{-- @if (count($tasks)) --}}
  @forelse ($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
    </div>

    
  @empty
    <div>There are no tasks!</div>
  @endforelse
  {{-- @endif --}}


</div>

<div>
      <a href="{{ route('tasks.create') }}">Click this for adding task</a>
    </div>
@endsection
