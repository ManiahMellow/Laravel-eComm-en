@extends('master')
@section('product')

<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $product)
          <div class="item {{$product['id']==1?'active':''}}">
            <a href="/show/{{$product['id']}}">
              <img class="slider-img" src="img/{{$product['gallery']}}" alt="{{$product['gallery']}}">
              <div class="carousel-caption slider-text">
                  <h3>{{$product['name']}}</h3>
                  <p>{{$product['description']}}</p>
              </div>
              <br><br><br>
            </div>
          </a>
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wrapper">
        <h3>Trending Product</h3>
        @foreach ($products as $product)
        <a href="/show/{{$product['id']}}">
        <div class="trending-items">
            <img class="trending-image" src="img/{{$product['gallery']}}" alt="Los Angeles">
            <div class="">
                <h3>{{$product['name']}}</h3>
            </div>
          </div>
        </a>
          @endforeach
      </div>
</div>    

@endsection