<?php
        $usuario = [
                'nome' => 'Isaias',
                'idade' => 28,
                'profissão' => 'Programador'
        ];

        if($usuario) {
            $nome = $usuario['nome'];
            $idade = $usuario['idade'];
            $profissao = $usuario['profissão'];
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>

<form action="">
    <div>
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
    </div>
    <div>
        <input type="text" name="idade" placeholder="Digite seu nome" value="<?= $idade ?>">
    </div>
    <div>
        <input type="text" name="profissao" placeholder="Digite seu nome" value="<?= $profissao ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

</body>
</html>
