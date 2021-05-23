@extends('layout')
@extends('header')
@extends('footer')
@section('title', 'Products')
@section('content')







    <div class="container products">
        <div class="row1">
            @foreach($products as $product )
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="300" height="100">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Ціна: </strong> {{ $product->price }}₴</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- End row -->
    </div>

    @yield('footer')
@endsection


