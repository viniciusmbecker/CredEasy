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

	<title>Detalhes das Parcelas</title>
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