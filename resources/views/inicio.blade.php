@extends('_partials/main')

@section('conteudo')
<nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
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

    <div class="hero-section">
      <div class="container">
        <h1 class="display-4">Dê um lar para um amigo</h1>
        <p class="lead">Encontre o companheiro perfeito e faça a diferença na vida de um animal de rua.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Animais para Adoção</a>
      </div>
    </div>

    <div class="info-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Por que adotar?</h3>
            <p>Adotar um animal de rua não só salva uma vida, mas também abre espaço para que outro animal seja resgatado.</p>
          </div>
          <div class="col-md-4">
            <h3>Processo de Adoção</h3>
            <p>Nosso processo de adoção é simples e seguro. Nós ajudamos você a encontrar o animal ideal para o seu lar.</p>
          </div>
          <div class="col-md-4">
            <h3>Como Ajudar</h3>
            <p>Se você não pode adotar, ainda pode ajudar fazendo doações ou sendo um lar temporário.</p>
          </div>
        </div>
      </div>
    </div>
@endsection()

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #024059;
        color: white;
      }
      .navbar {
        background-color: #026873;
      }
      .hero-section {
        background-color: #04BF8A;
        padding: 100px 0;
        text-align: center;
      }
      .info-section {
        background-color: #025940;
        padding: 50px 0;
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>