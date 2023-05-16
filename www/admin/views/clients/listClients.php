<h1>Lista de Clientes</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Cliente</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
      <th scope="col" colspan="2">Ações</th>
    </tr>
  </thead>
  <tbody>

    <?php
    // Loop através do array para imprimir cada linha da tabela
    foreach ($arrayClients as $clients) {
      echo "<tr>";
      echo "<td>" . $clients['idClient'] . "</td>";
      echo "<td>" . $clients['name'] . "</td>";
      echo "<td>" . $clients['phone'] . "</td>";
      echo "<td>" . $clients['email'] . "</td>";
      echo "<td>" . $clients['address'] . "</td>";
      echo "<td><a href='?controller=client&action=updateClient&id=" . $clients['idClient'] . "'><button class='btn btn-warning'>Alterar</button></a></td>";
      echo "<td><a href='?controller=client&action=deleteClient&id=" . $clients['idClient'] . "'><button class='btn btn-danger'>Excluir</button></a></td>";


      echo "</tr>";
    }
    ?>

  </tbody>
</table>