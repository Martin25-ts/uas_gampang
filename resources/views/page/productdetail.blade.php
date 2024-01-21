@extends('page.main')

@section('title', 'Product Detail')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/page/detailproduct.css') }}">
@endpush



@section('content')
    <main >
        <div class="container">
            <div class="product-content">
                <div class="product-picture">
                    <h1>{{$product->product_name}}</h1>
                    <img src="{{$product->product_picture}}" alt="{{$product->product_name}}">
                </div>
                <div class="product-detail">
                    <h2>Price : Rp. {{number_format($product->product_price, 0 ,',' ,'.')}}</h2>
                    <p>{{$product->product_type}}</p>
                    <p>{{$product->product_description}}</p>
                    <p>Notes: {{$product->product_note}}</p>

                </div>

                <form action="{{ route('addtocart', ['id'=>$product->product_id]) }}" method="POST">
                    @csrf
                    <button type="submit">Buy</button>
                </form>
            </div>


        </div>
    </main>

@endsection

