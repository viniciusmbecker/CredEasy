<x-layout title="Área do Cliente">  
	<div class="main-content">
		<div class="row">
			<h1 class="mb-2"> Histórico de Empréstimos </h1>
		</div>
		<hr>
		<div class="row mt-4">	
			<div class="col-md-12 mt-2">
				<div class="table-wrapper">
					<div class="table-responsive">
						<h2 class="table-title">Meus Empréstimos</h2>
						<table class="table table-striped text-center">
							<thead>
								<tr>
									<th>ID</th>
                                    <th>Valor</th>
                                    <th>Data de solicitação</th>
                                    <th>Nº de parcelas pagas /Nº de parcelas</th>
                                    <th>Status</th>
                                    <th></th>
								</tr>
							</thead>
							
							<tbody>
								@foreach ($emprestimos as $emprestimo)
                                    <tr>
                                        <td>{{ $emprestimo->id }}</td>
                                        <td>R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.') }}</td>
                                        <td>{{ $emprestimo->data_solicitacao->format('d/m/Y')}}</td>
                                        <td>{{ $emprestimo->parcelasPagas() }}/{{ $emprestimo->parcelas()->count()}}</td> 
                                        <td>{{ $emprestimo->status_emprestimo}}</td>
											@if ( $emprestimo->status_emprestimo === 'REPROVADO' )
												<td>
													<a class="btn btn-primary btn-sm disabled" 
														href={{ route('emprestimo.detalhes', $emprestimo->id) }}>
														Detalhes
													</a>
												</td>
											@else
												<td>
													<a class="btn btn-primary btn-sm" 
														href={{ route('emprestimo.detalhes', $emprestimo->id) }}>
														Detalhes
													</a>
												</td>	
											@endif 	 
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