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


        <title>Gestor - Análise de Empréstimo</title>
    </head>

    <body>
        <section>
            <div class="container mt-3">
                <h1 class="text-center">Análise de Empréstimos</h1>
                <div class="row">
                    <div class="col- mt-5">
                        <div class="table-responsive">
                            <h2 class="table-title">Informações do Cliente</h2>
                            <table class="table table-striped table-hover text-center text-white">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Profissão</th>
                                        <th>Renda</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                        <tr>
                                            <td class="text-white">{{ $cliente->nome }}</td>
                                            <td class="text-white">{{ $cliente->cpf }}</td>
                                            <td class="text-white">{{ $cliente->profissao }}</td>
                                            <td class="text-white">R$ {{ number_format($cliente->renda, 2, ',', '.') }}</td>
                                        </tr>  
                                </tbody>
                            </table>
        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col- mt-5">
                        <div class="table-responsive">
                            <h2 class="table-title">Detalhamento do Empréstimo Solicitado</h2>
                            <table class="table table-striped table-hover text-center text-white">
                                <thead>
                                    <tr>
                                        <th>Valor</th>
                                        <th>Nº de parcelas</th>
                                        <th>Data de solicitação</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                        <tr>
                                            <td class="text-white">R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.') }}</td>
                                            <td class="text-white">{{ $emprestimo->parcelas->count() }}</td>
                                            <td class="text-white">{{ $emprestimo->data_solicitacao }}</td>
                                        </tr>
                                </tbody>
                            </table>
        
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        
        <section class="mb-5">
            <div class="container">
                <form action="{{ route('emprestimo.status', $emprestimo->id) }}" class="row g-3 d-flex" method="post">
                    @csrf
                    <div class="col-4 form-floating mb-4">
                        {{-- <input type="text" class="form-control" id="floatingInput" placeholder="Taxa de Juros" required> --}}
                        <select class="form-select">
                            <option value="">20</option>
                            <option value="">15</option>
                            <option value="">10</option>
                        </select>    
                        <label for="floatingInput">Taxa de Juros</label>
                    </div>   
                    
                    <div class="col-4 form-floating mb-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Taxa de Juros" data-tipo="renda" value="R$ {{number_format($valorParcela, 2, ',', '.')}}" required>
                        <label for="floatingInput">Valor da Prestação</label>
                    </div> 

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                    </div> 

                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-danger btn-lg" value="0" name="btn" >Recusar Empréstimo</button>
                        <button type="submit" class="btn btn-success btn-lg" value="1" name="btn" >Aprovar Empréstimo</button>
                    </div>
                </form>
            </div>
        </section>

    </body>
</html>