@extends('layouts.main')

@section('title')
    Dashboard | Home
@endsection

<style>
    .cards {
        background-color: #6DA5FA;
        width: 200px;
        height: 200px;
    }

    .cards img {
        width: 120px;
    }

    .contain a {
        background-color: #6291BC;
    }
</style>

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom ">
            <h1 class="h2">Candidate</h1>
        </div>
        <div class="d-flex justify-content-evenly">
            <div class="contain text-center">
                <div class="cards rounded d-flex justify-content-center
                align-items-center mb-3">
                    <img src="/img/person-icon 2.png" alt="Candidate">
                </div>
                <a href="" class="rounded text-decoration-none text-white px-4 py-2">DETAIL</a>
                <a href="" class="rounded text-decoration-none p-2"
                    style="background-color: #92FFEB;color:rgb(131, 131, 131);">VOTE</a>
            </div>
            <div class="contain text-center">
                <div class="cards rounded d-flex justify-content-center
                align-items-center mb-3">
                    <img src="/img/person-icon 2.png" alt="Candidate">
                </div>
                <a href="" class="rounded text-decoration-none text-white px-4 py-2">DETAIL</a>
                <a href="" class="rounded text-decoration-none p-2"
                    style="background-color: #92FFEB;color:rgb(131, 131, 131);">VOTE</a>
            </div>
            <div class="contain text-center">
                <div class="cards rounded d-flex justify-content-center
                align-items-center mb-3">
                    <img src="/img/person-icon 2.png" alt="Candidate">
                </div>
                <a href="" class="rounded text-decoration-none text-white px-4 py-2">DETAIL</a>
                <a href="" class="rounded text-decoration-none p-2"
                    style="background-color: #92FFEB;color:rgb(131, 131, 131);">VOTE</a>
            </div>
        </div>
    </main>
@endsection
