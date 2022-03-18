@extends('adminlte::page')

@section('title', "Detalhes do Plano {plan->name}")

@section('content_header')
   <h1>Detalhes do Planos <b>{{ $plan->name }}</b></h1>
@stop

@section('content')
    <div class="card">
            <div class="card-header">
                <ul>
                    <li>
                        <strong>Nome:</strong> {{ $plan->name }}
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>URL:</strong> {{ $plan->url }}
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Preço:</strong> R$ {{ number_format($plan->price, 2, ',', '.') }}
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Descrição:</strong> {{ $plan->description }}
                    </li>
                </ul>

                <form action="{{ route('plans.destroy',$plan->url) }}" method="POST">
                   @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETAR O PLANO: {{ $plan->name }}</button>
                </form>
            </div>
    </div>
@endsection