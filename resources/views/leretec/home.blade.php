@extends('layouts/main')

@section('container')

    {{-- ============== CAROUSEL ==================== --}}
    
    
    <!-- Swiper -->
    <div class="container swiper mySwiper">
        <div class="swiper-wrapper">
            @if (count($leretec_carousel))
            @foreach ($leretec_carousel as $carousel)
            <div class="swiper-slide">
                @if ($carousel->cover_historia == null)
                <img src="img/default_image.png" alt="">
                @else
                <img src="{{$carousel->cover_historia}}" alt="">
                @endif
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{$carousel->title_historia}}</h5>
                    <a href="/historia" class="btn-all btn-carousel btn-lg" target="_blank">Ler História</a>
                    </div>
                </div>
                @endforeach
                @else
                <div class="swiper-slide">
                    <img src="img/default_image.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Nenhum Livro Resgistrado.</h5>
                        </div>
                </div>
                @endif
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
            @if (count($leretec_card))
            @foreach ($leretec_card as $card)
            <div class="card_history">
                <!-- Card -->
                <div class="card-book card text-center shadow-lg">
                        @if ($card->cover_historia == null)
                        <img src="img/default_image.png" alt="">
                        @else
                        <img src="{{$card->cover_historia}}" alt="">
                        @endif
                        
                    <div class="card-body">
                        <div class="d-flex bd_highlight">
                            <h5 class="card-title w-100">{{$card->title_historia}}</h5>
                        </div>
                    </div><!-- card-body -->
                    <div class="card-footer">
                        <a href="/view_user_pdf/{{$card->id}}" class="btn btn-secondary w-100 my-3" target="_blank" rel="noreferrer noopener">Ler Historia</a>
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
        {{-- {{$leretec_card->links()}} --}}
            @else
                <div class="no_history"><h1>Nenhuma historia Registrada.</h1></div>
            @endif
            {{-- @foreach ($leretec as $card)
            <div class="card_history">
                <!-- Card -->
                <div class="card-book card text-center shadow-lg">
                        @if ($card->cover_historia == null)
                        <img src="img/default_image.png" alt="">
                        @else
                        <img src="{{$card->cover_historia}}" alt="">
                        @endif
                        
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
        @endforeach --}}
        </div>
    </div>


@endsection