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
    <div class="col-sm-4">

        <a href="#">Filter</a>

    </div>
        @foreach($searchs as $search)
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card" style="width: 18rem;">
                            <a href="{{route("detail",$search->id)}}"> <img  class="card-img-top" src="{{$search->gallery}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$search->name}}</h5>
                                <p class="card-text">${{$search->price}} </p>
                                <a href="#" class="btn btn-primary">Sepete Ekle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

@endsection