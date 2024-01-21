@extends('page.main')

@section('title', 'Cart')


@push('css')
    <link rel="stylesheet" href="{{ asset('css/page/cart.css') }}">
@endpush

@section('content')

    @php
        $result = 0;
    @endphp
    <main style="text-align: unset">
        <div class="cart-container">
            <h1>Cart</h1>
            <div class="list-cart">
                @foreach ($listcart as $item)
                    <div class="cart">
                        <img src="{{ $item->product->product_picture }}" alt="{{ $item->product->product_name }}">
                        <span>{{ $item->product->product_name }}</span>
                        <span>Rp. {{ number_format($item->product->product_price, 0, ',', '.') }}</span>

                        @php
                            $result += $item->product->product_price;
                        @endphp

                        <form action="{{ route('deleteCart', ['id' => $item->cart_id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>

            @if ($result != 0)
                <div class="result-pay">
                    <strong>TOTAL : Rp. {{ number_format($result, 0, ',', '.') }}</strong>
                    <form action="{{ route('checkout') }}" method="POST">
                        @csrf
                        <button type="submit">Check Out</button>
                    </form>
                </div>
            @endif

        </div>




    </main>
@endsection
