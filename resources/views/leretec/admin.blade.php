@extends('layouts/main')

@section('container')
    <div class="container card-container admin-container">
        <div class="back">
          <div class="other-adm-c">
            <a href="/home" class="btn-back btn-all btn-sm"><i class="uil uil-corner-up-left-alt"></i>Voltar</a>
            <a href="{{route('logout')}}" class="btn-back btn-all btn-sm"><i class="bi bi-arrow-bar-left"></i> Sair do Modo Administrador</a>
            <a href="/form" class="btn-back btn-all btn-sm">Inserir Historia</a>
          </div>
            <div class="config-c">
              <a href="/admin/newlink" class="btn-back btn-all btn-sm"><i class="bi bi-gear-fill"></i></a>
            </div>
            {{-- <a href="/admin/users" class="btn-back btn-all btn-sm">Gerenciar Usuários</a> --}}
        </div>
        <div class="admin-row row">
        <table class="table_admin table">
            <thead>
              <tr>
                <th scope="col">Nome do Aluno</th>
                <th scope="col">Titulo da Historia</th>
                <th scope="col">Data de Criação</th>
                <th scope="col">Ultima vez atualizada</th>
              </tr>
            <tbody>
                @if (count($leretec))
                @foreach ($leretec as $card)
                <tr>
                  <th scope="row">{{$card->name_aluno}}</th>
                  <td>{{$card->title_historia}}</td>
                  <td>{{$card->date->format('d/m/Y')}}</td>
                  <td>{{$card->updated_at->format('d/m/Y H:i:s')}}</td>
                  <td>
                      <div class="func_admin">
                      <a href="/admin/edit/{{$card->id}}" class="edit-btn"><i class="uil uil-edit"></i>Editar</a>
                      <form action="/admin/{{$card->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="delete-btn"><i class="uil uil-trash-alt"></i>Deletar</button>
                      </form>
                  </div>
                  </td>
                </tr>
                
                  @endforeach
                @else
                    <td>Nenhum livro registrado.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                @endif
            </tbody>
          </table>
        </div>
    </div>
@endsection