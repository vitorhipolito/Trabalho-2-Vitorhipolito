<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <h1>Seu Carrinho de Compras</h1>
    <ul>
        <?php
        if(isset($_POST['frutas'])) {
            $frutas = $_POST['frutas[]'];
            foreach($frutas as $fruta) {
                echo "<li>$fruta</li>";
            }
        } else {
            echo "<li>Nenhuma fruta selecionada</li>";
        }
     
        ?>
    </ul>
    <form action="finalizar_pedido.php" method="POST">
        <input type="submit" value="Finalizar Pedido">
    </form>
</body>
</html>