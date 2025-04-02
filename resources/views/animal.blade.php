<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Animal - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #024059;
        color: white;
      }
      .navbar {
        background-color: #026873;
      }
      .register-section {
        background-color: #04BF8A;
        padding: 50px;
        border-radius: 10px;
        margin-top: 50px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
      }
      .btn-primary {
        background-color: #03A64A;
        border-color: #03A64A;
      }
      .btn-primary:hover {
        background-color: #028C3A;
        border-color: #028C3A;
      }
      .form-control {
        background-color: #025940;
        border: 1px solid #03A64A;
        color: white;
      }
      .form-control:focus {
        background-color: #025940;
        border-color: #03A64A;
        color: white;
      }
      .form-label {
        font-weight: bold;
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

    <div class="register-section">
      <h2 class="text-center mb-4">Cadastrar Novo Animal</h2>
      <form action="{{route('add-animal')}}" method="POST">
        @csrf
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="name" class="form-label">Nome do Animal</label>
            <input type="text" class="form-control" id="name" placeholder="Ex: Rex" name="nome" required>
          </div>
          <div class="col-md-6">
            <label for="species" class="form-label">Espécie</label>
            <select class="form-select" id="species" required>
              <option value="" selected disabled>Selecione</option>
              <option value="dog">Cachorro</option>
              <option value="cat">Gato</option>
              <option value="other">Outro</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="breed" class="form-label">Raça</label>
            <input type="text" class="form-control" id="breed" placeholder="Ex: Labrador" name="raca" required>
          </div>
          <div class="col-md-6">
            <label for="color" class="form-label">Cor</label>
            <input type="text" class="form-control" id="color" placeholder="Ex: Preto" name="cor" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-4">
            <label for="age" class="form-label">Idade (anos)</label>
            <input type="number" class="form-control" id="age" placeholder="Ex: 3" name="idade" required>
          </div>
          <div class="col-md-4">
            <label for="weight" class="form-label">Peso (kg)</label>
            <input type="number" step="0.1" class="form-control" id="weight" placeholder="Ex: 25.5" name="peso" required>
          </div>
          <div class="col-md-4">
            <label for="size" class="form-label">Porte</label>
            <select class="form-select" id="size" required>
              <option value="" selected disabled>Selecione</option>
              <option value="small">Pequeno</option>
              <option value="medium">Médio</option>
              <option value="large">Grande</option>
            </select>
          </div>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrição</label>
          <textarea class="form-control" id="description" rows="3" placeholder="Descreva o temperamento, hábitos e características do animal"></textarea>
        </div>

        <div class="mb-3">
          <label for="photo" class="form-label">Foto do Animal</label>
          <input class="form-control" type="file" id="photo" accept="image/*">
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Cadastrar Animal</button>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>