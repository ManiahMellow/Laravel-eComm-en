@extends('master')
@section('content')

<div class="row">
    <div class="col-sm-6">
        <img height="200px" src="/img/{{$product['gallery']}}" alt="{{$product['gallery']}}">
    </div>
    <div class="col-sm-6">
        <h1>{{$product['name']}}</h1>
        <h3>${{$product['price']}}</h3>
        <p>{{$product['description']}}</p>
        <p>{{$product['category']}}</p>
        <br>
        <a href="/">Go Back</a>
        <br><br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}" id="">
            <button class="btn btn-primary">Add To Cart</button>
        </form>
        <br>
        <a href="" class="btn btn-success">Buy Now</a>
        <br><br><br>
    </div>
</div>

@endsection