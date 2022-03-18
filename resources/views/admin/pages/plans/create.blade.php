@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <form action="{{ route('plans.store')}}" class="form" method="POST">
           @csrf

                <div class="form-gourp">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:">
                </div>
                <div class="form-gourp">
                    <label>Preço:</label>
                    <input type="text" name="price" class="form-control" placeholder="Preço:">
                </div>
                <div class="form-gourp">
                    <label>Descrição:</label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição:">
                </div>
                <div class="form-gourp">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
           </form> 
           
        </div>
    </div>
@endsection