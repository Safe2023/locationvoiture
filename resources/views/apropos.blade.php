@extends('layouts.header')
@section('content')

<style>
    .but {
        font-size: 60px;
        color: #161616;
    }
</style>




<div class="container" style="background: url('images/nego2.jpeg'); background-size: cover;">
    <div class="page-banner">
        <div class="row justify-content-center align-items-center h-500">
            <div class="col-md-6" style=" margin-top:172px;">
                <nav aria-label="Breadcrumb ">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent   ">
                        <li class="breadcrumb-item"><a href="/welcome" class="text-white" style="font-weight: 900;">Accueil</a></li>
                        <li class="breadcrumb-item active text-white">A propos</li>
                    </ul>
                </nav>
                <h3 class="text-center text-white ">A propos de nous</h3>
            </div>
        </div>
    </div>
</div>



<section class="about_section layout_padding-bottom mt-5">
    <div class="container  ">
        <div class="row justify-content-center mb-2 mt-5">
            <div class="heading_container col-md-7 text-center heading-section ftco-animate">
                <h2 class="text-center">
                    <span>A propos de nous</span>
                </h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <span class="subhead"></span>
                <h4 class="title-section">ATMAX-MULTISERVICES</h4>
                <div class="divider"></div>
                <p style="font-size: 12px;">Besoin de louer une voiture pour des raisons professionnelles ou d’une voiture pas chère pour vos vacances au Bénin ? ATMAX-MULTISERVICES vous facilite la réservation de voitures en ligne et vous propose des prix très compétitifs.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item terme ">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed non" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                                            Comment trouver les meilleures offres de locations de voitures chez ATMAX-MULTISERVICES?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree2" class="accordion-collapse collapse non" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body non"> Sélectionner une offre économique pour votre location de voitures. Indiquez la catégorie de véhicule souhaitée, donnez quelques précisions supplémentaires et comparez les offres d’enseignes bien connues.</div>
                                    </div>
                                </div>
                                <div class="accordion-item terme">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed non" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree4" aria-expanded="false" aria-controls="flush-collapseThree4">
                                            Quels types de voitures puis-je louer chez ATMAX-MULTISERVICES?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body non">-Véhicule economique pour ne pas vous ruiner en parcourant les rues de la ville <br>
                                            - Modèles haut de gamme<br>
                                            - Compacts<br>
                                            - Standard…
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item terme">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed non" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree5" aria-expanded="false" aria-controls="flush-collapseThree5">
                                            Conditions de location sans chauffeur:
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body non">Nous louons nos véhicules sans caution<br>
                                            Mais pour la signature du contrat de location il faut :<br>
                                            -Photocopie de la pièce d’identité ou Passport valide<br>
                                            -Photocopie du permis de conduire<br>
                                            -Attestation de résidence<br>
                                            -Contrat de location (à signer chez nous)<br>
                                            -Carburant à la charge du client<br>
                                            -Reservation obligatoire<br>
                                            -La journée(08h à 19h)<br>
                                        </div>

                                    </div>
                                </div>

                                <div class="accordion-item terme">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed non" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree5" aria-expanded="false" aria-controls="flush-collapseThree5">
                                            Conditions de location Avec chauffeur:
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body non">Nous louons nos véhicules sans caution<br>
                                            Mais pour la signature du contrat de location il faut :<br>
                                            -Photocopie de la pièce d’identité ou Passport valide<br>
                                            -Photocopie du permis de conduire<br>
                                            -Attestation de résidence<br>
                                            -Contrat de location (à signer chez nous)<br>
                                            -Carburant à la charge du client<br>
                                            -Reservation obligatoire<br>
                                            -La journée(08h à 19h)<br>
                                        </div>

                                    </div>
                                </div>
                                <div class="accordion-item terme">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed non" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree3" aria-expanded="false" aria-controls="flush-collapseThree3">
                                            Que se passe-t-il si je dois annuler ma location de voiture ?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body non">Vous devriez obtenir le remboursement intégral de votre location prépayée si vous annulez au minimum 24 heures avant l’heure prévue pour récupérer la voiture.</div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div> <!-- .container -->
            </div>
            <div class="col-lg-6 ">
                <div class="img-box">
                    <img src="images/v12.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
<section class="client_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading" style=" color: #fc9400; font-size: 20px;">Témoignage</span>
                <h4 class="mb-3">Quelques témoignage de nos clients</h4>
            </div>
        </div>
        <div class="client_container">
            <div class="carousel-wrap ">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p style=" font-size: 14px;">
                                    J'ai loué une voiture pour 3 jours. La voiture était propre, livrée à l'heure. Suite à ma demande, ils ont bien voulu venir la chercher à un autre endroit ! Super. </p>
                            </div>
                            <div class="client_id">
                                <div class="img-box but">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="name">
                                    <h6>
                                        M. Narcisse
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p style=" font-size: 14px;">
                                    Notre expérience avec ATMAX s'est parfaitement déroulée. Échange facile durant notre séjour via une application. Voiture neuve et impeccable..
                                </p>
                            </div>
                            <div class="client_id">
                                <div class="img-box but">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="name">
                                    <h6>
                                        H. Mechack
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p style=" font-size: 14px;">
                                    Service efficace. La livraison a été effectuée à l'heure, la voiture a été propre et en bon état. La collection s'est bien passé. Je vais définitivement utiliser le service la prochain fois.
                                </p>
                            </div>
                            <div class="client_id">
                                <div class="img-box but">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="name">
                                    <h6>
                                        D. Mdeleine
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p style=" font-size: 14px;">
                                    Bon service de location voitures. J'ai reçu exactement ce que j'ai réservé en ligne. La seule partie difficile a été de trouver le chauffeur à l’aéroport pour la livraison.
                                </p>
                            </div>
                            <div class="client_id">
                                <div class="img-box but">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="name">
                                    <h6>
                                        A. Roger
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection