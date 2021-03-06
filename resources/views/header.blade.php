<?php
use App\Http\Controllers\ProductController;
$total=ProductController::cardItem();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route("product")}}">e-Comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

            </ul>


            <form action="{{route("search")}}" class="d-flex">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <li class="nav-item">
                <a class="nav-link" href="{{route("register")}}">Register</a>
            </li>
            @if(Session::has("login"))
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    {{Session::get("login")["name"]}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route("basket")}}">Sepet({{$total}})</a></li>
                    <li><a class="dropdown-item" href="{{route("logout")}}">Logout</a></li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("login")}}">Login</a>
                        </li>
                    @endif
                </ul>
            </li>

        </div>
    </div>
</nav>