<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    $nome = "";
    if(isset($_GET['nome'])) {
        $nome = $_GET['nome'];
    
	//código aqui
    echo "seja bem vindo $nome!";
    }
    ?>
</body>
</html>
