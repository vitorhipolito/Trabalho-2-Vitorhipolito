<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Pedido</title>
</head>
<body>
    <h1>Pedido Confirmado</h1>
    <?php
    if(isset($_POST['entrega'])) {
        $entrega = $_POST['entrega'];
        if($entrega == 'loja') {
            echo "<p>Seu pedido será retirado na loja em breve.</p>";
        } elseif($entrega == 'domicilio') {
            echo "<p>Seu pedido será entregue em breve no endereço cadastrado.</p>";
        }
    } else {
        echo "<p>Opção de entrega não selecionada.</p>";
    }
    ?>
</body>
</html>