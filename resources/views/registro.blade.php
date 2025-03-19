<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Adote um Amigo</title>
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
        margin-top: 100px;
        max-width: 500px;
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
      <h2 class="text-center mb-4">Registro</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirme sua senha" required>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        <div class="text-center mt-3">
          <p>Já tem uma conta? <a href="#" style="color: #03A64A;">Faça login</a></p>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>