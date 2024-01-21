@extends('page.main')

@section('title', "Home")

@push('css')



@endpush

@section('content')
    <main>
        @auth
            @include('layout.hasAuth')
        @else
            @include('layout.hasntAuth')
        @endauth
    </main>
@endsection
