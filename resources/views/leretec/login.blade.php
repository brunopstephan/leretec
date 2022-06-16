@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h1>Modo Administrador</h1>
                </div>
                <div class="card-body">
                    <div class="container px-3 my-3">
                        <form action="/form" method="POST">
                            @csrf {{--  permitindo que todo mundo poss afazer POST sem estar autenticado --}}

                            {{-- Data  --}}
                            <div class="form-card form-floating mb-3">
                                <input name="admin_user" class="form-control" id="adminUser" type="text" placeholder="Usuário" data-sb-validations="required" />
                                <label for="dataMed">Usuário</label>
                                <div class="invalid-feedback" data-sb-feedback="dataMed:required">Data da medição é obrigatório.</div>
                            </div>

                            {{-- Peso  --}}
                            <div class="form-card form-floating mb-3">
                                <input name="admin_password" class="form-control" id="adminPass" type="text" placeholder="Senha" data-sb-validations="required" />
                                <label for="pesoKg">Peso(Kg)</label>
                                <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso(Kg) é obrigatório.</div>
                            </div>

                            <a href="/form" class="btn btn-lg btn-secondary">Entrar</a>

                        </form>
                    </div>

                </div>
            </div> <!--fim do  -->
        </div> <!--fim da coluna -->
    </div> <!--fim do row -->
</div> <!--fim do cotainer -->
@endsection