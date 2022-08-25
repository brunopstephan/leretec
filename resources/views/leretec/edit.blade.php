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

        <form action="/admin/update/{{$leretec->id}}" method="POST">
            @csrf {{--permitindo que todo mundo poss afazer POST sem estar autenticado --}}
            @method('PUT')
            <div class="form-card form-floating mb-3">
                <input name="date" class="form-control" id="nomeDoAluno" type="date" placeholder="Nome do Aluno" value="{{$leretec->date->format('Y-m-d')}}" data-sb-validations="required" />
                <label for="nomeDoAluno">Data</label>
                @if ($errors->any())
                <p class="form-error">
                    @error('date')
                        {{$message}}
                    @enderror 
                </p>
                @endif
            </div>
            <div class="form-card form-floating mb-3">
                <input name="name_aluno" class="form-control" id="nomeDoAluno" type="text" placeholder="Nome do Aluno" value="{{$leretec->name_aluno}}" data-sb-validations="required" />
                <label for="nomeDoAluno">Nome do Aluno</label>
                @if ($errors->any())
                <p class="form-error">
                    @error('name_aluno')
                        {{$message}}
                    @enderror 
                </p>
                @endif
            </div>
            <div class="form-card form-floating mb-3">
                <select name="class_aluno" class="form-select" id="cursoDoAluno" value="{{$leretec->class_aluno}}" aria-label="Curso do Aluno">
                    <option value="Selecione um Curso">Selecione um Curso</option>
                    <option value="Desenvolvimento de Sistemas" {{$leretec->class_aluno == "Desenvolvimento de Sistemas" ? "selected='selected'" : ""}}>Desenvolvimento de Sistemas</option>
                    <option value="Eletrônica" {{$leretec->class_aluno == "Eletrônica" ? "selected='selected'" : ""}}>Eletrônica</option>
                    <option value="Química" {{$leretec->class_aluno == "Química" ? "selected='selected'" : ""}}>Química</option>
                    <option value="Administração" {{$leretec->class_aluno == "Administração" ? "selected='selected'" : ""}}>Administração</option>
                    <option value="Ciências Biológicas" {{$leretec->class_aluno == "Ciências Biológicas" ? "selected='selected'" : ""}}>Ciências Biológicas</option>
                    <option value="Eventos" {{$leretec->class_aluno == "Eventos" ? "selected='selected'" : ""}}>Eventos</option>
                    <option value= {{$leretec->class_aluno == "Edificações" ? "selected='selected'" : ""}}>Edificações</option>
                    <option value="Anônimo" {{$leretec->class_aluno == "Anônimo" ? "selected='selected'" : ""}}>Anônimo</option>
                </select>
                <label for="cursoDoAluno">Curso do Aluno</label>
            </div>
            <div class="form-card form-floating mb-3">
                <select name="grade_aluno" class="form-select" id="serieDoAluno" value="{{$leretec->grade_aluno}}" aria-label="Série do Aluno">
                    <option value="Selecione a Série do aluno">Selecione a Série do aluno</option>
                    <option value="1" {{$leretec->grade_aluno == 1 ? "selected='selected'" : ""}}>1º Ano</option>
                    <option value="2" {{$leretec->grade_aluno == 2 ? "selected='selected'" : ""}}>2º Ano</option>
                    <option value="3" {{$leretec->grade_aluno == 3 ? "selected='selected'" : ""}}>3º Ano</option>
                    <option value="4" {{$leretec->grade_aluno == 4 ? "selected='selected'" : ""}}>Anônimo</option>
                </select>
                <label for="serieDoAluno">Série do Aluno</label>
            </div>
            <div class="form-card form-floating mb-3">
                <input name="title_historia" class="form-control" id="tituloDaHistoria" type="text" placeholder="Titulo da História" value="{{$leretec->title_historia}}" data-sb-validations="required" />
                <label for="tituloDaHistoria">Titulo da História</label>
                @if ($errors->any())
                <p class="form-error">
                    @error('title_historia')
                        {{$message}}
                    @enderror 
                </p>
                @endif
            </div>
            <div class="form-card form-floating mb-3">
                <input name="cover_historia" class="form-control" id="tituloDaHistoria" type="text" placeholder="URL da Imagem." value="{{$leretec->cover_historia}}" data-sb-validations="required" />
                <h4>Capa ja selecionada:</h4>
                <img src="{{$leretec->cover_historia}}" alt="" class="img-preview">
                <label for="tituloDaHistoria">Capa da História</label>
            </div>
            <div class="form-card form-floating mb-3">
                <textarea name="sinopse_historia" class="form-control" id="sinopseDaHistoria" type="text" placeholder="Sinopse da História" style="height: 10rem;" data-sb-validations="required">{{$leretec->sinopse_historia}}</textarea>
                <label for="sinopseDaHistoria">Sinopse da História</label>
                @if ($errors->any())
                <p class="form-error">
                    @error('sinopse_historia')
                        {{$message}}
                    @enderror 
                </p>
                @endif
            </div>
            <div class="form-card form-floating mb-3">
                <textarea name="historia" class="form-control" id="Historia" type="text" placeholder="História" value="{{$leretec->historia}}" style="height: 10rem;" data-sb-validations="required">{{$leretec->historia}}</textarea>
                <label for="sinopseDaHistoria">História</label>
                @if ($errors->any())
                <p class="form-error">
                    @error('historia')
                        {{$message}}
                    @enderror 
                </p>
                @endif
            </div>
            <div class="d-flex">
                <button class="btn-all btn-lg flex-fill me-1" id="submitButton" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div> <!--fim do cotainer -->



@endsection