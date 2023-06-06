<?php
    function media($x,$y,$z){
        $media = ($x+$y+$z)/3;
        return $media;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal.css">
    <title>Pagina Inicial</title>
</head>
<body>
    <div class="container">
        <ul>
            <li><a href="cadastro_agenda.html" class="link">Cadastro Agenda</a></li>
            <li><a href="listar_agenda.php" class="link">Listar Agenda</a></li>
        </ul>
    </div>
</body>
</html>