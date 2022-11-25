@extends('layouts/main')

@section('container')

    {{-- ============== CAROUSEL ==================== --}}
    
    
    <!-- Swiper -->
    {{-- <div class="container swiper mySwiper">
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
                    <a href="/historia/{{$carousel->id}}" class="btn-all btn-carousel btn-lg" target="_blank">Ler História</a>
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
      </div> --}}

    {{-- ============== CARD ==================== --}}

        <!--
        Coluna
        col-lg-4  = 3 Vídeos por linha em uma tela grande
        col-md-6  = 2 Vídeos por linha em uma tela média
        col-sm-12 = 1 Vídeo por linha em uma tela pequena
        -->
    <div class="container card-container">
        <div class="row">
            {{-- @if (count($leretec_card))
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
                        <a href="/historia/{{$card->id}}" class="btn btn-secondary w-100 my-3" rel="noreferrer noopener">Ler Historia</a>
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
        
            @else
                <div class="no_history"><h1>Nenhuma historia Registrada.</h1></div>
            @endif --}}

            <div class="search">
                <input type="search" name="search" id="search" placeholder="Procurar uma historia ou aluno" class="form-control">
                <select class="filter form-select" name="filter" id="filter" onchange="filter()">
                    <option value="recent">Mais recentes</option>
                    <option value="old">Mais antigas</option>
                    <option value="most-popular">Mais populares</option>
                </select>
            </div>
            
            <div id="recent">
                @if (count($leretec_card))
                <div class="all_history">
                    @foreach ($leretec_card as $card)
                    <div class="card-history">
                        <div class="card-image">
                            @if ($card->cover_historia == null)
                            <img src="img/default_image.png" alt="">
                            @else
                            <img src="{{$card->cover_historia}}" alt="">
                            @endif
                        </div>
                        <div class="card-info">
                            <p>👀: {{$card->view}} id: {{$card->id}} Data de Inserção: {{$card->date->format('d/m/Y')}} - Última atualização: {{$card->updated_at->format('d/m/Y')}}</p>
                            <p>{{$card->name_aluno}} - {{$card->class_aluno}} - {{$card->grade_aluno}}</p>
                            <h2>{{$card->title_historia}}</h2>
                            <div class="sinopse-container">
                                <p class="card-sinopse">{{$card->sinopse_historia}}</p>
                                <ul>
                                    <li>
                                        <p>Ler mais...</p>
                                        <div class="sinopse-content">
                                          <p>{{$card->sinopse_historia}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="botoes-historia">
                                <a class="btn-all btn-hist" href="/historia/view_user_pdf/{{$card->id}}" target="_blank">Ler Historia</a>
                                <a class="btn-all btn-hist" href="/historia/export_user_pdf/{{$card->id}}">Baixar Historia</a>
                            </div>
                        </div>
                    </div>     
                    @endforeach
                </div>
    
                <div id="Content" class="search_history">
                        
                </div>
    
                @else
                <div class="no_history"><h1>Nenhuma historia Registrada.</h1></div>
                @endif
            </div>
            <div id="old">
                @if (count($leretec_card2))
                <div class="all_history">
                    @foreach ($leretec_card2 as $card)
                    <div class="card-history">
                        <div class="card-image">
                            @if ($card->cover_historia == null)
                            <img src="img/default_image.png" alt="">
                            @else
                            <img src="{{$card->cover_historia}}" alt="">
                            @endif
                        </div>
                        <div class="card-info">
                            <p>👀: {{$card->view}} id: {{$card->id}} Data de Inserção: {{$card->date->format('d/m/Y')}} - Última atualização: {{$card->updated_at->format('d/m/Y')}}</p>
                            <p>{{$card->name_aluno}} - {{$card->class_aluno}} - {{$card->grade_aluno}}</p>
                            <h2>{{$card->title_historia}}</h2>
                            <div class="sinopse-container">
                                <p class="card-sinopse">{{$card->sinopse_historia}}</p>
                                <ul>
                                    <li>
                                        <p>Ler mais...</p>
                                        <div class="sinopse-content">
                                          <p>{{$card->sinopse_historia}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="botoes-historia">
                                <a class="btn-all btn-hist" href="/historia/view_user_pdf/{{$card->id}}" target="_blank">Ler Historia</a>
                                <a class="btn-all btn-hist" href="/historia/export_user_pdf/{{$card->id}}">Baixar Historia</a>
                            </div>
                        </div>
                    </div>     
                    @endforeach
                </div>
    
                <div id="Content2" class="search_history">
                        
                </div>
    
                @else
                <div class="no_history"><h1>Nenhuma historia Registrada.</h1></div>
                @endif
            </div>
            <div id="most-popular">
                @if (count($leretec_card3))
                <div class="all_history">
                    @foreach ($leretec_card3 as $card)
                    <div class="card-history">
                        <div class="card-image">
                            @if ($card->cover_historia == null)
                            <img src="img/default_image.png" alt="">
                            @else
                            <img src="{{$card->cover_historia}}" alt="">
                            @endif
                        </div>
                        <div class="card-info">
                            <p>👀: {{$card->view}} id: {{$card->id}} Data de Inserção: {{$card->date->format('d/m/Y')}} - Última atualização: {{$card->updated_at->format('d/m/Y')}}</p>
                            <p>{{$card->name_aluno}} - {{$card->class_aluno}} - {{$card->grade_aluno}}</p>
                            <h2>{{$card->title_historia}}</h2>
                            <div class="sinopse-container">
                                <p class="card-sinopse">{{$card->sinopse_historia}}</p>
                                <ul>
                                    <li>
                                        <p>Ler mais...</p>
                                        <div class="sinopse-content">
                                          <p>{{$card->sinopse_historia}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="botoes-historia">
                                <a class="btn-all btn-hist" href="/historia/view_user_pdf/{{$card->id}}" target="_blank">Ler Historia</a>
                                <a class="btn-all btn-hist" href="/historia/export_user_pdf/{{$card->id}}">Baixar Historia</a>
                            </div>
                        </div>
                    </div>     
                    @endforeach
                </div>
    
                <div id="Content3" class="search_history">
                        
                </div>
    
                @else
                <div class="no_history"><h1>Nenhuma historia Registrada.</h1></div>
                @endif
            </div>
            {{-- @if (count($leretec_card))
            <div class="all_history">
                @foreach ($leretec_card as $card)
                <div class="card-history">
                    <div class="card-image">
                        @if ($card->cover_historia == null)
                        <img src="img/default_image.png" alt="">
                        @else
                        <img src="{{$card->cover_historia}}" alt="">
                        @endif
                    </div>
                    <div class="card-info">
                        <p>id: {{$card->id}} Data de Inserção: {{$card->date->format('d/m/Y')}} - Última atualização: {{$card->updated_at->format('d/m/Y')}}</p>
                        <p>{{$card->name_aluno}} - {{$card->class_aluno}} - {{$card->grade_aluno}}º ano</p>
                        <h2>{{$card->title_historia}}</h2>
                        <div class="sinopse-container">
                            <p class="card-sinopse">{{$card->sinopse_historia}}</p>
                            <ul>
                                <li>
                                    <p>Ler mais...</p>
                                    <div class="sinopse-content">
                                      <p>{{$card->sinopse_historia}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="botoes-historia">
                            <a class="btn-all btn-hist" href="/historia/view_user_pdf/{{$card->id}}" target="_blank">Ler Historia</a>
                            <a class="btn-all btn-hist" href="/historia/export_user_pdf/{{$card->id}}">Baixar Historia</a>
                        </div>
                    </div>
                </div>     
                @endforeach
            </div>

            <div id="Content" class="search_history">
                    
            </div>

            @else
            <div class="no_history"><h1>Nenhuma historia Registrada.</h1></div>
            @endif --}}

        </div>
        {{-- <div class="leretec_links">{{$leretec_card->links()}}</div>
        <div class="leretec_links">{{$leretec_card2->links()}}</div> --}}
    </div>

@endsection