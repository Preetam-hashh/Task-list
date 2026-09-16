@extends('layouts.app')

@section('title', 'Add Task')
@section('content')
<style>
    .form-container{
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

    .form-container input{
        width: 100%;
        box-sizing: border-box;
        padding: 8px;
        border: 1px solid #000;
        border-radius: 4px;
    }
    
  </style>
    <form action="{{ route('tasks.store') }}" method="POST">

        @csrf {{-- ** This is very important ** This is a middleware --}}
        <div class="form-container">
            <div class=""><label for="title"> Title </label>
            <input type="text" name="title" id="title"></div>
            

            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>

            <div>
                <label for="long_description">Long Description</label>
                <input type="textarea" name="long_description" id="long_description" rows="3">
            </div>


            <button type="submit">Add Task</button>

        </div>

    </form>

@endsection
