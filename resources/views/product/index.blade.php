@extends('layout.app')

@section('title', 'Listagem de Produtos')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <form action="{{ route('product.index') }}" class="d-flex">
                <input type="text" name="filter" class="form-control" />
                <button type="submit" class="btn btn-info">Filtrar</button>
            </form>
        </div>
        <div class="col-md-3">
            <a class="btn btn-primary" href="{{ route('product.create') }}">Cadastrar</a>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-sm table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <td>Nome</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <td>Preço</td>
                                <td>{{ $product->amount }}</td>
                            </tr>
                            <tr>
                                <td>Descrição</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-danger"
                           href="{{ route('product.destroy', $product->id) }}">
                            Remover
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
