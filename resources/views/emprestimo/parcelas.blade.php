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
						<h2 class="table-title">Detalhamento das Parcelas</h2>
						<table class="table table-striped text-center">
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
                                        <td>{{ $parcela->id }}</td>
                                        <td>{{ $parcela->numero_parcela}}</td>
                                        <td>R$ {{ number_format($parcela->valor_parcela, 2, ',', '.')}}</td>
                                        <td>{{ $parcela->data_vencimento->format('d/m/Y') }}</td>
                                        <td>{{ '' }}</td>
                                        <td>R$ {{ number_format($parcela->valor_pago, 2, ',', '.') }}</td> 
                                        <td>{{ $parcela->status}}</td>
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