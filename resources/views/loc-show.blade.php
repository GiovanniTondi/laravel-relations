@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>{{ $loc -> name }} ({{ $loc -> state }})</h1>

        <div class="show">
            <form action="{!! route('loc-save', $loc -> id) !!}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $loc -> name }}">
                </div>

                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" name="state" value="{{ $loc -> state }}">
                </div>

                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" name="city" value="{{ $loc -> city }}">
                </div>


                <div class="form-group">
                    <label for="street_name">Street:</label>
                    <input type="text" name="street_name" value="{{ $loc -> street_name }}">
                </div>

                <div class="form-group">
                    <label for="street_address">Address:</label>
                    <input type="text" name="street_address" value="{{ $loc -> street_address }}">
                </div>

                <div class="button">

                    <button type="submit">SAVE</button>
                </div>

            </form>
        </div>

        <div class="link-menu">
            <a href="{!! route('loc-index') !!}">
                RETURN TO LOCATIONS
            </a>
            <br>
            <br>
            <a href="{!! route('index') !!}">
                HOMEPAGE
            </a>
        </div>

    </div>

@endsection
