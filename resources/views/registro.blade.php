

   


  @extends('_partials/main')

  @section('conteudo')
<style>
      body {
        background-color: #10454F;
        color: #FFFFFF;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .register-container {
        background-color: #506266;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
      }
      .register-container h2 {
        color: #BDE038;
        text-align: center;
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
        width: 100%;
        padding: 10px;
      }
      .btn-primary:hover {
        background-color: #A3AB78;
        border-color: #A3AB78;
      }
      .register-links {
        text-align: center;
        margin-top: 1rem;
      }
      .register-links a {
        color: #BDE038;
        text-decoration: none;
      }
      .register-links a:hover {
        color: #A3AB78;
      }
</style>
    <!-- Register Container -->
    <div class="register-container">
      <h2>Registro</h2>
      <form action="{{ route('registro') }}" method="POST" >
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Nome completo" name="nome_completo" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="E-mail" name="email" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Senha" name="senha" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Confirme a senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
      <div class="register-links">
        <p>Já tem uma conta? <a href="#">Faça login</a></p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endsection