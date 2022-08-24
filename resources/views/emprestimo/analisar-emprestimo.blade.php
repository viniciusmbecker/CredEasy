<x-layout title="Área do Gestor">
    <div class="main-content">
        <div class="row">
            <h1 class="mb-2"> Análise de Empréstimo </h1>
        </div>
        <hr>
        <div class="row mt-2">
            <div class="col-md-12 mt-2">
                <div class="table-wrapper">
                    <div class="table-responsive">
                        <h2 class="table-title-var">Informações do Cliente</h2>
                        <table class="table table-striped table-hover text-center">
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
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->cpf }}</td>
                                    <td>{{ $cliente->profissao }}</td>
                                    <td>R$ {{ number_format($cliente->renda, 2, ',', '.') }}</td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="table-wrapper">
                    <div class="table-responsive">
                        <h2 class="table-title-var">Detalhamento do Empréstimo Solicitado</h2>
                        <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Valor</th>
                                        <th>Nº de parcelas</th>
                                        <th>Data de solicitação</th>
                                    </tr>
                                </thead>
                        
                                <tbody>
                                        <tr>
                                            <td>R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.') }}</td>
                                            <td>{{ $emprestimo->parcelas->count() }}</td>
                                            <td>{{ $emprestimo->data_solicitacao }}</td>
                                        </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <form action="{{ route('emprestimo.status', $emprestimo->id) }}" class="row g-3" method="post">
                @csrf
                {{-- <div class="col-4 form-floating mb-4">
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
                        <button type="submit" class="btn btn-primary btn-lg w-100">Atualizar</button>
                </div>  --}}

                <div class="d-grid gap-3 d-md-flex justify-content-md-end mb-3">
                        <button type="submit" class="btn botao-analise-red btn-lg" value="0" name="btn" >Recusar Empréstimo</button>
                        <button type="submit" class="btn botao-analise-green btn-lg" value="1" name="btn" >Aprovar Empréstimo</button>
                </div>
            </form>
        </div>
            
    </div>        
</x-layout> 