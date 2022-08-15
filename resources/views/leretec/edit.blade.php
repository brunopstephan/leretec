@extends('layouts/main')

@section('container')
<div class="container">
    <div class="container px-5 my-5">
        <div class="back">
            <a href="/admin" class="btn-back btn-all btn-sm"><i class="uil uil-corner-up-left-alt"></i>Voltar</a>
        </div>
        <div class="card-header text-white">
            <h1>Editando: {{$leretec->title_historia}}</h1>
        </div>

        @if ($errors->any())
        <ul class="form-errors">
            @foreach ($errors->all() as $error)
                <li class="form-error">{{$error}}</li>
            @endforeach
        </ul>
        @endif

        <form action="/admin/update/{{$leretec->id}}" method="POST">
            @csrf {{--permitindo que todo mundo poss afazer POST sem estar autenticado --}}
            @method('PUT')
            <div class="form-card form-floating mb-3">
                <input name="name_aluno" class="form-control" id="nomeDoAluno" type="text" placeholder="Nome do Aluno" value="{{$leretec->name_aluno}}" data-sb-validations="required" />
                <label for="nomeDoAluno">Nome do Aluno</label>
                <div class="invalid-feedback" data-sb-feedback="nomeDoAluno:required">Nome do Aluno é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <select name="class_aluno" class="form-select" id="cursoDoAluno" value="{{$leretec->class_aluno}}" aria-label="Curso do Aluno">
                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                    <option value="Eletrônica" {{$leretec->class_aluno == "Eletrônica" ? "selected='selected'" : ""}}>Eletrônica</option>
                    <option value="Química" {{$leretec->class_aluno == "Química" ? "selected='selected'" : ""}}>Química</option>
                    <option value="Administração" {{$leretec->class_aluno == "Administração" ? "selected='selected'" : ""}}>Administração</option>
                    <option value="Ciências Biológicas" {{$leretec->class_aluno == "Ciências Biológicas" ? "selected='selected'" : ""}}>Ciências Biológicas</option>
                    <option value="Eventos" {{$leretec->class_aluno == "Eventos" ? "selected='selected'" : ""}}>Eventos</option>
                    <option value= {{$leretec->class_aluno == "Edificações" ? "selected='selected'" : ""}}>Edificações</option>
                </select>
                <label for="cursoDoAluno">Curso do Aluno</label>
            </div>
            <div class="form-card form-floating mb-3">
                <select name="grade_aluno" class="form-select" id="serieDoAluno" value="{{$leretec->grade_aluno}}" aria-label="Série do Aluno">
                    <option value="1">1º Ano</option>
                    <option value="2" {{$leretec->grade_aluno == 2 ? "selected='selected'" : ""}}>2º Ano</option>
                    <option value="3" {{$leretec->grade_aluno == 3 ? "selected='selected'" : ""}}>3º Ano</option>
                </select>
                <label for="serieDoAluno">Série do Aluno</label>
            </div>
            <div class="form-card form-floating mb-3">
                <input name="title_historia" class="form-control" id="tituloDaHistoria" type="text" placeholder="Titulo da História" value="{{$leretec->title_historia}}" data-sb-validations="required" />
                <label for="tituloDaHistoria">Titulo da História</label>
                <div class="invalid-feedback" data-sb-feedback="tituloDaHistoria:required">Titulo da História é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <input name="cover_historia" class="form-control" id="tituloDaHistoria" type="text" placeholder="URL da Imagem." value="{{$leretec->cover_historia}}" data-sb-validations="required" />
                <h4>Capa ja selecionada:</h4>
                <img src="{{$leretec->cover_historia}}" alt="" class="img-preview">
                <label for="tituloDaHistoria">Capa da História</label>
                <div class="invalid-feedback" data-sb-feedback="tituloDaHistoria:required">Capa da historia é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <textarea name="sinopse_historia" class="form-control" id="sinopseDaHistoria" type="text" placeholder="Sinopse da História" style="height: 10rem;" data-sb-validations="required">{{$leretec->sinopse_historia}}</textarea>
                <label for="sinopseDaHistoria">Sinopse da História</label>
                <div class="invalid-feedback" data-sb-feedback="sinopseDaHistoria:required">Sinopse da História é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <textarea name="historia" class="form-control" id="Historia" type="text" placeholder="História" value="{{$leretec->historia}}" style="height: 10rem;" data-sb-validations="required">{{$leretec->historia}}</textarea>
                <label for="sinopseDaHistoria">História</label>
                <div class="invalid-feedback" data-sb-feedback="sinopseDaHistoria:required">História é obrigatório.</div>
            </div>
            <div class="d-flex">
                <button class="btn-all btn-lg flex-fill me-1" id="submitButton" type="submit">Enviar</button>
                <button class="btn-all btn-lg flex-fill ms-1" id="reset" type="reset">Limpar</button> 
            </div>
        </form>
    </div>
</div> <!--fim do cotainer -->



@endsection