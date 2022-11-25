@extends('layouts/main')

@section('container')
    <div class="container landing">
        <div class="landing-container">
            <div class="left-landing">
                <h1>Conheça histórias criadas por alunos da E.T.E.C João Belarmino.</h1>
                <p>O site "Leretec" foi elaborado como trabalho para o TCC (Trabalho de Conclusão de Curso) do 3° ano da turma de Desenvolvimento de Sistemas de 2022. Este site tem como objetivo servir de acervo para histórias criadas por alunos da ETEC João Belarmino, mas que podem ser acessadas por qualquer pessoa que se interesse em lê-las.</p>
                <div class="btn-landing">
                    <a class="btn-all btn-hist" href="/home">Explorar histórias</a>
                    <?php
                        $config = json_decode(file_get_contents(".felps"), true);

                        echo '<a class="btn-all btn-hist" href="'.$config['link'].'" target="_blink">É aluno? Comece já!!</a>';
                    ?>
                </div>
            </div>
            <div class="right-landing">
                <img src="img/bruno.png" alt="">
            </div>
        </div>
    </div>
@endsection