@extends('_partials/main')

@section('conteudo')


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
@endsection
