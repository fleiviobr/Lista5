<link rel="stylesheet" href="principal.css">
<?php
            include("conexao.php");
            $nome_foto="";
            if(file_exists($_FILES['foto']['tmp_name'])){
                $past_destiny = 'imagens/';
                $extension = strtolower(substr($_FILES['foto']['name'], -4));
                $nome_foto = $past_destiny . date("Ymd-His") . $extension;
                move_uploaded_file($_FILES['foto']['tmp_name'] , $nome_foto);
            }
            $nome = $_POST['nome'];
            $apelido = $_POST['apelido'];
            $endereco = $_POST['endereco'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $telefone = $_POST['telefone'];
            $celular = $_POST['celular'];
            $email = $_POST['email'];
            
            $data = date('Y/m/d');

            $compara = "SELECT * FROM agenda WHERE email = '$email'";
            $result = mysqli_query($con, $compara);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                echo "<h1>Email já cadastrado</h1>";
                echo "<h3><a href='cadastro_agenda.html'> Voltar </a></h3>";
                exit();
            }

            $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, foto, dt_cadastro)";
            $sql .= "VALUES ('$nome', '$apelido', '$endereco', '$bairro', '$cidade', '$estado', '$telefone', '$celular', '$email', '$nome_foto', '$data')";

            if (mysqli_query($con, $sql)) {
                echo "<h1>Agenda registrada com sucesso!</h1>";
                echo "<h3><a href='cadastro_agenda.html' > Voltar </a></h3>";
            }else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($con);
            }
?>
