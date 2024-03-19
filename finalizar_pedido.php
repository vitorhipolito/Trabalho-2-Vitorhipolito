<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Pedido</title>
</head>
<body>
    <h1>Finalizar Pedido</h1>
    <form action="confirmacao.php" method="POST">
        <input type="radio" name="entrega" value="loja"> Retirada na Loja<br>
        <input type="radio" name="entrega" value="domicilio"> Entrega a Domicílio<br>
        <input type="submit" value="Confirmar Pedido">
    </form>
</body>
</html>