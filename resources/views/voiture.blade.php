@extends('layouts.header')
@section('content')


<style>
	.max {
		height: 35px;
		width: 600px;

	}

	.max1 {
		height: 35px;
		color: #fc9400;
		border: #fc9400 solid 1px;

	}

	.max1:hover {
		background-color: #fc9400;
		color: white;
		border: #fc9400 solid 1px;
	}

	.form-control:focus {
		color: var(--bs-body-color);
		background-color: var(--bs-body-bg);
		border-color: #fc9400;
		outline: 0;
		box-shadow: 0 0 0.03rem #fc9400;
	}

	.page-item.active .page-link {
		z-index: 1;
		color: #fff;
		background-color: #fc9400;
		border-color: #fc9400;
	}



	.page-link:hover {
		z-index: 2;
		color: #fc9400;
		background-color: #fff;
		border-color: #fc9400;
	}

	.page-link {
		position: relative;
		display: block;
		padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
		font-size: 25px;
		color: #fc9400;
		text-decoration: none;
		background-color: #161616;
		border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
		transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
	}
</style>

<div class="back-to-top"></div>

<main class="container mb-5" style="margin-top: 160px;">
	<div class="row rounded text-body-emphasis bg-body-secondary p-4 ">
		<div class=" col-md-2 "></div>

		<div class="col-md-8">
			<form class="d-flex " action="{{ route('products.search')}}" method="get">
				<input class="form-control me-2  max" name="search" type="search" placeholder="Rechercher une voitures..." value="{{ request()->input('search') }}">
				<button class="btn btn-outline-warning max1" type="submit">Rechercher</button>
			</form>
		</div>
		<div class=" col-md-2 "></div>
		
	</div>

</main>

<div class="container">
	<div class="row g-5">
		<!--<div class="col-md-3">
			<div class="position-sticky" style="top: 2rem;">
				<div class="p-4 mb-3 bg-body-tertiary rounded">
					<h4 class="fst-italic">ATMAX-MULTISERVICES</h4>
					<p class="mb-0">Nous somme disponible 24h/24 7j/7 pour satisfait en toute securité.</p>
				</div>
 
				<div>
					<h4 class="fst-italic" style="color: #fc9400;">Recent blogs</h4>
					<ul class="list-unstyled">
						<li>
							<div class="d-flex align-items-center border-top">
								<div class="">
									<img src="images/v14.jpg" alt="" class="bd-placeholder-img" width="150px" height="100px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
								</div>

								<div class=""style="margin-left: 15px;">
									<h6 class="mb-0">Utiliser pour vister Ganvier</h6>
									<small class="text-body-secondary">15 Mai 2024</small>
								</div>
							</div>
						</li>

						<li>
							<div class="d-flex align-items-center border-top">
								<div class="">
									<img src="images/v17.jpg" alt="" class="bd-placeholder-img" width="150px" height="100px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
								</div>
								<div class="" style="margin-left: 15px;">
									<h6 class="mb-0">Utiliser lors d'un mariage</h6>
									<small class="text-body-secondary">12 Avril 2024</small>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex align-items-center border-top">
								<div class="">
									<img src="images/v15.jpg" alt="" class="bd-placeholder-img" width="150px" height="100px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
								</div>
								<div class="" style="margin-left: 15px;">
									<h6 class="mb-0">Aeroport</h6>
									<small class="text-body-secondary">22 Janvier 2024</small>
								</div>
							</div>
						</li>
					</ul>
				</div> -->


			</div>
		</div>
		<div class="container mt-5">
		<div class="col-md-12">
			<div class="row justify-content-center bg-light">
				<div class="col-md-12 heading-section text-center ftco-animate mt-3 mb-5">
					<h2> <span class="subheading" style=" color: #fc9400;">Ce que nous offrons</span></h2>
					<h5 class="mb-2">Notre flotte de vehicule</h5>
				</div>
			</div>
			@if($voiture->isEmpty())
			<p class="btn btn-danger mt-5 text-center">Nous ne disposons pas ce type de véhicule pour le moment</p>
			@else
			<div class="row mt-4 ">

				@foreach($voiture as $card)
				<div class="col-md-3">
					<div class="item">
						<div class="card border-0 rounded-0 shadow mb-3">
							<img src="{{asset($card->image)}}" class="card-img-top rounded-0" alt="..." height="200px" width="250px">
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
			<div class="row mt-5 mb-5">
				<div class="col-md-12 d-flex justify-content-center">
					{{$voiture->links()}}
				</div>
			</div>
			@endif

		</div>
		</div>
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