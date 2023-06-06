<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Agenda</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <div class="container">
        <?php
            include('conexao.php');
            $sql = "select * from agenda";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            ?>
            <h1>Lista de Agendas</h1>
            <table>
                <tr id="header">
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Data de Cadastro</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
                <br>
                <?php
                    do {    
                        echo "<tr>";
                        echo "<td>" . $row ['nome'] . "</td>";
                        echo "<td>" . $row ['apelido'] . "</td>";
                        echo "<td>" . $row ['endereco'] . "</td>";
                        echo "<td>" . $row ['bairro'] . "</td>";
                        echo "<td>" . $row ['cidade'] . "</td>";
                        echo "<td>" . $row ['estado'] . "</td>";
                        echo "<td>" . $row ['telefone'] . "</td>";
                        echo "<td>" . $row ['celular'] . "</td>";
                        echo "<td>" . $row ['email'] . "</td>";
                        echo "<td>" . $row ['dt_cadastro'] . "</td>";
                        echo "<td class='update'><a href='altera_agenda.php?id_agenda=" . $row['id_agenda'] . "' class='up'>Alterar</a> </td>";
                        echo "<td class='delete'><a href='exclui_agenda.php?id_agenda=" . $row['id_agenda'] . "' class='del'>Excluir</a> </td></tr>";
                    }while($row = mysqli_fetch_array($result))
                ?>
            </table>
            <br>
        <h2><a href="index.php" class="link">Voltar</a></h2>
    </div>
</body>
</html>