@extends("master")
@section("title","Product")
@section("content")
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <div class="container custom-product">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#">  <img class="d-block w-100" src="https://images.hepsiburada.net/assets/storefront/banners/26-11-2020_1607604371686_1.png" alt="First slide"> </a>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.hepsiburada.net/assets/storefront/banners/02-12-2020_1606901343650_1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.hepsiburada.net/assets/storefront/banners/11-12-2020_1607669898392_1.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        @foreach($products as $product)
<div class="container">
  <div class="row">
    <div class="col-sm-6">
        <div class="card" style="width: 18rem;">
            <a href="{{route("detail",$product->id)}}"> <img  class="card-img-top" src="{{$product->gallery}}" alt="Card image cap"></a>
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">${{$product->price}} </p>
                <a href="#" class="btn btn-primary">Sepete Ekle</a>
            </div>
        </div>
    </div>
  </div>
</div>
        @endforeach

    </div>
@endsection