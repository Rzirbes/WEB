<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php

        echo "<tr>";
        echo "<td>" . $client['name'] . "</td>";
        echo "<td>" . $client['email'] . "</td>";
        echo "<td>" . $client['phone'] . "</td>";
        echo "</tr>";

        ?>
    </tbody>
</table>