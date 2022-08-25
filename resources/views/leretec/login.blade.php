@extends('layouts/main')

@section('container')
<div class="container card-container">
    <div class="row">
        <div class="col-12">
            <div class="login-form card shadow-sm">
                <div class="card-header text-white">
                    <h1>Modo Administrador</h1>
                </div>
                <div class="card-body">
                    <div class="container px-3 my-3">

                        <form action="/auth" method="POST">
                            @csrf

                            @if (session('danger'))
                            <p class="form-error">{{session('danger')}}</p>
                        @endif

                            <div class="form-card form-floating mb-3">
                                <input name="email" class="form-control" id="adminUser" type="email" placeholder="Email" data-sb-validations="required" />
                                <label for="dataMed">Email</label>
                                @error('email')
                                    <p class="form-error">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-card form-floating mb-3">
                                <input name="password" class="form-control" id="adminPass" type="password" placeholder="Senha" data-sb-validations="required" />
                                <label for="password">Senha</label>
                                @error('password')
                                <p class="form-error">{{$message}}</p>
                            @enderror
                            </div>

                            <button type="submit" class="btn-all btn-lg">Entrar</button>

                        </form>
                    </div>
                </div>
            </div> <!--fim do  -->
        </div> <!--fim da coluna -->
    </div> <!--fim do row -->
</div> <!--fim do cotainer -->
@endsection