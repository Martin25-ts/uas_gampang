@php
    $counter = 0;
@endphp

@foreach ($listproduct as $product)
    @if ($counter % 5 == 0)
        @if ($counter > 0)
            </div>
        @endif
        <section>
            <div class="product-container">
    @endif

    <div class="product">
        <img src="{{ $product->product_picture}}" alt="{{ $product->product_name }}">
        <div class="product-detail">
            <h3>{{ $product->product_name }}</h3>
            <a href="{{ route('detail-product', ['id' => $product->product_id]) }}">Detail</a>
        </div>
    </div>

    @php
        $counter++;
    @endphp

    @if ($counter % 5 == 0 || $loop->last)
            </div>
        </section>
    @endif
@endforeach

<div class="pagination">
    <span>
        Page
    </span>
    <div class="page">
        @for($i = 1; $i <= $pagination; $i++)
            <a class="{{ $i == $page ? 'active' : '' }}" href="{{ route('dashboard-log', ['page' => $i]) }}">{{ $i }}</a>
        @endfor
    </div>
</div>


