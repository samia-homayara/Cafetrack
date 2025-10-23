@extends('layouts.app')
@section('title', 'CaféTrack | Food Items')
@section('content')
<div class="container mt-5 mb-5">
    <h2 class="text-center">🍴 Our Food Items 🍴</h2>
    <div class="row g-8">
        <hr class="my-3">

        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/burger.jpeg') }}" class="card-img-top" alt="Burger">
                <div class="card-body text-center">
                    <h5 class="card-title">Burger</h5>
                    <p class="card-text">Juicy beef burger with cheese, lettuce, tomato, and sauce.</p>
                    <button class="btn btn-danger w-100">tk 80/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn ">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/singara.jpeg') }}" class="card-img-top" alt="Singara">
                <div class="card-body text-center">
                    <h5 class="card-title">Singara</h5>
                    <p class="card-text">Crispy singara filled with spicy potato, peas, and flavor.</p>
                    <button class="btn btn-danger w-100">tk 10/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/coffee.jpeg') }}" class="card-img-top" alt="Coffee">
                <div class="card-body text-center">
                    <h5 class="card-title">Coffee</h5>
                    <p class="card-text">Hot coffee wakes the soul, rich aroma fills the air.</p>
                    <button class="btn btn-danger w-100">tk 30/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/samocha.jpeg') }}" class="card-img-top" alt="Shamoca">
                <div class="card-body text-center">
                    <h5 class="card-title">Shamoca</h5>
                    <p class="card-text">Crispy shamucha stuffed with meat, spice, fried golden and hot.</p>
                    <button class="btn btn-danger w-100">tk 10/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional Separator -->
        <hr class="my-4">

        <!-- Card 5 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/cake.jpeg') }}" class="card-img-top" alt="cake">
                <div class="card-body text-center">
                    <h5 class="card-title">Cup Cake</h5>
                    <p class="card-text">Sweet cupcake topped with cream, soft inside, joy in bites.</p>
                    <button class="btn btn-danger w-100">tk 50/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/pakora.jpeg') }}" class="card-img-top" alt="pakora">
                <div class="card-body text-center">
                    <h5 class="card-title">Pakora</h5>
                    <p class="card-text">Crispy pakora fried golden, spicy inside, perfect rainy snack.</p>
                    <button class="btn btn-danger w-100">tk 20/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/vegetable_roll.jpeg') }}" class="card-img-top" alt="Chicken Roll">
                <div class="card-body text-center">
                    <h5 class="card-title">Vegetable Roll</h5>
                    <p class="card-text">Spicy chicken roll wrapped in paratha, juicy, hot, satisfying bite.</p>
                    <button class="btn btn-danger w-100">tk 30/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="col-md-3">
            <div class="card menu-card">
                <img src="{{ asset('images/pic/shake.jpeg') }}" class="card-img-top" alt="Shake">
                <div class="card-body text-center">
                    <h5 class="card-title">Shake</h5>
                    <p class="card-text">Cold, creamy shake with fruits, sweet sip of pure bliss.</p>
                    <button class="btn btn-danger w-100">tk 60/-</button>

                    <!-- Stock Section -->
                    <div class="stock-control mt-3">
                        <button class="btn btn-sm minus-btn">−</button>
                        <span class="stock-number mx-2">1</span>
                        <button class="btn btn-sm plus-btn">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Quantity Control Script -->
<script>
    document.querySelectorAll('.menu-card').forEach(card => {
        const minusBtn = card.querySelector('.minus-btn');
        const plusBtn = card.querySelector('.plus-btn');
        const stockNumber = card.querySelector('.stock-number');

        let count = 0;

        minusBtn.addEventListener('click', () => {
            if (count > 0) {
                count--;
                stockNumber.textContent = count;
            }
        });

        plusBtn.addEventListener('click', () => {
            count++;
            stockNumber.textContent = count;
        });
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
