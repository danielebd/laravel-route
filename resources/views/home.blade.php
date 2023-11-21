@extends('layout.app')

@section('main')
    <div class="container d-flex flex-wrap gap-3 pt-4 mx-auto">
        @foreach ($dcomics as $comic)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['titolo'] }}</h5>
                    <ul>
                        <li>{{ $comic['data_di_rilascio'] }}</li>
                        <li>{{ $comic['pagine'] }}</li>
                        <li>{{ $comic['autore'] }}</li>
                    </ul>
                    <a href="{{route('detail', ['index' => $loop->index])}}" class="btn btn-primary">Dettaglio</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
