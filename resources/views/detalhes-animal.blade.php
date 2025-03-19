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
              <a class="nav-link" href="#">Voltar para o Início</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="animal-details-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Foto do Animal">
          </div>
          <div class="col-md-6">
            <h2>Rex</h2>
            <p><strong>Espécie:</strong> Cachorro</p>
            <p><strong>Raça:</strong> Labrador</p>
            <p><strong>Idade:</strong> 3 anos</p>
            <p><strong>Peso:</strong> 25 kg</p>
            <p><strong>Altura:</strong> 60 cm</p>
            <p><strong>Cor:</strong> Preto</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais. Ele é muito sociável e se dá bem com todos.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
      </div>
    </div>
    @endsection
