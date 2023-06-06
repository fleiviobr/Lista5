<?php
    include('conexao.php');
    $nome_foto="";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $past_destiny = 'imagens/';
        $extension = strtolower(substr($_FILES['foto']['name'], -4));
        $nome_foto = $past_destiny . date("Ymd-His") . $extension;
        move_uploaded_file($_FILES['foto']['tmp_name'] , $nome_foto);
    }
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

    $sql = "update agenda set nome ='$nome', apelido ='$apelido', endereco ='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', telefone='$telefone', celular='$celular', email='$email', foto='$nome_foto' where id_agenda=$id_agenda";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: listar_agenda.php");
    }else{
       echo "Erro ao atualizar dados!";
    }
?>