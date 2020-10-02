@extends('layouts.main')

@section('content')

    <div class="content">

        <h1>
            EMPLOYEE:
            {{ $emp -> name }} {{ $emp -> lastname }}
        </h1>

        <div class="show">
            <form action="{!! route('emp-save', $emp -> id) !!}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $emp -> name }}">
                </div>

                <div class="form-group">
                    <label for="lastname">Last name:</label>
                    <input type="text" name="lastname" value="{{ $emp -> lastname }}">
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" name="birthday" value="{{ $emp -> birthday }}">
                </div>


                <div class="form-group">
                    <label for="personal_code">Personal Code:</label>
                    <input type="text" name="personal_code" value="{{ $emp -> personal_code }}">
                </div>


                <div class="form-group">
                    <label for="location_id">Location:</label>
                    <select name="location_id">
                        @foreach ($locs as $loc)
                            <option value="{{ $loc -> id }}"

                                @if ($emp -> location_id == $loc -> id)
                                    selected
                                @endif

                                >
                                {{ $loc -> name }} ({{ $loc -> state}})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="button">

                    <button type="submit">SAVE</button>
                </div>

            </form>
        </div>

        <div class="link-menu">
            <a href="{!! route('emp-index') !!}">
                RETURN TO EMPLOYEES
            </a>
            <br>
            <br>
            <a href="{!! route('index') !!}">
                HOMEPAGE
            </a>
        </div>

    </div>

@endsection
