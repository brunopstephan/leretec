@extends('layouts/main')

@section('container')
    <div class="container card-container">
        <div class="back">
            <a href="/admin" class="btn-back btn-all btn-sm"><i class="uil uil-corner-up-left-alt"></i>Voltar</a>
            <a href="/admin/users/register" class="btn-back btn-all btn-sm">Criar Usúario</a>
        </div>
        <table class="table_admin table">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Criação</th>
                <th scope="col">Ultima vez atualizada</th>
              </tr>
            <tbody>
                @if (count($allusers))
                @foreach ($allusers as $user)
                <tr>
                  <th scope="row">{{$user->name}}</th>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at->format('d/m/Y')}}</td>
                  <td>{{$user->updated_at->format('d/m/Y H:i:s')}}</td>
                  <td>
                      <div class="func_admin">
                      {{-- <a href="/admin/edit/{{$card->id}}" class="edit-btn"><i class="uil uil-edit"></i>Editar</a>
                      <form action="/admin/{{$card->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="delete-btn"><i class="uil uil-trash-alt"></i>Deletar</button>
                      </form> --}}
                  </div>
                  </td>
                </tr>
                
                  @endforeach
                @else
                    <td>Nenhum Usuario registrado.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                @endif
            </tbody>
          </table>
    </div>
@endsection