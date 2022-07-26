<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/novo-teste.css') }}">

        <!-- Material CDN -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

        <!--Favicon Icon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

        <title>Área do cliente</title>
    </head>

    <body>
        <header class="cabecalho">
            <a href="#" class="cabecalho__menu align-items-center">
                <span class="material-icons-sharp">menu</span>
            </a>
            <img src="{{ asset('img/CredEasy2.png') }}" alt="Logotipo da CredEasy" class="cabecalho__logo">
            <p class="cabecalho__perfil">Bruno Lopez</p>
            <button class="cabecalho__notificacao"><span class="material-icons-sharp">notifications</span></button>
        </header>

        <nav class="menu-lateral">
            <img src="{{ asset('img/CredEasy2.png') }}" alt="Logotipo da CredEasy" class="menu-lateral__logo">
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
                    <div class="col-9 section-intro">
                        <h1 class="text-dark text-center m-0">Olá, {{$cliente->nome}}</h1>
                    </div>
                    <div class="col-3 section-intro mt-2 mb-5">
                        <a href="{{ route('emprestimo.solicitacao') }}" class="btn btn-primary">Solicitar Empréstimo</a>
                        <a href="{{ route('logout') }}" class="btn btn-primary">Sair</a>
                    </div>
                </div>
                <div class="row gy-4 bg-light mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="custom-card">
                        <div class="icon-box">
                            <span class="material-icons-sharp">analytics</span>   
                        </div>
                        <h5 class="text-dark text-center">Lorem ipsum</h5>
                        <p class="text-dark"></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="custom-card">
                        <div class="icon-box">
                            <span class="material-icons-sharp">bar_chart</span>   
                        </div>
                        <h5 class="text-dark text-center">Lorem ipsum</h5>
                        <p></p>
                    </div>
                </div>
                  
                <div class="col-lg-4 col-md-6">
                    <div class="custom-card">
                        <div class="icon-box">
                            <span class="material-icons-sharp">stacked_line_chart</span>    
                        </div>
                        <h5 class="text-dark text-center">Lorem ipsum</h5>
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
                            <table class="table align-middle table-striped table-hover text-center">
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
                                    @foreach ($novoEmprestimos as $novoEmprestimo)
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
        </section>    

        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>