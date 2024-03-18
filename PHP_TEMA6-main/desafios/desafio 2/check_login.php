<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>

<body>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        if ($username == 'admin') {
            if ($password == 'admin123') {
                echo "Seja bem vindo administrador!";
            } else {
                echo "A senha esta incorreta!";
            }
        } else {
            echo "Usuario nao cadastrado";
        }
    }
    ?>
    

</body>

</html>