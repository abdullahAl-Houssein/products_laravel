@extends('layout')
@section('content')
    <style>
        .type{
            border: 1px green solid;
            margin: 10px;
            padding: 10px;
            border-radius: 15px;
        }
    </style>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2 type">
                    <a href="/product" class="btn btn-warning btn-sm">G0 Back</a>
                    <br>
                    <p>
                    <h1>{{$product->name}}</h1>
                    <p >{!! $product->type !!}</p>
                    <p><span style="color: red">{!! $product->price !!} $</span></p>
                    <img src="{{$product->image}}">
                    <hr>
                    <a href="/product/{{$product->id}}/edit" class="btn btn-warning">Edit Product</a>
                    <br><br>
                    <form class="" id="delete-form" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Delete Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
