@extends('layout.app')

@section('title', 'Cadastro de Produtos')

@section('content')
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <div  class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control" />
            <small class="text-danger">
                @foreach($errors->get('name') as $message)
                    {{ $message }}
                @endforeach
            </small>
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="number" name="amount" class="form-control" />
            <small class="text-danger">
                @foreach($errors->get('amount') as $message)
                    {{ $message }}
                @endforeach
            </small>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
            <small class="text-danger">
                @foreach($errors->get('description') as $message)
                    {{ $message }}
                @endforeach
            </small>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
