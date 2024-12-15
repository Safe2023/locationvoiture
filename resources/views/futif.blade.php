@extends('layouts.header')
@section('content')




<!-- Button trigger modal -->


<main class="container">
	<div class="row">
		<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Rechercher une voitures..." aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>

		</div>
	</div>

</main>

<div class="container-fluid">
	<div class="row g-5">
		<div class="col-md-4">
			<div class="position-sticky" style="top: 2rem;">
				<div class="p-4 mb-3 bg-body-tertiary rounded">
					<h4 class="fst-italic">About</h4>
					<p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
				</div>

				<div>
					<h4 class="fst-italic">Recent posts</h4>
					<ul class="list-unstyled">
						<li>
							<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
								<svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
									<rect width="100%" height="100%" fill="#777" />
								</svg>
								<div class="col-lg-8">
									<h6 class="mb-0">Example blog post title</h6>
									<small class="text-body-secondary">January 15, 2024</small>
								</div>
							</a>
						</li>
						<li>
							<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
								<svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
									<rect width="100%" height="100%" fill="#777" />
								</svg>
								<div class="col-lg-8">
									<h6 class="mb-0">This is another blog post title</h6>
									<small class="text-body-secondary">January 14, 2024</small>
								</div>
							</a>
						</li>
						<li>
							<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
								<svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
									<rect width="100%" height="100%" fill="#777" />
								</svg>
								<div class="col-lg-8">
									<h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
									<small class="text-body-secondary">January 13, 2024</small>
								</div>
							</a>
						</li>
					</ul>
				</div>


			</div>
		</div>
		<div class="col-md-8">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<h2> <span class="subheading" style=" color: #fc9400;">Ce que nous offrons</span></h2>
					<h5 class="mb-2">Notre flotte de vehicule</h5>
				</div>
			</div>
			<div class="row">

				<div class="col-md-4">
					<div class="item">
						<div class="card border-0 rounded-0 shadow mb-3">
							<img src="" class="card-img-top rounded-0" alt="..." height="250px" width="250px">
							<div class="card-body">
								<div class="row">
									<div class="col-10">
										<h4 class="card-title ">Voiture</h4>
										<p class="card-text">
											<i class="bi bi-star-fill text-warning"></i>
											<i class="bi bi-star-fill text-warning"></i>
											<i class="bi bi-star-fill text-warning"></i>
											<i class="bi bi-star-fill text-warning"></i>
											(123)
										</p>
									</div>
									<div class="card-text">
										<p>xqtsxtxqsrt</p>
									</div>

								</div>
							</div>
							<div class="row align-items-center text-center ">
								<div class="col-4">
									<p class="text-dark"><strong>10000</strong></p>

								</div>
								<div class="col-8">
									<!-- Button trigger modal -->
									<a href="" data-bs-toggle="modal" type="button" data-bs-target="#exampleModal" class="btn btn-dark w-100 p-3 rounded-0 " style="color: #F7921D; border: raduis 3px;">Reserver</a>


									<!-- Modal -->
									<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 150px;" >
										<div class="modal-dialog modal-lg ">
											<div class="modal-content">
												<div class="container">
													<div class="row">
														<div class="col-md-6">
															<div class="col-auto d-none d-lg-block">
																<img src="images/aaaa1.jpg" class="card-img-top rounded-0" alt="..." height="250px" width="250px">

															</div>
														</div>
														<div class="col-md-6">
															<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
																<div class="col p-4 d-flex flex-column position-static">
																	<h3 class="mb-0">Nom du produit</h3>
																	<p>Caracteristique</p>
																	<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
																	<div class="row align-items-center text-center icon-link gap-1 icon-link-hover stretched-link">
																		<div class="row align-items-center text-center mt-3">
																			<div class="col-4">
																				<p class="text-dark"><strong>100000f</strong></p>

																			</div>
																			<div class="col-8">
																				<a href="" class="btn btn-dark w-100 p-3 rounded-0" style="color: #fc9400;">Reserver</a>
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
			</div>

		</div>
	</div>
</div>
</div>



<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>

    <form action="{{ route('products.index') }}" method="GET">
        <input type="text" name="search" placeholder="Rechercher des produits..." value="{{ request()->input('search') }}">
        <button type="submit">Rechercher</button>
    </form>

    @if($products->isEmpty())
        <p>Aucun produit trouvé</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->price }} €</p>
                    <p>{{ $product->description }}</p>
                </li>
            @endforeach
        </ul>
    @endif
	</html>

@endsection