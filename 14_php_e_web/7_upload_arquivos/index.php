<?php

    if (isset($_FILES)){

        print_r($_FILES);
    } 
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <div>
        <input type="file" name="imagem" >
    </div>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
