<?php

$method = $_SERVER['REQUEST_METHOD'];

if (isset($_POST['nome'])){
    $nome = $_POST['nome'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>

<?php
    if ($method == 'GET'):
?>

<form action="index.php" method="POST">
    <div>
        <input type="text" name="nome" placeholder="Digite seu nome">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<?php
    else:
?>

<h1>O Seu nome é <?= $nome ?> </h1>

<?php
endif;
?>

</body>
</html>
