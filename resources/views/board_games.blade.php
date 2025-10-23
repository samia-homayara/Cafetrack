@extends('layouts.app')
@section('title', 'CaféTrack | Board Games')
@section('content')
<div class="container mt-5 mb-5">
    <h2 class="text-center">🎲 Our Board Games 🎲</h2>
    <div class="row g-8">
        <hr class="my-3">

        <div class="col-md-4">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/carrom.webp') }}" class="card-img-top" alt="Carrom">
                <div class="card-body text-center">
                    <h4 class="card-title">Carrom</h4>
                    <p class="card-text">Classic wooden board game</p>
                    <p class="">Total Units: 8 <br> Available Units: 3</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/table_tennis.jpg') }}" class="card-img-top" alt="Carrom">
                <div class="card-body text-center">
                    <h4 class="card-title">Table Tennis</h4>
                    <p class="card-text">The rhythm game of speed and precision.</p>
                    <p class="">Total Units: 2 <br> Available Units: 1</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/chess.png') }}" class="card-img-top" alt="Carrom">
                <div class="card-body text-center">
                    <h4 class="card-title">Chess</h4>
                    <p class="card-text">The timeless battle of strategy and intellect.</p>
                    <p class="">Total Units: 4 <br> Available Units: 3</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
