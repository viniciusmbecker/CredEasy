<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!----css3---->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
		
	<!-- Material CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    <!--Favicon Icon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

	<title>Página do Cliente</title>
    </head>

    <body>
  
        <div class="pagina">
     
	        <div class="body-overlay">
            </div>
	 
	        <!------- SIDEBAR ------------>
	 
	        <nav id="sidebar">
	            <div class="sidebar-header">
		            <img src="{{ asset('img/CredEasy2.png') }}" class="img-fluid" width="200px">
		        </div>

		        <ul class="nav navbar-nav mt-3">
		            <li class="nav-item active">
		                <a href="#" class="nav-link d-flex align-items-center">
                            <span class="material-icons-sharp">dashboard</span> 
                            <h5 class="m-0 p-1"> Dashboard </h5>
                        </a>
		            </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center">
                            <span class="material-icons-sharp">email</span>
							<h5 class="m-0 p-1"> Mensagens </h5> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center">
                            <span class="material-icons-sharp">settings</span>
                            <h5 class="m-0 p-1">Configurações</h5>
                        </a>
                    </li>
					<li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center">
                            <span class="material-icons-sharp">person</span>
                            <h5 class="m-0 p-1">Meu perfil</h5>
                        </a>
                    </li>
					<li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
                            <span class="material-icons-sharp">home</span>
                            <h5 class="m-0 p-1">home</h5>
                        </a>
                    </li>
					<li class="nav-item mt-5">
                        <a href="{{ route('logout') }}" class="nav-link d-flex align-items-center">
                            <span class="material-icons-sharp">logout</span>
                            <h5 class="m-0 p-1">Sair</h5>
                        </a>
                    </li>
		        </ul>
	        </nav>
   

   
            <div id="content">
	     
		        <!------top-navbar-start-----------> 
		     
		        <div class="top-navbar">
		            <div class="xd-topbar">
			            <div class="row d-flex justify-content-between">
				            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					            <div class="xp-menubar">
                                    <span class="material-icons-sharp">signal_cellular_alt</span>
						        </div>
					        </div>
					        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					            <div class="xp-profilebar text-right">
						            <nav class="navbar p-0 justify-content-end">
							            <ul class="nav navbar-nav flex-row ml-auto align-items-center">
							                <li class="nav-item d-flex align-self-center p-1">
								                <span class="material-icons-sharp" style="font-size: 2.3rem; color: white;">notifications</span>
							                </li>
							                <li class="nav-item d-flex align-self-center p-1">
								                <span class="material-icons-sharp" style="font-size: 2.3rem; color: white;">question_answer</span>
							                </li>
							                <li class="nav-item d-flex align-self-center p-1">
												<span class="material-icons-sharp" style="font-size: 2.3rem; color: white;">account_circle</span>
							                </li>
							            </ul>
							        </nav>
						        </div>
					        </div>
				        </div>
						
			 	</div>
				<!------top-navbar-end----------->  
		  	</div> 
		  		
		  
		  
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
				<!-- <div class="row">
					<p class="mt-4">
						From your My Dashboard you have the ability to view a snapshot of your 
						recent account activity and update your account information.
						Select a link bellow to view or edit information. 
					</p>
				</div> -->
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
                                            	<td><a class="btn btn-primary btn-sm" href={{ route('emprestimo.detalhes', $novoEmprestimo->id) }}>Detalhes</a></td> 
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
		  
		</div>


   		<script src="{{ asset('js/jquery.min.js') }}"></script>
   		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  
  		<script type="text/javascript">
       		$(document).ready(function(){
	      		$(".xp-menubar").on('click',function(){
		    		$("#sidebar").toggleClass('active');
					$("#content").toggleClass('active');
		  		});
		  
		  		$('.xp-menubar,.body-overlay').on('click',function(){
		     		$("#sidebar,.body-overlay").toggleClass('show-nav');
		  		});
		  
	   		});
  		</script>


  	</body>
  
</html>


