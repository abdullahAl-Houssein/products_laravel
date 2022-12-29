
@extends('layout')
@section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection
@section('content')
    <dev class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/product" class="btn btn-outline-primary btn sm">Go Back</a>
            </div>
            <div class="border rounded mt-5 p-4">
                <h1>Create a New Product</h1>
                <p>fill and submit this form to create a Product</p>
                <hr>
                <form  action=""method="post">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="name">Product name</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="type">Product type</label>
                            <textarea id="type" class="form-control" name="type" required></textarea>
                        </div>
                        <div class="control-group col-12">
                            <label for="price">Product Price</label>
                            <input id="price" class="form-control" name="price" required></input>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </dev>
@endsection

