@extends('layouts/main')

@section('container')

    {{-- ============== CAROUSEL ==================== --}}

    <div id="carouselExampleCaptions" class="container carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://play-lh.googleusercontent.com/5B6Z4GWPuAlrnZDtqI8tdlnngu4dg-QG3lD2OTIvyvzSGCRJibEDaAbvQr6TMCPjqUc" class="d-block h-100 w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Amogus: The History</h5>
            <a href="/historia" class="btn-all btn-carousel btn-lg" target="_blank">Ler História</a>
            </div>
        </div>
        
        @foreach ($leretec as $carousel_item)
            
        <div class="carousel-item">
            <img src="{{$carousel_item->cover_historia}}" class="d-block h-100 w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>{{$carousel_item->title_historia}}</h5>
            <a href="/historia" class="btn-all btn-carousel btn-lg" target="_blank">Ler História</a>
            </div>
        </div>

        @endforeach
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Proximo</span>
        </button>
    </div>

    {{-- ============== CARD ==================== --}}

        <!--
        Coluna
        col-lg-4  = 3 Vídeos por linha em uma tela grande
        col-md-6  = 2 Vídeos por linha em uma tela média
        col-sm-12 = 1 Vídeo por linha em uma tela pequena
        -->
    <div class="container card-container">
        <div class="row">
            @foreach ($leretec as $card)
            <div class="card_history col-lg-4 col-md-6 col-sm-12">
                <!-- Card -->
                <div class="card-book card text-center shadow-lg">
                        <img src="{{$card->cover_historia}}" alt="">
                    <div class="card-body">
                        <div class="d-flex bd_highlight">
                            <h5 class="card-title w-100">{{$card->title_historia}}</h5>
                        </div>
                    </div><!-- card-body -->
                    <div class="card-footer">
                        <a href="/historia" class="btn btn-secondary w-100 my-3" target="_blank" rel="noreferrer noopener">Ler Historia</a>
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