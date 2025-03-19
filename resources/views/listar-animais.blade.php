<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #10454F;
        color: #FFFFFF;
      }
      .navbar {
        background-color: #506266;
      }
      .animal-card {
        background-color: #506266;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
      }
      .animal-card:hover {
        transform: scale(1.05);
      }
      .animal-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }
      .animal-card .card-body {
        padding: 15px;
        text-align: center;
      }
      .animal-card h5 {
        color: #BDE038;
        margin-bottom: 10px;
      }
      .btn-primary {
        background-color: #BDE038;
        border-color: #BDE038;
        color: #10454F;
        font-weight: bold;
      }
      .btn-primary:hover {
        background-color: #A3AB78;
        border-color: #A3AB78;
      }
      .footer {
        background-color: #506266;
        padding: 20px 0;
        text-align: center;
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
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
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Animal List Section -->
    <section class="container my-5">
      <h1 class="text-center mb-4" style="color: #BDE038;">Animais para Adoção</h1>
      <div class="row">
        <!-- Animal Card 1 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Cachorro para adoção">
            <div class="card-body">
              <h5>Rex</h5>
              <p>Macho, 2 anos, porte médio</p>
              <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 2 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Gato para adoção">
            <div class="card-body">
              <h5>Luna</h5>
              <p>Fêmea, 1 ano, porte pequeno</p>
              <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 3 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Cachorro para adoção">
            <div class="card-body">
              <h5>Thor</h5>
              <p>Macho, 3 anos, porte grande</p>
              <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 4 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Gato para adoção">
            <div class="card-body">
              <h5>Mia</h5>
              <p>Fêmea, 2 anos, porte pequeno</p>
              <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 5 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Cachorro para adoção">
            <div class="card-body">
              <h5>Bella</h5>
              <p>Fêmea, 4 anos, porte médio</p>
              <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 6 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300x200" alt="Gato para adoção">
            <div class="card-body">
              <h5>Simba</h5>
              <p>Macho, 1 ano, porte pequeno</p>
              <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer fixed-bottom">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>