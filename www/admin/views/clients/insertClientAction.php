<div class="justify-content-center">
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
        </tr>
    </thead>
    <tbody>
        <?php

        echo "<tr>";
        echo "<td>" . $client['name'] . "</td>";
        echo "<td>" . $client['email'] . "</td>";
        echo "<td>" . $client['phone'] . "</td>";
        echo "<td>" . $client['address'] . "</td>";
        echo "</tr>";

        ?>
    </tbody>
    </table>
    <div class="card bg-success text-white text-center">
    <div class="card-body">Cliente inserido com sucesso</div>
  </div>
    
</div>


