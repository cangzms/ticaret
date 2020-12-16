@extends("master")
@section("title","Product")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <img width="500px" src="{{$detail->gallery}}" alt="">

        </div>
        <div class="col-sm-6">

            <h2>{{$detail->name}}</h2>
            <p>{{$detail->description}}</p>
            <hr>

            <h2>${{$detail->price}}</h2>
            <hr>
            <form method="post" action="{{route("card",$detail->id)}} ">
                @csrf
                <input type="hidden" name="product_id" value="{{$detail->id}}">
                <button class="btn btn-success">Sepete Ekle</button>
            </form>
            <hr>
            <form method="post" action="{{route("card",$detail->id)}} ">
                @csrf
                <button class="btn btn-success">Hemen Al</button>
            </form>

        </div>

    </div>

</div>
@endsection