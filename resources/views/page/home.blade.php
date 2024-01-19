@extends('page.main')

@section('title', "Home")

@push('css')
    <link rel="stylesheet" href="{{ asset('css/layout/hasntAuth.css') }}">
@endpush

@section('content')
    <main>
        @include('layout.hasntAuth')
    </main>
@endsection
