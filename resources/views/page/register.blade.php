@extends('page.main')

@section('title', 'Register')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/page/register.css') }}">
@endpush

@section('content')
    <main style="text-align: unset">
        <div class="register-container">
            <h1>Register</h1>
            <div class="register-form">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-container">
                        <div class="left-form">
                            <div class="firstname">
                                <label for="firstname">First Name: </label>
                                <input type="text" name="firstname" id="firstname">
                            </div>
                            <div class="email">
                                <label for="email">Email: </label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="gender">
                                <label for="gender">Gender: </label>
                                <div class="gender-male">
                                    <input type="radio" name="gender" id="male" value="male">
                                    Male
                                </div>
                                <div class="gender-female">
                                    <input type="radio" name="gender" id="female" value="female">
                                    Female
                                </div>

                            </div>
                            <div class="password">
                                <label for="password">Password: </label>
                                <input type="password" name="password" id="password">
                            </div>
                        </div>
                        <div class="right-form">
                            <div class="lastname">
                                <label for="lastname">Last Name: </label>
                                <input type="text" name="lastname" id="lastname">
                            </div>
                            <div class="role">
                                <label for="role">Role: </label>
                                <select name="role" id="role">
                                    <option value="null"></option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->role_id}}">{{$role->role}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="picture">
                                <label for="picture">Display Picture: </label>
                                <input type="file" name="picture" id="picture">
                            </div>
                            <div class="confirmpassword">
                                <label for="password_confirmation">Confirm Password: </label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-action">
                        <button type="submit">Submit</button>
                        <br>
                        <a href="{{ route('loginPage') }}">Already have an account? click here to log in</a>
                    </div>

                </form>
            </div>
        </div>
    </main>
@endsection
