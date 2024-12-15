@extends('layouts.header')
@section('content')


<style>
   
  .baniere{
    background-image:linear-gradient(rgba(255,255,255, 0.3),rgba(0, 0, 0, 0.8)), url('/images/voiture2.jpg'); 
    height: 275px;
    background-size: cover;
    
  }   
</style>

<div class="back-to-top"></div>
<div class="container  baniere" >
    <div class="page-banner ">
        <div class="row justify-content-center align-items-center h-500">
            <div class="col-md-6" style=" margin-top:210px;">
                <nav aria-label="Breadcrumb  ">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/welcome" class="text-white" style="font-weight: 900;">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" style="font-weight: 900;">Services</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>



<section class="service_section layout_padding">
    <div class="service_container">
        <div class="container ">
            <div class="row justify-content-center mb-2 mt-5">
                <div class="heading_container col-md-7 text-center heading-section ftco-animate">
                    <h2 class="text-center">
                        <span>Services</span>
                    </h2>
                    <p>
                        Nos differents services
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 ">
                    <div class="box ">
                        <div class="img-box bute">
                            <i class="bi bi-airplane"></i>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Transfert de l'aéroport
                            </h5>
                            <p>
                                En louant nos véhicules pour les transferts aéroport, les voyageurs peuvent commencer ou terminer leur voyage en toute sérénité, en évitant les tracas.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="box ">
                        <div class="img-box bute">
                            <i class="bi bi-car-front"></i>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Voyage
                            </h5>
                            <p>
                                Les voyageurs peuvent choisir le type de véhicule qui correspond à leurs besoins, que ce soit une voiture de luxe pour un voyage d’affaires ou un véhicule adapté pour les familles nombreuses.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="box ">
                        <div class="img-box bute">
                            <i class="bi bi-person-hearts"></i>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Transport Mariage
                            </h5>
                            <p>
                                Le transport de mariage est un élément important de toute journée de mariage. Il permet à la mariée, au marié et a leur cortège d'arriver à temps et avec style.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="box ">
                        <div class="img-box bute">
                            <i class="bi bi-person-walking"></i>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Visite d'une ville entière
                            </h5>
                            <p>
                                Nous disposons des voitures de luxe pour vous permettre de visité la ville romantique par excellence, Cotonou attire les touristes tout au long de l'année. La capitale est si riche qu'il ne suffit pas de quelques heures pour la visiter.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section layout_padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="images/w2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box ">
                    <h3>
                       Rentabiliser avec votre voiture
                    </h3>
                    <p>
                       Nous vous donnons l'opportunité de gagner de l'argent en louant votre voiture.
                    </p>
                    <a href="https://wa.me/0022940360670/?text=Quelle sont les conditions pour mettre mon vehicule en location, j'aimerai avoir plus de renseignement à ce sujet.">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection