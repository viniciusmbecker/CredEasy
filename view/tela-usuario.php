<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página do Usuário</title>

        <!-- Material CDN -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

        <link rel="stylesheet" href="./assets/css/tela-usuario.css">
    </head>

    <body>

        <!--**************************************************************************************-->
        <!--                               Início do cabeçalho                                    -->
        <!--**************************************************************************************-->
        <header>
            <div class="cabecalho">       
                <nav class="cabecalho-menu">
                    <h1>CredEasy</h1>
                    <a href="#">Home</a>
                    <a href="#">Sobre</a>
                    <a href="#">Produtos</a>
                    <a href="#">Contato</a>
                </nav>

                <div class="cabecalho-pesquisa">
                    <div id="pesquisa">
                        <img src="../img/icon.svg" alt="Lupa da barra de pesquisa presente no menu" id="lupa">
                        <input id="texto-pesquisa" type="text" placeholder="Pesquisar...">
                    </div> 
                    <!-- <div><a class="botao-entrar" href="/login/login.html">Entrar</a></div>  
                    <a class="botao-cadastrar" href="/cadastro/cadastro.html">Cadastrar</a>      -->
                
                </div>
                <!-- Final da barra de navegação -->
            </div>    
        </header>
        <!--**************************************************************************************-->
        <!--                                Final do cabeçalho                                    -->
        <!--**************************************************************************************-->
        
        <div class="conteudo-da-pagina">
            <aside>
                <div class="topo">
                    <div class="usuario">
                        <span class="material-icons-sharp">account_circle</span>
                        <h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
                    </div>
                </div>
    
                <div class="sidebar">
                    <a href="#" class="ativo">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Meus Empréstimos</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">person_outline</span>
                        <h3>Meu Perfil</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">mail_outline</span>
                        <h3>Mensagens</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">settings</span>
                        <h3>Configurações</h3>
                    </a>
                    <a href="/logout">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Sair</h3>
                    </a>
                </div>
            </aside>


            <main>
                <h1>Meus Empréstimos</h1>
        
                <div class="dashboard">
                    <!-------------- INÍCIO PRIMEIRO CARD ---------------->
                    <div class="primeiro-card">
                        <span class="material-icons-sharp">analytics</span>
                    </div>
                    <!-------------- FINAL PRIMEIRO CARD ---------------->

                    <!-------------- INÍCIO SEGUNDO CARD ---------------->
                    <div class="segundo-card">
                        <span class="material-icons-sharp">bar_chart</span>
                    </div>
                    <!-------------- FINAL SEGUNDO CARD ---------------->

                    <!-------------- INÍCIO TERCEIRO CARD ---------------->
                    <div class="terceiro-card">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                    </div>
                    <!-------------- FINAL TERCEIRO CARD ---------------->
                
                </div>

                <div class="historico">
                    <h2>Histórico de Empréstimos</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Tipo do crédito</th>
                                    <th>Valor R$</th>
                                    <th>Nº de parcelas</th>
                                    <th>Nº de parcelas pagas</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12/11/2016</td>
                                    <td>Crédito Pessoal</td>   
                                    <td>3.500,00</td>
                                    <td>12</td>
                                    <td>12</td>
                                    <td>Pago</td>
                                    <td class="detalhes"><a href="#">Detalhes</a></td>                         
                                </tr>
                                <tr>
                                    <td>18/04/2022</td>
                                    <td>Crédito Imobiliário</td>   
                                    <td>200.000,00</td>
                                    <td>240</td>
                                    <td>0</td>  
                                    <td>Pendente</td>
                                    <td class="detalhes"><a href="#">Detalhes</a></td>                       
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>   
                                    <td></td>
                                    <td></td>
                                    <td></td> 
                                    <td></td> 
                                    <td></td>                       
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>   
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td> 
                                    <td></td>                        
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>   
                                    <td></td>
                                    <td></td>
                                    <td></td>   
                                    <td></td>  
                                    <td></td>                    
                                </tr>
                            </tbody>
                        </table>
                </div>    
                
            </main>
        
        </div>
        <footer>
            <p class="copyright">&copy; CredEasy - 2022</p>
        </footer>
        <!--**************************************************************************************-->
        <!--                               Final do rodapé                                        -->
        <!--**************************************************************************************-->


    </body>
</html>