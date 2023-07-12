@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>Students</h1>
        <ul>
            @foreach ($students as $student)
                <li>
                    {{ $student -> name }}
                    {{ $student -> surname }}
                    -
                    {{ $student -> date_of_birth }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection
