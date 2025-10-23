<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="{{ asset('logo/logo-main.png') }}" alt="Logo" width="120"
        class="d-inline-block align-text-top">
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav + Button -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto"> <!-- mx-auto centers links -->
        <li class="nav-item"><a class="nav-link active" href="/"><b>Home</b></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><b>About</b></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><b>Service</b></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><b>FAQS</b></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><b>Contact</b></a></li>
      </ul>

      <!-- Button aligned right -->
      <a href="#" class="btn btn-outline-danger"><b>Get started</b></a>
    </div>

  </div>
</nav>
