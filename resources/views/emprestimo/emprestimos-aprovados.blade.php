<x-layout title="Área do Cliente">
	<div class="main-content">
		<div class="row">
			<h1 class="mb-4"> Selecione o Empréstimo que deseja pagar a parcela</h1>
		</div>
		<hr>
        <div class="table-wrapper">
            <div class="table-responsive">
                <h2 class="table-title">Empréstimos Aprovados</h2>
                <table class="table align-middle table-striped text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Valor</th>
                            <th>Data Solicitação</th>
                            <th>Nº de parcelas pagas /Nº de parcelas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emprestimos as $emprestimo)
                            @if ( $emprestimo->status_emprestimo === 'APROVADO') 
                                <tr>
                                    <td>{{ $emprestimo->id}}</td>
                                    <td>R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.')}}</td>
                                    <td>{{ $emprestimo->data_solicitacao->format('d/m/Y H:i:s')}}</td>
                                    <td>{{ $emprestimo-> parcelasPagas() }}/{{ $emprestimo->parcelas()->count()}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href={{ route('emprestimo.comparcela', $emprestimo->id) }}>Selecionar</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>             
	</div>
</x-layout> 