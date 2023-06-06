<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "select * from agenda where id_agenda = $id_agenda";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <div class="container">
        <h1>Alterar Agenda</h1>
        <div class="container">
        <form action="altera_agenda_exe.php?id_agenda=<?php echo $row['id_agenda'] ?>" method="post" enctype="multipart/form-data">
            <div class="input">
                <label for="name">Nome:</label>
                <input type="text" name="nome" value="<?php echo $row['nome'] ?>">
            </div>
            <div class="input">
                <label for="name">Apelido:</label>
                <input type="text" name="apelido" value="<?php echo $row['apelido'] ?>">
            </div>
            <div class="input">
                <label for="name">Endereço:</label>
                <input type="text" name="endereco" value="<?php echo $row['endereco'] ?>">
            </div>
            <div class="input">
                <label for="name">Bairro:</label>
                <input type="text" name="bairro" value="<?php echo $row['bairro'] ?>">
            </div>
            <div class="input">
                <label for="name">Cidade:</label>
                <input type="text" name="cidade" value="<?php echo $row['cidade'] ?>">
            </div>
            <div class="input">
                <label for="name">Estado:</label>
                <input type="text" name="estado" value="<?php echo $row['estado'] ?>">
            </div>
            <div class="input">
                <label for="name">Telefone:</label>
                <input type="text" name="telefone" value="<?php echo $row['telefone'] ?>">
            </div>
            <div class="input">
                <label for="name">Celular:</label>
                <input type="text" name="celular" value="<?php echo $row['celular'] ?>">
            </div>
            <div class="input">
                <label for="name">Email:</label>
                <input type="text" name="email" value="<?php echo $row['email'] ?>">
            </div>
            <div class="input">
                <input type="file" name="foto" accept="image/*">
            </div>
            <div class="input">
                <button type="submit">Alterar</button>
            </div>
        </form>
    </div>
</body>
</html>