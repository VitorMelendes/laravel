@extends('_partials/main')

@section('conteudo')
    <!-- Login Container -->
    <style>
      
  /*Login*/
  body {
    background-color: #10454F;
    color: #FFFFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  .login-container {
    background-color: #506266;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
  }
  .login-container h2 {
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
  .login-links {
    text-align: center;
    margin-top: 1rem;
  }
  .login-links a {
    color: #BDE038;
    text-decoration: none;
  }
  .login-links a:hover {
    color: #A3AB78;
  }
    </style>
    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="E-mail" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
      <div class="login-links">
        <p><a href="#">Esqueceu a senha?</a></p>
        <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
      </div>
    </div>
@endsection
