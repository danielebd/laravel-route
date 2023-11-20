@extends('layout.app')

@section('main')
    @foreach ($dcomics as $comic)
        <h3>{{ $comic['titolo'] }}</h3>
    @endforeach
@endsection
