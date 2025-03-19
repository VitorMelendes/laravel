<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #024059;
        color: white;
      }
      .navbar {
        background-color: #026873;
      }
      .animal-section {
        padding: 50px 0;
      }
      .card {
        background-color: #04BF8A;
        border: none;
        margin-bottom: 20px;
      }
      .card-img-top {
        border-radius: 10px 10px 0 0;
      }
      .card-body {
        color: white;
      }
      .btn-primary {
        background-color: #03A64A;
        border-color: #03A64A;
      }
      .btn-primary:hover {
        background-color: #028C3A;
        border-color: #028C3A;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Voltar para o Início</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="animal-section">
      <div class="container">
        <h2 class="text-center mb-4">Animais para Adoção</h2>
        <div class="row">
          <!-- Exemplo de card para um animal -->
          <div class="col-md-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Foto do Animal">
              <div class="card-body">
                <h5 class="card-title">Rex</h5>
                <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <!-- Exemplo de card para um animal -->
          <div class="col-md-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Foto do Animal">
              <div class="card-body">
                <h5 class="card-title">Luna</h5>
                <p class="card-text">Luna é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <!-- Exemplo de card para um animal -->
          <div class="col-md-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Foto do Animal">
              <div class="card-body">
                <h5 class="card-title">Thor</h5>
                <p class="card-text">Thor é um cachorro grande e protetor. Ele é ideal para quem busca um companheiro leal e corajoso.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <!-- Adicione mais cards conforme necessário -->
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>