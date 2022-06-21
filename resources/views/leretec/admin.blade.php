@extends('layouts/main')

@section('container')
    <div class="container card-container">
        <a href="/form" class="btn-all btn-add btn-md">Inserir Historia</a>
        <div class="admin-row row">
            @foreach ($leretec as $card)
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
        @endforeach
        </div>
    </div>
@endsection