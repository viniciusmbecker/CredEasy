<x-layout title="Área do Gestor">
    <div class="main-content">
        <div class="row">
            <h1 class="mb-2"> Lista de Clientes </h1>
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
                                    </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</x-layout> 