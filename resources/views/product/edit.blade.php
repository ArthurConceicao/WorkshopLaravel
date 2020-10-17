@extends('layout.app')

@section('title', 'Cadastro de Produtos')

@section('content')
    <form method="POST" action="{{ route('product.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}"/>
            <small class="text-danger">
                @foreach($errors->get('name') as $message)
                    {{ $message }}
                @endforeach
            </small>
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="number" name="amount" class="form-control" value="{{ old('amount', $product->amount) }}"/>
            <small class="text-danger">
                @foreach($errors->get('amount') as $message)
                    {{ $message }}
                @endforeach
            </small>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
            <small class="text-danger">
                @foreach($errors->get('description') as $message)
                    {{ $message }}
                @endforeach
            </small>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
