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

            <h1>Empréstimos a serem analisados</h1>

            <table class="table align-middle table-striped">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Valor</th>
                        <th>Data Solicitação</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emprestimos as $emprestimo)
                        <tr>
                            <td>{{ $emprestimo->cliente_cpf}}</td>
                            <td>R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.')}}</td>
                            <td>{{ $emprestimo->data_solicitacao->format('d/m/Y H:i:s')}}</td>
                            <td>{{ $emprestimo->status_emprestimo}}</td>
                            <td><a class="btn btn-primary btn-sm" href={{ route('analisar.emprestimo', $emprestimo->id) }}>Analisar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </body>
</html>