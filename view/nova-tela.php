<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/novo-teste.css">

        <!-- Material CDN -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

        <!--Favicon Icon-->
        <link rel="icon" type="image/x-icon" href="./assets/img/logo.png">

        <title>Área do cliente</title>
    </head>

    <body>
        <header class="cabecalho">
            <a href="#" class="cabecalho__menu align-items-center">
                <span class="material-icons-sharp">menu</span>
            </a>
            <img src="../assets/img/CredEasy2.png" alt="Logotipo da CredEasy" class="cabecalho__logo">
            <p class="cabecalho__perfil">Bruno Lopez</p>
            <button class="cabecalho__notificacao"><span class="material-icons-sharp">notifications</span></button>
        </header>

        <nav class="menu-lateral">
            <img src="../assets/img/CredEasy2.png" alt="Logotipo da CredEasy" class="menu-lateral__logo">
            <ul class="nav navbar-nav mt-3">
                <li class="nav-item active">
                    <a href="#" class="nav_link d-flex align-items-center">
                        <span class="material-icons-sharp">dashboard</span> 
                        <h5 class="m-0 p-1"> Empréstimos </h5>
                    </a>
                </li>

                <li class="nav-item active">
                    <a href="#" class="nav_link d-flex align-items-center">
                        <span class="material-icons-sharp">person</span>
                        <h5 class="m-0 p-1"> Perfil </h5>
                    </a>
                </li>

                <li class="nav-item active">
                    <a href="#" class="nav_link d-flex align-items-center">
                        <span class="material-icons-sharp">settings</span>
                        <h5 class="m-0 p-1">Configurações</h5>
                    </a>
                </li>

                <li class="nav-item active">
                    <a href="#" class="nav_link d-flex align-items-center">
                        <span class="material-icons-sharp">email</span>
						<h5 class="m-0 p-1"> Mensagens </h5> 
                    </a>
                </li>

                <li class="nav-item active">
                    <a href="/logout" class="nav_link d-flex align-items-center">
                    <span class="material-icons-sharp">logout</span>
						<h5 class="m-0 p-1"> Sair </h5> 
                    </a>
                </li>

            </ul>
        </nav>

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-intro">
                        <h1 class="text-dark text-center m-0">Olá, <?php echo $_SESSION['nome']; ?></h1>
                    </div>
                </div>
                <div class="row gy-4 bg-light mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="custom-card">
                        <div class="icon-box">
                            <span class="material-icons-sharp">analytics</span>   
                        </div>
                        <h5 class="text-dark text-center">Total Emprestado</h5>
                        <p class="text-dark"></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="custom-card">
                        <div class="icon-box">
                            <span class="material-icons-sharp">bar_chart</span>   
                        </div>
                        <h5 class="text-dark text-center">Total</h5>
                        <p></p>
                    </div>
                </div>
                  
                <div class="col-lg-4 col-md-6">
                    <div class="custom-card">
                        <div class="icon-box">
                            <span class="material-icons-sharp">stacked_line_chart</span>    
                        </div>
                        <h5 class="text-dark text-center">Saldo Devedor</h5>
                        <p></p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col- mt-5">
                        <div class="table-responsive">
                            <h2 class="table-title">Meus Empréstimos</h2>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Valor</th>
                                        <th>Data de solicitação</th>
                                        <th>Nº de parcelas</th>
                                        <th>Nº de parcelas pagas</th>
                                        <th>Status</th>
                                        <th></th> 
                                    </tr>
                                </thead>
                        
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>1.000,00</th>
                                        <th>12/11/2016</th>
                                        <th>12</th>  
                                        <th>12</th>
                                        <th>Quitado</th> 
                                        <td class="detalhes"><a href="/detalhes">Detalhes</a></td> 
                                    </tr>
                           
                                    <tr>
                                        <th>2</th>
                                        <th>3.500,00</th>
                                        <th>09/01/2018</th>
                                        <th>12</th>  
                                        <th>12</th>
                                        <th>Quitado</th> 
                                        <td class="detalhes"><a href="#">Detalhes</a></td>  
                                   </tr>
                           
                                   <tr>
                                        <th>3</th>
                                        <th>2.000.500,00</th>
                                        <th>05/09/2020</th>
                                        <th>120</th> 
                                        <th></th> 
                                        <th>Rejeitado</th> 
                                        <td class="detalhes"><a href="#">Detalhes</a></td>
                                   </tr>
                           
                                    <tr>
                                        <th>4</th>
                                        <th>10.000,00</th>
                                        <th>28/10/2021</th>
                                        <th>18</th> 
                                        <th>7</th> 
                                        <th>Aprovado</th> 
                                        <td class="detalhes"><a href="#">Detalhes</a></td>
                                   </tr>
                           
                                    <tr>
                                        <th>5</th>
                                        <th>3.500,00</th>
                                        <th>16/05/2022</th>
                                        <th>12</th>  
                                        <th></th>
                                        <th>Solicitado</th> 
                                        <td class="detalhes"><a href="#">Detalhes</a></td>
                                   </tr>
                                </tbody>
                            </table>
        
                            <div class="clearfix">
                                <div class="hint-text">Mostrando <b>5</b> de <b>5</b>
                                   </div>
                                <ul class="pagination justify-content-end">
                                   <li class="page-item disabled"><a href="#" class="page-link">Anterior</a></li>
                                   <li class="page-item active"><a href="#"class="page-link">1</a></li>
                                   <li class="page-item "><a href="#"class="page-link">2</a></li>
                                   <!-- <li class="page-item "><a href="#"class="page-link">3</a></li>
                                   <li class="page-item "><a href="#"class="page-link">4</a></li>
                                   <li class="page-item "><a href="#"class="page-link">5</a></li> -->
                                   <li class="page-item"><a href="#" class="page-link">Próximo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
            
        <section>
            <div class="container mt-2 mb-5">
                <a href="/solicita-emprestimo" class="btn btn-primary">Solicitar Empréstimo</a>
            </div>
        </section>

        <script src="./assets/js/index.js"></script>
    </body>
</html>