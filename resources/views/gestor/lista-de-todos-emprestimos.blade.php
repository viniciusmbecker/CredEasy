<x-layout title="Novo Usuário">
		     
	<div class="main-content">
		<div class="row">
			<h1 class="mb-2"> Minha Gestão</h1>
		</div>
		<hr>
		<form action="{{ route('todos.emprestimosfiltro') }}" method="get">
			<div class="input-group d-flex justify-content-end gap-2">
				<input type="text" name="search" class="form-control" placeholder="Filtrar empréstimos por status" autocomplete="off">
				<button class="btn botao-newsletter" type="submit" id="button-addon2">Filtrar</button>
			</div>
		</form>
		@isset($search)
			<div class="mt-3">
				<h3>Você buscou por: {{$search}}</h3>
			</div>
		@endisset
		<div class="row mt-4">	
			<div class="col-md-12 mt-3">
				<div class="table-wrapper">
					<div class="table-responsive">
						<h2 class="table-title">
							Lista de Empréstimos
						</h2>
						<table class="table">
							<thead>
								<tr>
                                    <th>CPF</th>
                                    <th>Valor</th>
                                    <th>Data Solicitação</th>
                                    <th>Status</th>
                                </tr>
							</thead>
							
							<tbody>
								@foreach ($emprestimos as $emprestimo)
                                    <tr>
                                        <td>{{ $emprestimo->cliente_cpf}}</td>
                                        <td>R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.')}}</td>
                                        <td>{{ $emprestimo->data_solicitacao->format('d/m/Y H:i:s')}}</td>
                                        <td>{{ $emprestimo->status_emprestimo}}</td>
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
		    