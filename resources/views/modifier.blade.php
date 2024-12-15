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
                <form action="{{route('update', $produits->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        @if (session ()-> has ('success') )
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        <div class="text-center">
                            <h4>Modification d'un produit</h4>
                        </div>
                        <div class="col-md-6">  
                            <div class="md-3">
                                <input type="text" class="form-control" placeholder="Nom du produit" aria-label="First name" name="nom" value="{{$produits->nom}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-3">
                                <input type="text" min="1" class="form-control" placeholder="Prix produit" aria-label="First name" name="prix" value="{{$produits->prix}}">
                            </div>
                        </div>
                        &nbsp;
                        <div class="col-md-12">
                            <div class="md-3">
                            <input type="file" class="form-control" placeholder="Image produit" id="image" name="image" onchange="previewAndResizeImage(event, 'preview', 800, 600)">
                                @if ($produits->image)
                                    <img src="{{ asset($produits->image) }}" id="preview" alt="{{$produits->nom }}" style="width: 100px; margin-top: 10px;">
                                @else
                                    <img id="preview" alt="Prévisualisation de l'image" style="display: none; width: 100px; margin-top: 10px;">
                                @endif
                            </div>
                        </div>
                        &nbsp;
                        <div class="col-md-12">
                            <div class="md-3">
                                <input class="form-control" type="text" placeholder="Description produit" aria-label="First name" name="description" value="{{$produits->description}}">
                            </div>
                        </div>
                        &nbsp;
                    <div class="col-md-12">
                        <div class="md-3">
                            <input class="form-control" type="text" placeholder="Description complète" aria-label="First name" name="description_complete" value="{{$produits->description_complete}}">
                        </div>
                    </div>

                        &nbsp;
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="Modifier">
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    <script>
    function previewAndResizeImage(event, previewId, width, height) {
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = new Image();
            img.onload = function() {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = width;
                canvas.height = height;
                ctx.drawImage(img, 0, 0, width, height);
                const dataUrl = canvas.toDataURL('image/jpeg');
                document.getElementById(previewId).src = dataUrl;
                document.getElementById(previewId).style.display = 'block';
            }
            img.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
</script>
</body>

</html>