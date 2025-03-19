<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adotar Animal - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #10454F;
        color: #FFFFFF;
      }
      .navbar {
        background-color: #506266;
      }
      .adoption-form {
        background-color: #506266;
        padding: 2rem;
        border-radius: 10px;
        margin: 2rem auto;
        max-width: 800px;
      }
      .adoption-form h2 {
        color: #BDE038;
        margin-bottom: 1.5rem;
      }
      .form-control {
        background-color: #818274;
        border: none;
        color: #FFFFFF;
        margin-bottom: 1rem;
      }
      .form-control::placeholder {
        color: #CCCCCC;
      }
      .form-control:focus {
        background-color: #A3AB78;
        color: #10454F;
      }
      .btn-primary {
        background-color: #BDE038;
        border-color: #BDE038;
        color: #10454F;
        font-weight: bold;
        padding: 10px 20px;
      }
      .btn-primary:hover {
        background-color: #A3AB78;
        border-color: #A3AB78;
      }
      .animal-details {
        background-color: #818274;
        padding: 1rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
      }
      .animal-details h3 {
        color: #BDE038;
        margin-bottom: 1rem;
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
              <a class="nav-link" href="#">Animais para Adoção</a>
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

    <!-- Adoption Form Section -->
    <section class="adoption-form">
      <div class="container">
        <h2>Formulário de Adoção</h2>
        
        <!-- Animal Details -->
        <div class="animal-details">
          <h3>Você está adotando: <strong>Rex</strong></h3>
          <p><strong>Idade:</strong> 2 anos</p>
          <p><strong>Porte:</strong> Médio</p>
          <p><strong>Sexo:</strong> Macho</p>
        </div>

        <!-- Adoption Form -->
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nome completo" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" placeholder="Telefone" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Endereço" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" placeholder="Por que você quer adotar este animal?" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar Solicitação de Adoção</button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>