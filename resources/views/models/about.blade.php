@extends('home')

@section('about')
    <div class="container">
        <h1>Conosciamoci!</h1>
        <ul>
            @foreach ($lista as $item)
                <li>
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
