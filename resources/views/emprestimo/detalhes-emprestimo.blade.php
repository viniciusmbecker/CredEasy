<x-layout title="Área do Cliente"> 
	<div class="main-content">
		<div class="row">
			<h1 class="mb-2"> Meu Dashboard</h1>
		</div>
		<hr>
		<div class="row mt-2">	
			<div class="col-md-12 mt-2">
				<div class="table-wrapper">
					<div class="table-responsive">
						<h2 class="table-title">Detalhes do Empréstimo</h2>
						<table class="table table-striped text-center">
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
                                    <td>{{ $emprestimo->id }}</td>
                                    <td>R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.')}}</td>
                                    <td>{{ $emprestimo->taxa_juros}}</td>
                                    <td>{{ '' }}</td>
                                    <td>{{ $emprestimo->parcelasPagas() }}/{{ $emprestimo->parcelas()->count() }}</td>
                                    <td>{{ $emprestimo->status_emprestimo}}</td> 
                                    <td>{{ $emprestimo->data_solicitacao }}</td>
                                    <td>{{ $emprestimo->data_quitacao }}</td>
                                </tr>  	
							</tbody>
						</table>
					</div>   
				</div>
			</div>        	
		</div>
        <div class="mt-2 mb-2 d-md-flex justify-content-md-end">
            <a href="{{ route('emprestimo.parcelas', $emprestimo->id) }}" class="btn btn-primary">Consultar Parcelas</a>
        </div>    
	</div>
</x-layout> 
