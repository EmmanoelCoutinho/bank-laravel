<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar nova conta</title>
</head>

<body>
    <H1>Banco Laravel Ltda.</H1>
    <H2>Adicionar nova conta</H2>
    <p>Por motivos de o dev ser iniciante por favor adicione apenas uma! 😊</p>
    <form action="/bank" method="post">
        @csrf
        <label for="account">Conta:</label>
        <input type="number" id="account" name="account" placeholder="Informe o número da conta" required>
        <label for="agency">Agência:</label>
        <input type="number" id="agency" name="agency" placeholder="Informe o número da agência" required>
        <label for="balance">Saldo Atual:</label>
        <input type="number" id="balance" name="balance" placeholder="Informe o saldo atual" required>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>
