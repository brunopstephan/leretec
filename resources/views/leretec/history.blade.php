@extends('layouts/main')

@section('container')
    <div class="container card-container">
        <div class="info">
            <div class="img-info">
                @if ($leretec->cover_historia == null)
                <img src="img/default_image.png" alt="">
                @else
                <img src="{{$leretec->cover_historia}}" alt="">
                @endif
            </div>
            <div class="info-geral">
                <p>Data de Inserção: {{$leretec->date->format('d/m/Y')}} - Última atualização: {{$leretec->updated_at->format('d/m/Y')}}</p>
                <p>{{$leretec->name_aluno}} - {{$leretec->class_aluno}} - {{$leretec->grade_aluno}}º ano</h6>
                <h2>{{$leretec->title_historia}}</h2>
                <p>{{$leretec->sinopse_historia}}</p>
                <div class="botoes-historia">
                    <a class="btn-all btn-hist" href="/historia/view_user_pdf/{{$leretec->id}}">Ler Historia</a>
                    <a class="btn-all btn-hist" href="/historia/export_user_pdf/{{$leretec->id}}">Baixar Historia</a>
                </div>
            </div>
        </div>
    </div>
@endsection