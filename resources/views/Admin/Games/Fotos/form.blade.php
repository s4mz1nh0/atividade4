@extends('Admin.Layout.principal')

@section('conteudo-principal')

<section class="section">
    <form action="#" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="file-field input-field">
            <div class="btn">
                <span>Selecionar fotos</span>
                <input type="file" name="foto"/>
            </div>

            <div class="file-path-wrapper">
                <input type="text" class="file-path validade"/>
            </div>
        </div>


    <div class="right-align">
        <a href="{{url()->previous()}}" class="btn-flat waves-effect">Cancelar</a>
        <button class="btn waves-effect waves-light" type="submit">
            Salvar

    </div>

    </form>
</section>

@endsection
