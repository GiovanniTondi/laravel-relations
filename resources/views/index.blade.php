@extends('layouts.main')

@section('content')


    <div class="content">

        <h1>GESTIONE</h1>

        <ul>
            <li>
                <a href="{!! route('emp-index') !!}">EMPLOYEES</a>
                <a href="">LOCATIONS</a>
                <a href="">TASK</a>
            </li>
        </ul>
    </div>


@endsection