@extends('layouts/main')

@section('container')
    <div class="container card-container">
        <div class="card_info">
            <div class="img_historia">
                <img src="https://pbs.twimg.com/profile_images/1202532098562830341/e0-Zn6De_400x400.jpg" alt="Avatar">
            </div>
            <div class="info_historia">
                <p>Nome Aluno - Data - Curso - Ano</p>
                <h1>Titulo da Historia</h1>
                <p>Sinopse</p>
                <div class="btn_info">
            <a class="btn-all btn-info" href="">Ler Historia</a>
            <a class="btn-all btn-info" href="">Baixar Historia</a>
          </div>
            </div>
        </div>
    </div>
@endsection