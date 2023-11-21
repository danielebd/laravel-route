@extends('layout.app')

@section('main')
    <ul>
        <li>
            <div>{{ $comic_index['titolo'] }}</div>
            <div>{{ $comic_index['autore'] }}</div>
            <div>{{ $comic_index['data_di_rilascio'] }}</div>
            <div>{{ $comic_index['artista'] }}</div>
        </li>
    </ul>
@endsection
