@extends('layouts.header')
@section('content')

<style>
    .ftco-intro {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;
        overflow: hidden;
        z-index: 0;
    }

    @media (min-width: 768px) {
        .ftco-intro .overlay {
            position: absolute;
            top: -120px;
            left: -100px;
            right: 0;
            bottom: -120px;
            width: 40%;
            content: '';
            opacity: 1;
            background: #01d28e;
            -ms-transform: rotate(20deg);
            /* IE 9 */
            -webkit-transform: rotate(20deg);
            /* Safari 3-8 */
            transform: rotate(20deg);
        }
    }

    .ftco-intro:after {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        background: #000000;
        z-index: -2;
        opacity: .3;
    }

    .ftco-section-parallax {
        position: relative;
    }

    .ftco-section-parallax .heading-section-white h2 {
        font-weight: 400 !important;
    }

    .ftco-degree-bg {
        position: relative;
    }

    .ftco-degree-bg:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -50px;
        overflow: visible;
        width: 100%;
        height: 120px;
        z-index: 0;
        -webkit-transform: skewY(-4deg);
        -moz-transform: skewY(-4deg);
        -ms-transform: skewY(-4deg);
        -o-transform: skewY(-4deg);
        transform: skewY(-4deg);
        background-color: #f8f9fa;
    }
   
    .button {
    height: 50px;
    width: 150px;
    text-align: center;
    padding-top: 10px;
   background-color: #fc9400;
   border:none;
  }
  .button:hover {
    background-color:  white;
    color:#fc9400;
    border: #fc9400 1px solid;

  }
  
   
</style>

<!-- slider section -->
<section class="slider_section ">
    <div class="slider_bg_box">
        <img src="images/slider-bg.jpg" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 ">
                            <div class="detail-box">
                                <h1>
                                    We Provide best <br>
                                    Transport Service
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Get A Quote
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
                                    We Provide best <br>
                                    Transport Service
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Get A Quote
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
                                    We Provide best <br>
                                    Transport Service
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Get A Quote
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
<section class="ftco-section ftco-no-pt bg-light mt-5 mb-5">
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate mt-5 mb-5">
               <h2> <span class="subheading " style=" color: #fc9400;">Ce que nous offrons</span></h2>
                <h5 class="mb-2">Véhicules en vedette</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

        @foreach($welcome as $card)
				<div class="item">
					<div class="card border-0 rounded-0 shadow mb-3">
						<img src="{{asset($card->image)}}" class="card-img-top rounded-0" alt="..." height="250px" width="250px">
						<div class="card-body">
							<div class="row">
								<div class="col-10">
									<h4 class="card-title">{{$card->nom}}</h4>
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
								<p class="text-dark"><strong>{{$card->prix}}</strong></p>

							</div>
							<div class="col-8">
								<a href="{{route('inscription',$card->id)}}" class="btn btn-dark w-100 p-3 rounded-0 " style="color: #F7921D; border: raduis 3px;">Reserver</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
        </div>

        <div class="row kids" >
            <a href="/voiture" class="btn btn-primary button mt-5 mb-5 " style=" border: raduis 3px;">Voir plus</a>

        </div>
       
        
</div>
<section class="about_section layout_padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="images/hero-img.jpg"  alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box ">
                    <h4>
                        Avez-vous besoin d'un conducteur???
                    </h4>
                    <p>
                        Vous avez la possibilité d'acheter des vehicules d'ocasions a de moindre cout et en toute securité
                    </p>
                    <a href="" >
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection