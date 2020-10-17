@extends('layout.app')

@section('title', 'Olar Laraveleiros')

@section('content')
    @foreach($instruments as $instrument)
        <div class="card">
            <div class="card-body">
                {{ json_encode($instrument) }}
            </div>
        </div>
    @endforeach
@endsection
