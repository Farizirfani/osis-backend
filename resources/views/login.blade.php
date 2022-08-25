@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('head')
    <link rel="stylesheet" href="/css/login.css">

    <style>
        .box {
            width: 1000px;
            height: 500px;
            background-color: #6DA5FA;
            font-family: 'Poppins', sans-serif;
        }

        .text {
            letter-spacing: 1px;
        }

        .cards {
            width: 480px;
            background-color: rgba(255, 255, 255, 0.432);
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')
    <section class="rounded shadow box mx-auto mt-5 p-5 d-flex align-items-center justify-content-between">
        <div class="px-3 ">
            <img src="/img/Logo-Dugam.png" alt="" class="mx-auto d-flex flex-column justify-content-center mb-2"
                width="150">
            <p class="text text-white fs-4 text-center"> <span class="fs-2 fw-bold">Choose</span> Your Leader <br> For Your
                <span class="fs-2 fw-bold">Future</span>
            </p>
        </div>
        <div class="shadow cards p-5">
            <form action="/login" method="post">
                @method('post')
                @csrf
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <p class="text-uppercase fs-2 fw-bold" style="color: rgb(99, 98, 98);">Login</p>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="name@example.com" name="email" required>
                    <label for="email">Email Address</label>
                    @error('email')
                        <p class="text-start muted text-danger mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                        required>
                    <label for="password">Password</label>
                    @error('password')
                        <p class="text-start muted text-danger mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit" class="btn text-white shadow-sm"
                    style="background-color: #6DA5FA;width:120px;">Masuk</button>
            </form>
        </div>
    </section>
@endsection
