<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mt-1 mb-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 200px;background:#F7921D;color:white ">
                Ajouter un produits
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"> Ajouter un produits</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 ofset-md-2">
                                <form action="{{route('ajouter')}}" method="post">
                                    @csrf
                                    <div class="row">

                                        @if (session ()-> has ('success') )
                                        <div class="alert alert-success">{{session('success')}}</div>
                                        @endif

                                        <div class="col-md-6">
                                            <div class="md-3">
                                                <input type="text" class="form-control" placeholder="Nom du produit" aria-label="First name" name="nom">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-3">
                                                <input type="text" min="1" class="form-control" placeholder="Prix produit" aria-label="First name" name="prix">
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="col-md-12">
                                            <div class="md-3">
                                                <input type="text" placeholder="Image produit" class="form-control" aria-label="First name" name="image">
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="col-md-12">
                                            <div class="md-3">
                                                <input class="form-control" type="text" placeholder="Description produit" aria-label="First name" name="description">
                                            </div>
                                        </div>

                                        &nbsp;
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-primary" value="ajouter">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Description complète</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tableau as $table)
                    <tr>
                        <th scope="row">{{$table->id}}</th>
                        <td>{{$table->nom}}</td>
                        <td>{{$table->prix}}</td>
                        <td>{{$table->image}}</td>
                        <td>{{$table->description}}</td>
                        <td>{{$table->description_complete}}</td>
                        <td class="d-flex">
                            <a href="{{route('edit',$table->id)}}" class="btn btn-success"><i class="bi bi-arrow-bar-up"></i></a>&nbsp;
                            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{($table->id)}}"><i class="bi bi-trash3-fill btn btn-danger"></i>
                                <div class="modal fade" id="staticBackdrop{{($table->id)}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel{{($table->id)}}">Suppression</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Voulez-vous vraiment supprimer ce produit??
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                                <a href="{{route('delete',$table->id)}}" type="button" class="btn btn-danger">Oui</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</body>

</html>