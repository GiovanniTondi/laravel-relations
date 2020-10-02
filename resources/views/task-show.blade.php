@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>
            TASK:
            {{ $task -> name }}
        </h1>

        <div class="show">
            <form action="{!! route('task-save', $task -> id) !!}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $task -> name }}">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" value="{{ $task -> description }}">
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name="price" value="{{ $task -> price }}">
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="text" name="start_date" value="{{ $task -> start_date }}">
                </div>

                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="text" name="end_date" value="{{ $task -> end_date }}">
                </div>
                <div class="button">

                    <button type="submit">SAVE</button>
                </div>

            </form>
        </div>

        <div class="link-menu">
            <a href="{!! route('task-index') !!}">
                RETURN TO TASKS
            </a>
            <br>
            <br>
            <a href="{!! route('index') !!}">
                HOMEPAGE
            </a>
        </div>

    </div>

@endsection
