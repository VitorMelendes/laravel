@extends('_partials/main')

@section('conteudo')
    <!-- Login Container -->
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
