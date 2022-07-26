<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/novo-teste.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/solicitacao.css') }}">

        <title>Detalhes do Empréstimo</title>
    </head>
    <body>

        <section>
            <div class="container mt-3">
                {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary">Voltar</a> --}}
                <div class="row">
                    <div class="col- mt-5">
                        <div class="table-responsive">
                            <h2 class="table-title">Detalhamento do Empréstimo</h2>
                            <table class="table align-middle table-striped table-hover text-center text-white">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Valor</th>
                                        <th>Taxa de Juros</th>
                                        <th>Valor final</th>
                                        <th>Nº de parcelas pagas / Nº de parcelas</th>
                                        <th>Status</th>
                                        <th>Data de solicitação</th>
                                        <th>Data de quitação</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                        <tr>
                                            <td class="text-white">{{ $emprestimo->id }}</td>
                                            <td class="text-white">R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.')}}</td>
                                            <td class="text-white">{{ $emprestimo->taxa_juros}}</td>
                                            <td class="text-white">{{ '' }}</td>
                                            <td class="text-white">{{ $emprestimo->parcelasPagas() }}/{{ $emprestimo->parcelas()->count() }}</td>
                                            <td class="text-white">{{ $emprestimo->status_emprestimo}}</td> 
                                            <td class="text-white">{{ $emprestimo->data_solicitacao }}</td>
                                            <td class="text-white">{{ '' }}</td>
                                        </tr>
                                </tbody>
                            </table>
        
                        </div>
                    </div>
                </div>
            </div>
        </section>   
        
        <section>
            <div class="container mt-2 mb-2 d-md-flex justify-content-md-end">
                <a href="{{ route('emprestimo.parcelas', $emprestimo->id) }}" class="btn btn-primary">Consultar Parcelas</a>
            </div>    
        </section>
        
    </body>
</html>