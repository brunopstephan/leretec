@extends('layouts/main')

@section('container')

<div class="container card-container">
    <div class="container px-5 my-5">
        <div class="back">
            <a href="/admin" class="btn-back btn-all btn-sm"><i class="uil uil-corner-up-left-alt"></i>Voltar</a>
        </div>
        <div class="card-header text-white">
            <h1>Cadastrar</h1>
        </div>

        @if ($errors->any())
            <ul class="form-errors">
                @foreach ($errors->all() as $error)
                    <li class="form-error">{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form action="/form" method="POST">
            @csrf {{--permitindo que todo mundo poss afazer POST sem estar autenticado --}}
            <div class="form-card form-floating mb-3">
                <input name="date" class="form-control" id="data" type="date" placeholder="Data" data-sb-validations="required" />
                <label for="data">Data</label>
                <div class="invalid-feedback" data-sb-feedback="data:required">Data é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <input name="name_aluno" class="form-control" id="nomeDoAluno" type="text" placeholder="Nome do Aluno" data-sb-validations="required" />
                <label for="nomeDoAluno">Nome do Aluno</label>
                <div class="invalid-feedback" data-sb-feedback="nomeDoAluno:required">Nome do Aluno é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <select name="class_aluno" class="form-select" id="cursoDoAluno" aria-label="Curso do Aluno">
                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                    <option value="Eletrônica">Eletrônica</option>
                    <option value="Química">Química</option>
                    <option value="Administração">Administração</option>
                    <option value="Ciências Biológicas">Ciências Biológicas</option>
                    <option value="Eventos">Eventos</option>
                    <option value="Edificações">Edificações</option>
                </select>
                <label for="cursoDoAluno">Curso do Aluno</label>
            </div>
            <div class="form-card form-floating mb-3">
                <select name="grade_aluno" class="form-select" id="serieDoAluno" aria-label="Série do Aluno">
                    <option value="1">1º Ano</option>
                    <option value="2">2º Ano</option>
                    <option value="3">3º Ano</option>
                </select>
                <label for="serieDoAluno">Série do Aluno</label>
            </div>
            <div class="form-card form-floating mb-3">
                <input name="title_historia" class="form-control" id="tituloDaHistoria" type="text" placeholder="Titulo da História" data-sb-validations="required" />
                <label for="tituloDaHistoria">Titulo da História</label>
                <div class="invalid-feedback" data-sb-feedback="tituloDaHistoria:required">Titulo da História é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <input name="cover_historia" class="form-control" id="tituloDaHistoria" type="text" placeholder="URL da Imagem." data-sb-validations="required" />
                <label for="tituloDaHistoria">Capa da História</label>
                <div class="invalid-feedback" data-sb-feedback="tituloDaHistoria:required">Titulo da História é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <textarea name="sinopse_historia" class="form-control" id="sinopseDaHistoria" type="text" placeholder="Sinopse da História" style="height: 10rem;" data-sb-validations="required"></textarea>
                <label for="sinopseDaHistoria">Sinopse da História</label>
                <div class="invalid-feedback" data-sb-feedback="sinopseDaHistoria:required">Sinopse da História é obrigatório.</div>
            </div>
            <div class="form-card form-floating mb-3">
                <textarea name="historia" class="form-control" id="Historia" type="text" placeholder="História" style="height: 10rem;" data-sb-validations="required"></textarea>
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