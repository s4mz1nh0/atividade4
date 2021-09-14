@extends('Admin.Layout.principal')

@section('conteudo-principal')

<h4>{{$game->nome}}</h4>

<section class="section">

    @forelse ($fotos as $foto)
    <div>{{$foto->url}}</div>
    @empty
    <div>Não existem fotos para esse game</div>
    @endforelse

    <div class="fixed-action-btn">
        <a href="{{route('Admin.Games.Fotos.create', $game->id)}}"
            class="btn-floating btn-large waves-effect waves-light">
            <i class="large material-icons">add</i>
        </a>
    </div>



</section>
@endsection
