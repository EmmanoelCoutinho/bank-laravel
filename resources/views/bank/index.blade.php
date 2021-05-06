<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Bank</title>
</head>

<body class="bg-dark text-light ">
    <div class="container mb-5">
        <H1>Banco Laravel Ltda.</H1>
        <h2>Gerêncie suas contas bancárias aqui!</h2>
        <a class="text-success" href="/bank/create" alt="Adicionar nova conta">Caso não tenha nem uma conta adicionada ainda, por favor adicione uma nova!</a>
    </div>
    @foreach($data as $data)
    <div class="container d-flex flex-column mb-5 p-3 border rounded text-dark bg-light">
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p class="mr-5 h4">Conta: {{$data->account}}</p>
                <p class="mr-5 h4">Agência: {{$data->agency}}</p>
                <p class="h4">Saldo: {{$data->balance}}</p>
            </div>
            <div class="d-flex">
                <a href="{{ route('bank.edit', $data->id) }}">
                    <button class="btn btn-success">Editar</button>
                </a>
                <form action="{{ route('bank.destroy', $data->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <input type="submit" class="btn btn-danger ml-2" value="Excluir">
                </form>
            </div>
        </div>
        <form class=" d-flex flex-column" action="{{ route('bank.update', $data->id) }}" method="post">
            @csrf
            <label class="h4" for="depositar">Deposito:</label>
            <div>
                <input type="hidden" name="_method" value="put">
                <input class="form-control mb-2" id="depositar" name="balance" placeholder="Digite o valor que deseja depositar!">
                <button type="submit" class="btn btn-success">Depositar</button>
            </div>
        </form>
        <form action="{{ route('withdraw', $data->id) }}" method="post">
            @csrf
            <label class="h4 mt-3" for="sacar">Saque:</label>
            <div>
                <input type="hidden" name="_method" value="put">
                <input class="form-control mb-2" id="sacar" name="balance" placeholder="Digite o valor que deseja sacar!">
                <button type="submit" class="btn btn-danger">Sacar</button>
            </div>
        </form>
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
