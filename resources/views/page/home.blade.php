@extends('page.main')

@section('title', "Home")

@push('css')
    <link rel="stylesheet" href="{{ asset('css/layout/hasntAuth.css') }}">
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
