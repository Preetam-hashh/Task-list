@extends('layouts.app')

@section('title',$task->title)

@section('content')
<p>{{ $task->description }}</p>

@if ($task->long_description)
    <p>Description : {{ $task->long_description }}</p>
@endif

<p>Created at :{{ $task->created_at }}</p>

<p>updated at :{{ $task->updated_at }}</p>
@endsection