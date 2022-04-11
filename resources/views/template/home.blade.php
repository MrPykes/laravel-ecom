@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Ecom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">SHOT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CART <span class="badge bg-danger">4</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-5">
        <div class="col-lg-6 text-center" >
            <h1>Laravel Ecommerce</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

            <button class="d-inline">Blog Post</button>
            <button class="d-inline">Github</button>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid" src="{{asset('img/laptop_hero.png')}}" alt="Laptop">
        </div>
    </div>
</div>


<div class="container text-center mt-5">

    <h1>Products</h1>
    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

    <button class="d-inline">Featured</button>
    <button class="d-inline">On Sale</button>

    <div class="row mt-5">
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/laptop_hero.png')}}" alt="Laptop Product" class="img-fluid">
            <h3>Lenovo ThinkPad T470</h3>
            <p>$180.09</p>
        </div>
    </div>

</div>


@endsection