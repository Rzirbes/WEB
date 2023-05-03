<div class="container">
  <h1>Inserir Cliente</h1>
  <form action="?controller=client&action=insertClientAction" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Telefone</label>
      <input type="tel" class="form-control" id="phone" name="phone">
      <label for="address" class="form-label">Endereço</label>
      <input type="address" class="form-control" id="address" name="address">
    </div>
    <button type="submit" class="btn btn-primary">Inserir</button>
  </form>
</div>