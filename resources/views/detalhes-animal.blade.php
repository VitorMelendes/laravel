@extends('_partials/main')

@section('conteudo')


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
