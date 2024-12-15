<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<!-- enctype="multipart/form-data" -->

<body>
    <div class="container md-5 mt-5">
       <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6 ofset-md-2">

            <form action="{{route('ajouter')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    @if (session ()-> has ('success') )
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <div class="text-center"><h4>Ajouter un produit</h4></div>
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
                            <input type="file" placeholder="Image produit" class="form-control" aria-label="First name" name="image">
                        </div>
                    </div>
                    &nbsp;
                    <div class="col-md-12">
                        <div class="md-3">
                            <input class="form-control" type="text" placeholder="Description " aria-label="First name" name="description">
                        </div>
                    </div>
                    &nbsp;
                    <div class="col-md-12">
                        <div class="md-3">
                            <input class="form-control" type="text" placeholder="Description complète" aria-label="First name" name="description_complete">
                        </div>
                    </div>
                    &nbsp;
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Ajouter produit">
                    </div>

                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
       </div>
    </div>
</body>

</html>