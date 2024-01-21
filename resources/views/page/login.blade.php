@extends('page.main')

@section('title', 'Login')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/page/login.css') }}">
@endpush

@section('content')
    <main style="text-align: unset">
        <div class="login-container">
            <h1>Login</h1>
            <div class="register-form">
                <form action="{{ route('doLogin') }}" method="POST">
                    @csrf
                    <div class="email">
                        <label for="email">Email Addres: </label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="password">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password">
                    </div>

                    <div class="form-action">
                        <button type="submit">Submit</button>
                        <br>
                        <a href="{{ route('regis') }}">Don't have an account? click here to sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection


