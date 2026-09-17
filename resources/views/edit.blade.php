@extends('layouts.app')

@section('title', 'Edit Task')
@section('content')

@section('styles')

<style>
    .form-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
        border: 2px solid black;
        border-radius: 20px;
        padding: 20px;
        margin: 5px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background-color: aqua;
        margin-bottom: 15px;

    }

    .form-container input {
        width: 100%;
        box-sizing: border-box;
        padding: 8px;
        border: 1px solid #000;
        border-radius: 4px;
    }

    .error-message{
        background-color: red;
        border:1px solid black;
        border-radius: 5px;
        padding: 5px;
    }
</style>

@endsection

<form method="POST" action="{{ route('tasks.update',['id'=>$task->id]) }}" >

    @csrf {{-- ** This is very important ** This is a middleware --}}
    @method('PUT')  {{--// method spoofing --}}
    <div class="form-container">
        <div class=""><label for="title"> Title </label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
            @error('title')
                <p class="error-message">* {{ $message }}</p>
            @enderror
        </div>


        <div>
            <label for="description">Description</label>
            @error('description')
                <p class="error-message">* {{ $message }}</p>
            @enderror
            <input type="text" name="description" id="description" rows="5" value="{{ $task->description }}">
        </div>

        <div>
            <label for="long_description">Long Description</label>
            <input type="text" name="long_description" id="long_description" rows="5" value="{{ $task->long_description }}">        
        
        </div>


        <button type="submit">Edit Task</button>

    </div>

</form>

@endsection
