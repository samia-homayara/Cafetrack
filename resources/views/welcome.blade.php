@extends('layouts.app')

@section('title', 'CaféTrack | Home')

@section('content')
    <div id="hero" class=" text-center bg-image object-fit-contain"
        style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="container" style="padding: 200px">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">CaféTrack</h1>
                        <h5 class="mb-4">
                            A Smart Campus Cafeteria and Resource Management System.
                        </h5>
                        <a class="btn btn-outline-danger text-white btn-lg m-2"
                            href="/food-items">Food Items</a>
                        <a class="btn btn-outline-danger text-white btn-lg m-2"
                            href="/board-games">Board Games</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
