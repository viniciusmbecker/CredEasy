<x-layout title="Área do Cliente">
	<div class="main-content">
		<div class="row">
			<h1 class="mb-2"> Realize o pagamento da parcela</h1>
		</div>
		<hr>
        <div class="table-wrapper">
			<div class="table-responsive">
				<h2 class="table-title">ID Empréstimo: {{ $emprestimo->id}}</h2>
				<table class="table table-striped text-center">
					<tbody>
                        <tr>
                            <th>Data de solicitação</th>
                            <td>{{ $emprestimo->data_solicitacao->format('d/m/Y')}}</td>
                        </tr>
                        <tr>
                            <th>Nº de parcelas pagas / Nº de parcelas</th>
                            <td>{{ $emprestimo->parcelasPagas() }}/{{ $emprestimo->parcelas()->count() }}</td>
                        </tr>
                                        
                        <tr>
                            <th>Valor do Emprestimo</th>
                            <td>R$ {{ number_format($emprestimo->valor_emprestimo, 2, ',', '.')}}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>
                    </tbody>
				</table>
                <table class="table text-center align-middle">        
                    <tbody>    
                        <tr>
                            <th style="width: 15%">Parcelas</th>
                            <td class="fw-bold" style="width: 25%">Valor da Parcela</td>
                            <td class="fw-bold" style="width: 20%">Data de vencimento</td>
                            <td class="fw-bold" style="width: 20%">Data de pagamento</td>
                            <td style="width: 15%"></td>
                        </tr>
                        @foreach ($parcelas as $parcela)
                        <tr>
                            <th>Parcela {{ $parcela->numero_parcela}}</th>
                            <td>R$ {{ number_format($parcela->valor_parcela, 2, ',', '.')}}</td>
                            <td>{{ $parcela->data_vencimento->format('d/m/Y') }}</td>
                            <td>
                                @if ($parcela->data_pagamento)
                                    {{ $parcela->data_pagamento->format('d/m/Y') }}
                                @else 
                                    {{ '__/__/____'}}
                                @endif
                            </td>
                            <td>
                            {{-- @if ($parcela->numero === $parcelaSeguinte) --}}
                                <form action="{{ route('parcela.pagar', $parcela->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                        @if ( $parcela->status != 'PAGA')
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Pagar
                                            </button>
                                        @else
                                            <button type="submit" class="btn btn-primary btn-sm" disabled>
                                                Pagar
                                            </button>
                                        @endif
                                </form>        
                            </td>
                        </tr>
                        @endforeach    
                    </tbody>
                </table>
			</div>   
		</div>        	
	</div>
</x-layout> 