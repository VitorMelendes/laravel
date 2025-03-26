@extends('_partials/main')

@section('conteudo')


    <div class="login-section">
      <h2 class="text-center mb-4">Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <div class="text-center mt-3">
          <a href="#" style="color: #03A64A;">Esqueceu a senha?</a>
        </div>
        <div class="text-center mt-3">
          <p>Não tem uma conta? <a href="#" style="color: #03A64A;">Cadastre-se</a></p>
        </div>
      </form>
    </div>
    @endsection

