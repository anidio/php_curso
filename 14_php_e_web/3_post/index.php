<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>

    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" placeholder="Pelicula"> Pelicula
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" placeholder="Teto solar"> Teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" placeholder="Blindado"> Blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
