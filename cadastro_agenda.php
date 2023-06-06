<link rel="stylesheet" href="principal.css">
<?php
            include("conexao.php");
            $nome = $_GET['nome'];
            $apelido = $_GET['apelido'];
            $endereco = $_GET['endereco'];
            $bairro = $_GET['bairro'];
            $cidade = $_GET['cidade'];
            $estado = $_GET['estado'];
            $telefone = $_GET['telefone'];
            $celular = $_GET['celular'];
            $email = $_GET['email'];
            $data = date('Y/m/d');

            $compara = "SELECT * FROM agenda WHERE email = '$email'";
            $result = mysqli_query($con, $compara);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                echo "<h1>Email já cadastrado</h1>";
                echo "<h3><a href='cadastro_agenda.html'> Voltar </a></h3>";
                exit();
            }

            $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)";
            $sql .= "VALUES ('$nome', '$apelido', '$endereco', '$bairro', '$cidade', '$estado', '$telefone', '$celular', '$email', '$data')";

            if (mysqli_query($con, $sql)) {
                echo "<h1>Agenda registrada com sucesso!</h1>";
                echo "<h3><a href='cadastro_agenda.html' > Voltar </a></h3>";
            }else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($con);
            }
?>
