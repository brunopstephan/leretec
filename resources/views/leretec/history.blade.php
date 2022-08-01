@extends('layouts/main')

@section('container')
    <div class="container card-container">
        <div class="card_info">
            <div class="img_historia">
                <img src="https://static-cse.canva.com/blob/759754/IMAGE1.jpg" alt="Avatar" style="width:30%">
            </div>
            <div class="info">
                <h1>Titulo da Historia</h1>
                <p>Nome Aluno</p>
                <p>Data</p>
                <p>Curso/Serie</p>
                <p>Sinopse</p>
            </div>
          </div>
          <div class="btn_info">
            <a class="btn-all" href="">Ler Historia</a>
            <a class="btn-all" href="">Baixar Historia</a>
          </div>
    </div>
@endsection