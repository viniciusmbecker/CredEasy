<x-layout title="Área do Cliente">
		  
	<!------main-content-start-----------> 
		     
	<div class="main-content">
		<div class="row">
			<h1 class="mb-2"> Meu Dashboard</h1>
		</div>
		<hr>
		<div class="row">
			<h4 class="fw-bold mt-4">
				Olá, {{$cliente->nome}}!
			</h4>
		</div>
		<div class="container">
			<div class="row gy-4 d-flex justify-content-around bg-light mt-4 mb-4">
				<!-------------- INÍCIO PRIMEIRO CARD ---------------->
					<div class="col-lg-4 col-md-6">
						<a href="{{ route('emprestimo.lista-cliente') }}">
						<div class="d-flex align-items-center dashboard-card">
							<div class="icon-box">
								<span class="material-icons-sharp">bar_chart</span>
							</div>
							<h4>Meus empréstimos</h4>
						</div>
						</a>
					</div>	
				<!-------------- FINAL PRIMEIRO CARD ---------------->
		
				<!-------------- INÍCIO SEGUNDO CARD ---------------->
					<div class="col-lg-4 col-md-6">
						<a href="{{ route('emprestimo.aprovado') }}">
						<div class="d-flex align-items-center dashboard-card">
							<div class="icon-box">
								<span class="material-icons-sharp">payments</span>
							</div>
							<h4>Pagar parcelas</h4>
						</div>
						</a>
					</div>		
				<!-------------- FINAL SEGUNDO CARD ---------------->
		
				<!-------------- INÍCIO TERCEIRO CARD ---------------->
					<div class="col-lg-4 col-md-6">
						<a href="{{ route('emprestimo.solicitacao') }}">
						<div class="d-flex align-items-center dashboard-card">
							<div class="icon-box">
								<span class="material-icons-sharp">currency_exchange</span>
							</div>
							<h4>Novo empréstimo</h4>
						</div>
						</a>
					</div>		
				<!-------------- FINAL TERCEIRO CARD ---------------->
				</div>
				</div>
				<div class="row mt-3">	
				    <div class="col-md-12 mt-3">
					   	<div class="table-wrapper">
							<div class="table-responsive">
								<h2 class="table-title">Empréstimos Recentes <a href="{{ route('emprestimo.lista-cliente') }}" class="fs-5 fw-lighter text-light p-2">Ver Todos</a></h2>
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
										@foreach ($novoEmprestimos->slice(0,3) as $novoEmprestimo)
                                        	<tr>
                                            	<td>{{ $novoEmprestimo->id }}</td>
                                            	<td>R$ {{ number_format($novoEmprestimo->valor_emprestimo, 2, ',', '.') }}</td>
                                            	<td>{{ $novoEmprestimo->data_solicitacao->format('d/m/Y')}}</td>
                                            	<td>{{ $novoEmprestimo->parcelasPagas() }}/{{ $novoEmprestimo->parcelas()->count()}}</td> 
                                            	<td>{{ $novoEmprestimo->status_emprestimo}}</td>
												@if ( $novoEmprestimo->status_emprestimo === 'REPROVADO')
                                            		<td>
														<a class="btn btn-primary btn-sm disabled" 
															role="button" 
															href={{ route('emprestimo.detalhes', $novoEmprestimo->id) }}>
															Detalhes
														</a>
													</td>
												@else 
													<td>
														<a class="btn btn-primary btn-sm" 
															role="button" 
															href={{ route('emprestimo.detalhes', $novoEmprestimo->id) }}>
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
	<!------main-content-end-----------> 
</x-layout> 
		

