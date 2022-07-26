<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CredEasy</title>

        @vite('resources/css/app.scss')
    </head>
    <body>
        <div class="container">

            <h1>Listagem de Clientes</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Renda</th>
                        <th>Profissão</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome}}</td>
                            <td>{{ $cliente->cpf}}</td>
                            <td>{{ number_format($cliente->renda, 2, ',', '.')}}</td>
                            <td>{{ $cliente->profissao}}</td>
                            <td>{{ $cliente->senha}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </body>
</html>