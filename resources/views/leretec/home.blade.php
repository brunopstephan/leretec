@extends('layouts/main')

@section('container')

    {{-- ============== CAROUSEL ==================== --}}

    <!-- Swiper -->
    <div class="container swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($leretec as $carousel)
            <div class="swiper-slide"><img src="{{$carousel->cover_historia}}" alt=""></div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
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