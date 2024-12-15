@extends('layouts.header')
@section('content')





<!-- slider section -->
<section class="slider_section slide">
    <div class="slider_bg_box">
        <img src="images/aaaa1.jpg" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 ">
                            <div class="detail-box">
                                <h1>
                                    ATMAX-MULTISERVICES
                                </h1>
                                <p>
                                Nous sommes ravis de vous offrir nos services automobiles, quelle que soit l'occasion ou le besoin. Notre objectif est d'aller au-delà des attentes de chacun de nos clients.</p>
                                <div class="btn-box">
                                    <a href="/service" class="btn1">
                                        En savoir plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 ">
                            <div class="detail-box">
                                <h1>
                                    ATMAX-MULTISERVICES
                                </h1>
                                <p>
                                Nous vous proposons aussi une sélection d'extras et de services tels que les sièges bébé, la location de service GPS ou couverture transfrontalière au cas où vous vous rendez dans un pays différent de celui où vous avez récupéré votre voiture. 
                                </p>
                                <div class="btn-box">
                                    <a href="/service" class="btn1">
                                        En savoir plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 ">
                            <div class="detail-box">
                                <h1>
                                    ATMAX-MULTISERVICES
                                </h1>
                                <p>
                                   Votre satisfaction notre priorités
                                </p>
                                <div class="btn-box">
                                    <a href="/service" class="btn1">
                                        En savoir plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
    </div>

</section>





<section class="ftco-section ftco-no-pt bg-light mt-3 mb-3">
    <div class="container ">
        <div class="row justify-content-center mt-3">
            <div class="col-md-12 heading-section text-center ftco-animate mt- mb-3">
                <h2> <span class="subheading " style=" color: #fc9400;">Ce que nous offrons</span></h2>
                <h5 class="mb-2">Véhicules en vedette</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                @foreach($welcome as $card)
                <div class="col-md-4">
                    <div class="item">
                        <div class="card border-0 rounded-0 shadow mb-3">
                            <img src="{{asset($card->image)}}" class="card-img-top rounded-0" alt="..." height="250px" width="250px">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h4 class="card-title ">{{$card->nom}}</h4>
                                        <p class="card-text">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            (123)
                                        </p>
                                    </div>
                                    <div class="card-text">
                                        <p>{{$card->description}}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="row align-items-center text-center ">
                                <div class="col-4">
                                    <p class="text-dark">{{$card->prix}}<strong>/Jr</strong></p>

                                </div>
                                <div class="col-8">

                                    <!-- Button trigger modal -->
                                    <a href="{{route('detail',$card->id )}}" data-bs-toggle="modal" type="button" data-bs-target="#exampleModal{{$card->id}}" class="btn btn-dark w-100 p-3 rounded-0 " style="color: #F7921D; border: raduis 3px;">Voir plus</a>


                                    <!-- Modal -->
                                    <div class="modal fade mode" id="exampleModal{{$card->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$card->id}}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg ">
                                            <div class="modal-content">

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="modal-header">
                                                       
                                                          <h1 class="modal-title fs-5 text-center" id="exampleModalLabel ">ATMAX-MULTISERVICES</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="col-auto  d-lg-block ">
                                                                <img src="{{asset($card->image)}}" class="card-img-top rounded-0" alt="..." height="250px" width="250px">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class=" shadow-sm h-md-250 position-relative">
                                                                <div class="col p-4 d-flex flex-column position-static">
                                                                    <h3 class="mb-0">{{$card->nom}}</h3>
                                                                    <p>{{$card->description}}</p>
                                                                    <p class="card-text mb-auto">{{$card->description_complete}} <br> <strong> Les prix peuvent varié en fonction de votre destination ou de votre kilométrages</strong></p>
                                                                    <div class="row align-items-center text-center icon-link gap-1 icon-link-hover">
                                                                        <div class="row align-items-center text-center mt-3">
                                                                            <div class="col-4">
                                                                                <p class="text-dark">{{$card->prix}}<strong>/Jr</strong></p>

                                                                            </div>
                                                                            <div class="col-8">
                                                                                <a href="{{route('inscription',$card->id)}}" class="btn btn-dark w-100 p-3 rounded-0" style="color: #fc9400;">Reserver</a>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row kids">
            <a href="/voiture" class="btn  button mt-2 mb-3 " style=" border: raduis 3px;  color: #fff;">Voir plus</a>

        </div>


    </div>

    <section class="about_section layout_padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/hero-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box ">
                        <h4>
                            Avez-vous besoin d'un conducteur???
                        </h4>
                        <p>
                            Nous avons la possibilité de mettre à votre disposition des conducteurs professionnel pour vos voyages et autres...
                        </p>
                        <a href="https://wa.me/0022940360670/?text=Salut nous voulons avoir plus de renseignement sur la possiblité d'obtenir un conducteur">
                            Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection