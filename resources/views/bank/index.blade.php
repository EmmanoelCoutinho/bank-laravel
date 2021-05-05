<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>

<body>
    <H1>Banco Laravel Ltda.</H1>
    <form action="">
        @csrf
        <label>Deposito</label>
        <input placeholder="Digite o valor que deseja depositar!">
        <button>Depositar</button>
    </form>
    <form action="" method="post">
        @csrf
        <label>Saque</label>
        <input placeholder="Digite o valor a ser sacado!">
        <button>Sacar</button>
    </form>
</body>

</html>
