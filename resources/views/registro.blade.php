@extends('_partials/main')

@section('conteudo')


    <div class="register-section">
      <h2 class="text-center mb-4">Registro</h2>
      <form action="{{route('registro')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo" name="nome_completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" name="senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirme sua senha" name="confirmar_senha" required>
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

    @endsection
