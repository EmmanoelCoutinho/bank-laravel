<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Adicionar nova conta</title>
</head>

<body class="bg-dark text-light">
    <div class="container mb-4">
        <H1>Banco Laravel Ltda.</H1>
        <H2>Edite sua conta 😊</H2>
    </div>
    <div class="container">
        <form action="{{ route('bank.custom.edit', $data->id) }}" method="post">
            @csrf
            <div class="d-flex flex-column mb-4">
                <label class="h4" for="account">Conta:</label>
                <input value="{{$data->account}}" class="form-control w-25" type="number" id="account" name="account" placeholder="Informe o número da conta" required>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class="h4" for="agency">Agência:</label>
                <input value="{{$data->agency}}" class="form-control w-25" type="number" id="agency" name="agency" placeholder="Informe o número da agência" required>
            </div>
            <div class="mt-3 d-flex flex-column">
                <input type="hidden" name="_method" value="put">
                <button class="btn btn-success w-25" type="submit">Salvar</button>
                <a class="text-success h5 mt-2" href="/bank">Ver Minhas Contas!</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
