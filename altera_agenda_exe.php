<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    $sql = "update agenda set nome ='$nome', apelido ='$apelido', endereco ='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', telefone='$telefone', celular='$celular', email='$email' where id_agenda=$id_agenda";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: listar_agenda.php");
    }else{
       echo "Erro ao atualizar dados!";
    }
?>