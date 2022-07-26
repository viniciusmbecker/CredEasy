<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Estilo Customizado -->
        <link rel="stylesheet" type="text/css" href="assets/css/estilo-home.css">
        

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

        <title>CredEasy</title>
    </head>
    
    <body data-bs-spy="scroll" data-bs-target=".navbar" id="home">

        <!--**************************************************************************************-->
        <!--                               Início do cabeçalho                                    -->
        <!--**************************************************************************************-->
        <header>

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <div class="container">
                    
                    <a href="#" class="">
                        <img src="assets/img/CredEasy2.png" width="220">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item text-center">
                                <a href="#home" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#sobre" class="nav-link">Sobre</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#credito" class="nav-link">Crédito</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#contato" class="nav-link">Contato</a>
                            </li>
                        </ul>
                        <?php if (isset($_SESSION['logado'])): ?>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto align-items-lg-center">
                                    <form class="form-inline d-flex align-items-center justify-content-center mb-2 mb-lg-0" id="pesquisa">
                                        <img class="m-1" src="assets/img/icon.svg" alt="Lupa da barra de pesquisa presente no menu" id="lupa">
                                        <input type="text" id="texto-pesquisa" placeholder="Pesquisar">
                                    </form>
                                    <li class="nav-item d-flex justify-content-center">
                                        <a href="/logout" class="nav-link d-block btn ms-1 mb-2 mb-lg-0 cor-btn-nav px-2">Sair</a>
                                    </li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto align-items-lg-center">
                                    <form class="form-inline d-flex align-items-center justify-content-center mb-2 mb-lg-0" id="pesquisa">
                                        <img class="m-1" src="assets/img/icon.svg" alt="Lupa da barra de pesquisa presente no menu" id="lupa">
                                        <input type="text" id="texto-pesquisa" placeholder="Pesquisar">
                                    </form>
                                    <li class="nav-item d-flex justify-content-center">
                                        <a href="/login" class="nav-link d-block btn ms-1 mb-2 mb-lg-0 cor-btn-nav px-2">Entrar</a>
                                    </li>
                                    <li class="nav-item d-flex justify-content-center">
                                        <a href="/cadastra-cliente" class="nav-link d-block btn ms-1 cor-btn-nav px-2">Cadastrar</a>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>    
                    </div>
                </div>
            </nav>    
        </header>

        <!--**************************************************************************************-->
        <!--                                Final do cabeçalho                                    -->
        <!--**************************************************************************************-->
 

        <!--**************************************************************************************-->
        <!--                            Início da seção home                                       -->
        <!--**************************************************************************************-->
        
        <section id="home2"  class="home2-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="align-self-center">
                            <h1 class="display-4">Precisando de dinheiro?</h1>
                            <p class="mt-4 mb-4 frase">
                                O seu orçamento está apertado? Nós temos a melhor solução para você.
                            </p>

                            <form class="mt-4 mb-4" action="#">
                                <div class="input-group input-group-lg">
                                    <input type="email" placeholder="Seu email" class="form-control">
                                    <button type="submit" class="btn home-btn">Cadastrar</button>
                                </div>
                            </form>

                            <div class="d-none d-lg-block">
                                <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="icon-boxes">
                                        <span class="material-icons-sharp" style="font-size: 2rem;">lock</span>
                                    </div>
                                    <p class="text-start m-0 paragrafo"> Aqui a segurança dos seus dados é a nossa prioridade </p>
                                </div>

                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="icon-boxes">
                                        <span class="material-icons-sharp" style="font-size: 2rem;">devices</span>
                                    </div>
                                    <p class="text-start m-0 paragrafo"> Acesse quando quiser, no celular, tablet ou computador </p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img class="mw-100" src="assets/img/mulher-segurando-moeda.png">
                    </div>
                </div>
            </div>
        </section>

        <!--**************************************************************************************-->
        <!--                             Final da seção home                                       -->
        <!--**************************************************************************************-->

        <!--**************************************************************************************-->
        <!--                             Início da seção sobre                                    -->
        <!--**************************************************************************************-->

        <section id="sobre" class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-intro">
                      <h1>Prazer, somos a CredEasy</h1>
                      <p>A plataforma de crédito mais completa do Brasil.
                      </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="align-self-center">
                            <h2 class="text-center">Mais de 10 anos de experiência</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center text-md-end">Somos a CredEasy, e escolhemos trilhar um caminho coletivo para oferecer soluções
                        inteligentes para o seu desenvolvimento financeiro. A gente entende que as melhores 
                        escolhas são aquelas que trazem resultados para todos. Oferecemos produtos e serviços
                        financeiros de um jeito simples e próximo para você, para a sua empresa ou para o seu
                        agronegócio.
                        </p>
                    </div>
                </div>
            

                <div class="container mt-5">   
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-center">Nossos Números</h2>
                            <p class="text-center text-md-start">Temos mais de 1 milhão de clientes e estamos presentes em todo o Brasil, com mais
                            de 500 agências, além de estarmos presentes no meio digital. Com uma plataforma moderna
                            e segura, você pode contratar nossos serviços a partir de um simples clique.  
                            Temos mais de 2 mil colaboradores e pelo 2º ano consecutivo, ficamos entre as Melhores
                            Empresas para Você Trabalhar, segundo a revista Você S/A. E pelo quarto ano consecutivo, 
                            figuramos no ranking Melhores & Maiores da revista Exame.</p>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="row align-self-center">
                                <div class="col-lg-6 col-sm-6 p-3 numeros">
                                    <h1 class="mb-0">5,6</h1>
                                    <div class="divider"></div>
                                    <p class="mb-0 fw-bold">bilhões</p>
                                    <small class="fst-italic">patrimônio líquido</small>
                                </div>
                                <div class="col-lg-6 col-sm-6 p-3 numeros">
                                    <h1 class="mb-0">10,5</h1>
                                    <div class="divider"></div>
                                    <p class="mb-0 fw-bold">bilhões</p>
                                    <small class="fst-italic">ativos</small>
                                </div>
                                <div class="col-lg-6 col-sm-6 p-3 numeros">
                                    <h1 class="mb-0">136,4</h1>
                                    <div class="divider"></div>
                                    <p class="mb-0 fw-bold">bilhões</p>
                                    <small class="fst-italic">saldo em carteira de crédito</small>
                                </div>
                                <div class="col-lg-6 col-sm-6 p-3 numeros">
                                    <h1 class="mb-0">131,2</h1>
                                    <div class="divider"></div>
                                    <p class="mb-0 fw-bold">bilhões</p>
                                    <small class="fst-italic">movimentados</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="depoimentos">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-intro">
                        <h1>O que dizem nossos clientes</h1>
                        <p>Opinião de quem realmente importa</p>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="review">
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_half</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Optio quia soluta enim consequuntur, ratione facere voluptates 
                        voluptatibus animi, ex natus praesentium similique? Fuga fugiat 
                        sed cum amet similique quo facere! </p>
                        <div class="d-flex align-items-center">
                            <div class="person-icon-box m-0">
                                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            </div>    
                            <div class="clientes">
                                <h6 class="mb-0">Fernando T Wong</h6>
                                <small>Gerente de TI, <span>Santos - SP</span></small>
                            </div>
                        </div>    
                    </div>
                    <div class="review">
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_half</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Optio quia soluta enim consequuntur, ratione facere voluptates 
                        voluptatibus animi, ex natus praesentium similique? Fuga fugiat 
                        sed cum amet similique quo facere! </p>
                        <div class="d-flex align-items-center">
                            <div class="person-icon-box m-0">
                                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            </div>
                            <div class="clientes">
                                <h6 class="mb-0">Sarah Mascarenhas</h6>
                                <small>Auxiliar de Limpeza, <span>Alvorada - RS</span></small>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_half</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Optio quia soluta enim consequuntur, ratione facere voluptates 
                        voluptatibus animi, ex natus praesentium similique? Fuga fugiat 
                        sed cum amet similique quo facere! </p>
                        <div class="d-flex align-items-center">
                            <div class="person-icon-box m-0">
                                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            </div>
                            <div class="clientes">
                                <h6 class="mb-0">Onivaldo Pereira</h6>
                                <small>Motorista de Aplicativo, <span>Niterói - RJ</span></small>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_half</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Optio quia soluta enim consequuntur, ratione facere voluptates 
                        voluptatibus animi, ex natus praesentium similique? Fuga fugiat 
                        sed cum amet similique quo facere! </p>
                        <div class="d-flex align-items-center">
                            <div class="person-icon-box m-0">
                                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            </div>    
                            <div class="clientes">
                                <h6 class="mb-0">Tre'davious Silva</h6>
                                <small>Consultor de Vendas, <span>Gramado - RS</span></small>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="stars">
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_rate</span>
                            <span class="material-icons-sharp">star_half</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Optio quia soluta enim consequuntur, ratione facere voluptates 
                        voluptatibus animi, ex natus praesentium similique? Fuga fugiat 
                        sed cum amet similique quo facere! </p>
                        <div class="d-flex align-items-center">
                            <div class="person-icon-box m-0">
                                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            </div>    
                            <div class="clientes">
                                <h6 class="mb-0">Charles Esteves</h6>
                                <small>Radialista, <span>Pomerode - SC</span></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
              

        <!--**************************************************************************************-->
        <!--                              Final da seção sobre                                    -->
        <!--**************************************************************************************-->


        <!--**************************************************************************************-->
        <!--                            Início da seção crédito                                  -->
        <!--**************************************************************************************-->

        <section id="credito" class="border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-intro">
                        <h1>Nossas linhas de crédito</h1>
                        <p>Soluções inteligentes em crédito, pensadas diretamente para você. 
                        </p>
                    </div>
                </div>
            
                <div class="row gy-4 bg-light mt-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-data"></i>
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Crédito Pessoal</h5>
                            <p>Com esta modalidade de crédito você pode pagar suas contas, antecipar planos e 
                                realizar seus sonhos.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <i class="bi bi-house-fill"></i>
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Crédito Imobiliário</h5>
                            <p>Com esta modalidade de crédito, você consegue adquirir o seu tão sonhado imóvel residencial próprio.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <span class="material-icons-sharp">directions_car</span>
                                <!-- <i class="fas fa-car-side card-imagem-top card-imagem-posicao"></i> -->
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Crédito para Automóveis</h5>
                            <p>A partir desta linha de crédito, você poderá realizar a aquisição de veículos automotores novos e usados, nacionais
                                 ou importados.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <i class="bi bi-mortarboard-fill"></i>
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Crédito Educação</h5>
                            <p>A partir desta modalidade de crédito, você consegue investir nos seus estudos, seja na graduação
                                ou na pós-graduação.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <i class="bi bi-signpost-2-fill"></i>
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Crédito Turismo</h5>
                            <p>Com esta linha de crédito, você pode realizar aquela sua tão sonhada viagem, seja ela nacional ou internacional.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <span class="material-icons-sharp">agriculture</span>
                                <!-- <span style="font-size: 3rem;" class="material-symbols-outlined">agriculture</span> -->
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Crédito Agro</h5>
                            <p>Com esta modalidade de crédito, você consegue adquirir seus implementos agrícolas, bem como 
                                financiar sua lavoura.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <i class="bi bi-briefcase-fill"></i>
                                <img src="" class="card-imagem-top card-imagem-posicao" alt="">
                            </div>
                            <h5>Crédito Consignado</h5>
                            <p>Com esta modalidade de crédito, as parcelas são deduzidas diretamente da folha de pagamento
                                ou benefício da pessoa física.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <i class="bi bi-sun-fill"></i>
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Crédito Energia Solar</h5>
                            <p>Com esta linha de crédito, você consegue adquirir a tecnologia para utilização de uma fonte de energia renovável
                                 em sua residência.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service custom-card">
                            <div class="icon-box">
                                <i class="bi bi-bricks"></i>
                                <!-- <img src="" class="card-imagem-top card-imagem-posicao" alt=""> -->
                            </div>
                            <h5>Construção e Reforma</h5>
                            <p>Linha de crédito destinada a aquisição de materiais de construção e pagamento de mão-de-obra 
                                para construir ou reformar seu imóvel.</p>
                            <a href="#" class="btn botao-saiba-mais">Saiba mais</a>
                        </div>
                    </div>

                </div>
            </div>    
        </section> 

        <!--**************************************************************************************-->
        <!--                            Final da seção crédito                                   -->
        <!--**************************************************************************************-->

        <!--**************************************************************************************-->
        <!--                            Início da seção contato                                   -->
        <!--**************************************************************************************-->

        <section id="contato" class="border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-intro">
                        <h2>Entre em contato conosco</h2>
                        <p>Preencha o formulário abaixo ou encontre a nossa agência mais próxima.</p>
                    </div>
                </div>
                <div class="row bg-light">
                    <div class="col-lg-7">
                        <form action="" class="row gy-3 gx-3 p-4 plg-5">
                            <div class="form-group col-lg-6 custom-form">
                                <input type="text" class="form-control form-control-custom" placeholder="Digite seu nome">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control form-control-custom" placeholder="Digite seu sobrenome">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="email" class="form-control form-control-custom" placeholder="Insira seu email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control form-control-custom" placeholder="Descreva o assunto">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control form-control-custom" rows="4" placeholder="Escreva sua mensagem"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <a href="#" class="btn btn-form">Enviar Mensagem</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13906.491048060738!2d-51.106292599999996!3d-29.381332899999997
                        !2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1651514379931!5m2!1spt-BR!2sbr" class="mapa" style="border:0;" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>    
            </div>
        </section>

        <!--**************************************************************************************-->
        <!--                             Final da seção contato                                   -->
        <!--**************************************************************************************-->


        <!--**************************************************************************************-->
        <!--                               Início do rodapé                                       -->
        <!--**************************************************************************************-->

        <footer class="mt-5 py-4 footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 d-flex justify-content-center">
                        <img src="assets/img/CredEasy2.png" width="230">
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="row text-center d-flex align-items-center justify-content-around">
                            
                            <div class="col-md-3">
                                <a class="nav-link links-nav-footer" href="#home">Home</a>
                            </div>
                            
                            <div class="col-md-3">
                                <a class="nav-link links-nav-footer" href="#sobre">Sobre</a>
                            </div>
                            
                            <div class="col-md-3">
                                <a class="nav-link links-nav-footer" href="#credito">Crédito</a>
                            </div>
                            
                            <div class="col-md-3">
                                <a class="nav-link links-nav-footer" href="#contato">Contato</a>
                            </div>
                            
                          </div>
                    </div>
          
                    <div class="col-lg-3 mx-auto">
                        <div class="row">
                            <form>
                                <div class="d-lg-none d-block border-top mt-2 mb-2">
                                </div>
                                <p class="m-0 newsletter text-center">Fique por dentro das novidades</p>
                                <div class="input-group d-flex justify-content-end w-150 gap-1">
                                    <input type="text" class="form-control" placeholder="Email" aria-label="Email"
                                    aria-describedby="button-addon2">
                                    <button class="btn botao-newsletter" type="button" id="button-addon2">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                      <div class="row text-center d-flex align-items-center justify-content-between pt-4 my-4 border-top">
                        <div class="col-lg-5">
                           <p class="my-md-4">&copy;CredEasy - 2022. Todos os direitos reservados</p>
                        </div>
                        <div class="col-lg-2 d-flex align-items-center justify-content-around">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center m-0">
                                <li class="ms-3"><a class="link-light btn btn-outline-light btn-custom" href="https://www.twitter.com"><i class="bi bi-twitter"></i></a></li>
                                <li class="ms-3"><a class="link-light btn btn-outline-light btn-custom" href="https://www.instagram.com"><i class="bi bi-instagram"></i></a></li>  
                                <li class="ms-3"><a class="link-light btn btn-outline-light btn-custom" href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></li>
                                
                            </ul>
                        </div>
                        <div class="col-lg-2 my-4">
                            <p class="mb-0"><a href="#" class="links-footer">Termos de Uso</a></p>
                        </div>
                        <div class="col-lg-3">
                            <p class="mb-0"><a href="#" class="links-footer">Políticas de Privacidade</a></p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </footer>
          
        <!--**************************************************************************************-->
        <!--                               Final do rodapé                                        -->
        <!--**************************************************************************************-->   

    

    
    
    
    
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/barra-de-pesquisa.js"></script>
    </body>
</html>