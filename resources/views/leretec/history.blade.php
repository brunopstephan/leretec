@extends('layouts/main')

@section('container')
    <div class="container card-container">
        <div class="card_info">
            <div class="img_historia">
                <img src="{{$leretec->cover_historia}}" alt="Avatar">
            </div>
            <div class="info_historia">
                <p>{{$leretec->name_aluno}} - {{$leretec->date}} - {{$leretec->class_aluno}} - {{$leretec->grade_aluno}}</p>
                <h1>{{$leretec->title_historia}}</h1>
                <p>{{$leretec->sinopse_historia}}</p>
                <div class="btn_info">
            <a class="btn-all btn-info" href="">Ler Historia</a>
            <a class="btn-all btn-info" href="">Baixar Historia</a>
          </div>
            </div>
        </div>
    </div>
@endsection