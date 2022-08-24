<x-layout title="Área do Gestor">
	<div class="main-content">
		<div class="row">
			<h1 class="mb-2"> Minha Gestão</h1>
		</div>
		<hr>
		<div class="row mt-4">	
			<div class="col-md-12 mt-3">
				<div class="table-wrapper">
					<div class="table-responsive">
						<h2 class="table-title">Empréstimos a serem analisados</a></h2>
						<table class="table">
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
				</div>
			</div>        	
		</div>
	</div>
</x-layout> 