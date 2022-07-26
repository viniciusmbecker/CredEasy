<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/novo-teste.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/solicitacao.css') }}">

        <title>Detalhes - Parcelas</title>
    </head>
    <body>
        
        <section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col- mt-5">
                        <div class="table-responsive">
                            <h2 class="table-title">Detalhamento das Parcelas</h2>
                            <table class="table table-striped table-hover text-center text-white">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nº da parcela</th>
                                        <th>Valor</th>
                                        <th>Data de vencimento</th>
                                        <th>Multa</th>
                                        <th>Valor Pago</th>
                                        <th>Status</th> 
                                    </tr>
                                </thead>
                        
                                <tbody>
                                    @foreach ($parcelas as $parcela)
                                        <tr>
                                            <td class="text-white">{{ $parcela->id }}</td>
                                            <td class="text-white">{{ $parcela->numero_parcela}}</td>
                                            <td class="text-white">R$ {{ number_format($parcela->valor_parcela, 2, ',', '.')}}</td>
                                            <td class="text-white">{{ $parcela->data_vencimento }}</td>
                                            <td class="text-white">{{ '' }}</td>
                                            <td class="text-white">{{ '' }}</td> 
                                            <td class="text-white">{{ $parcela->status}}</td>
                                        </tr> 
                                    @endforeach
                                </tbody>
                            </table>
        
                        </div>
                    </div>
                </div>
            </div>
        </section>   
    </body>
</html>