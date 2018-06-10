@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Laravel</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/acerca">Acerca de Nosotros</a>
            </li>
        </ul>
    </nav>
</div>
<div class="row">
    @forelse($messages as $message)
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $message['image'] }}">
            <p class="card-text">{{ $message['content'] }}
                <a href="/messages/" {{ $message['id'] }}>Leer mas</a>
            </p>
        </div>
    @empty
        <p>No hay mensajes Destacados.</p>
    @endforelse
</div>
@endsection