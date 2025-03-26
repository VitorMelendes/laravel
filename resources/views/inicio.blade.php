@extends('_partials/main')

@section('conteudo')

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <h1>Encontre seu novo melhor amigo</h1>
        <p>Adotar um animal de rua é um ato de amor. Dê um lar para quem mais precisa.</p>
        <a href="#" class="btn btn-primary">Ver Animais para Adoção</a>
      </div>
    </section>

    <!-- Animal Card s Section -->
    <section class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <div class="animal-card">
            <img src="data:image/jpeg;base64,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" alt="Cachorro para adoção">
            <div class="card-body">
              <h5>Rex</h5>
              <p>Macho, 2 anos, porte médio</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkORcVzBo2xr3-0VgSLW6ydqtDYlWnqkBqEA&s" alt="Gato para adoção">
            <div class="card-body">
              <h5>Luna</h5>
              <p>Fêmea, 1 ano, porte pequeno</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Cachorro para adoção">
            <div class="card-body">
              <h5>Thor</h5>
              <p>Macho, 3 anos, porte grande</p>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection