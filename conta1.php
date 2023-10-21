<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("conta2.php");

        $conta1->Depositar(200);
        $conta1->Sacar(25);

        
        echo "Favorecido: " . $conta1->Cliente . "<br/>";
        echo "Conta: " . $conta1->Conta . "<br/>";
        echo "Ag: " . $conta1->Agencia . "<br/>";
        echo "Saldo: " . $conta1->ObterSaldo() . "<br/>";
    ?>
</body>
</html>