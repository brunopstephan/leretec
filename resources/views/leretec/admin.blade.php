@extends('layouts/main')

@section('container')
    <div class="container card-container">
        <div class="back">
            <a href="/" class="btn-back btn-all btn-sm"><i class="uil uil-corner-up-left-alt"></i>Voltar</a>
            <a href="{{route('logout')}}" class="btn-back btn-all btn-sm"><i class="bi bi-arrow-bar-left"></i> Sair do Modo Administrador</a>
        </div>
        <a href="/form" class="btn-all btn-add btn-md">Inserir Historia</a>
        <div class="admin-row row">
            {{-- @foreach ($leretec as $card)
            <div class="card_history col-lg-4 col-md-6 col-sm-12">
                <!-- Card -->
                <div class="card text-center shadow-lg">
                    @if ($card->cover_historia == null)
                    <img src="img/default_image.png" alt="">
                    @else
                    <img src="{{$card->cover_historia}}" alt="">
                    @endif
                    <div class="card-body">
                        <div class="card-admin">
                            <div class="d-flex bd_highlight">
                                <h5 class="card-title w-100">{{$card->title_historia}}</h5>
                                <p>Ultima vez Atualizado: {{$card->updated_at}}</p>
                                <div class="btn-admin btn-group">
                                    <button class="btn btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="uil uil-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-admin dropdown-menu">
                                        <a href="/admin/edit/{{$card->id}}" class="edit-btn"><i class="uil uil-edit"></i>Editar</a>
                                        <form action="/admin/{{$card->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-btn"><i class="uil uil-trash-alt"></i>Deletar</button>
                                        </form>
                                    </ul>
                            </div>
                        </div>
                        </div>
                    </div><!-- card-body -->
                    <div class="card-footer">
                        <a href="" class="btn btn-secondary w-100 my-3" target="_blank" rel="noreferrer noopener">Ler Historia</a>
                        <ul>
                            <li>
                                <h5>Sinopse</h5>
                                <div class="sinopse">
                                    <p>{{$card->sinopse_historia}}</p>
                                </div>
                            </li>
                        </ul>
                    </div><!-- fim do card-footer -->
                </div><!-- fim do card -->
            </div>
        <!--fim da coluna -->
        @endforeach --}}
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
                {{-- @foreach ($leretec as $card)
              <tr>
                <th scope="row">{{$card->name_aluno}}</th>
                <td>{{$card->title_historia}}</td>
                <td>{{$card->created_at->format('d/m/Y')}}</td>
                <td>{{$card->updated_at->format('d/m/Y H:m:s')}}</td>
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
                @endforeach --}}
            </tbody>
          </table>
        </div>
        {{$leretec->links()}}
    </div>
@endsection