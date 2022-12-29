
@extends('layout')
@section('content')
    <dev class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/product" class="btn btn-outline-primary btn sm">Go Back</a>
            </div>
            <div class="border rounded mt-5 p-4">
                <h1>Edit Product</h1>
                <p>fill and submit this form to Edit a Product</p>
                <hr>
                <form  action=""method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="name">Product name</label>
                            <input type="text" id="name" class="form-control" value="{{$edit->name}}" name="name" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="type">Product type</label>
                            <textarea id="type" class="form-control"  name="type" required>{{$edit->type}}</textarea>
                        </div>
                        <div class="control-group col-12">
                            <label for="price">Product Price</label>
                            <input id="price" class="form-control" value="{{$edit->price}}" name="price" required></input>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Edit Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </dev>
@endsection

