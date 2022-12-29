@extends('layout')
@section('content')
    {{--
    <style>
        a{
            text-decoration: none;
            border: 1px green double;
            border-radius: 15px;
            margin: 10px;
            padding: 10px;
        }
    </style>
    --}}
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <div class="row">
                        <div class="col-8">
                            <h1>Our Product</h1>
                            <p>Enjoy Reading Our Product.</p>
                        </div>
                        <div class="col-4">
                            <p>Creat new Product</p>
                            <a href="/product/create/post" class="btn btn-warning btn-sm">Add Product</a>
                        </div>
                    </div>
                    @forelse($products as $pp)
                        <ul>
                            <li><a href="./product/{{$pp->id}}">{{$pp->name}}</a></li>
                            <br>
                        </ul>
                    @empty
                        <p class="text-warning">No Products available</p>
                    @endforelse
                    **********************************************************************************************************************
                    @foreach($products as $pp)
                        <article class="{{$loop->even ? 'bg-warning' : ''}}">
                            <h1>
                                <a href="/product/{{$pp->id}}">{{$pp->name}}</a>
                            </h1>
                            <p>
                                {{$pp->type}}
                            </p>
                            <img src="{{$pp->image}}">
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
