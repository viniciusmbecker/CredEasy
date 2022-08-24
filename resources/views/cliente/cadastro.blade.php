<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.scss')

    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/estilo-cadastro.css') }}">

    <title>Cadastro</title>
</head>
<body class="bg-dark">

    <section>
        <div class="row g-0">
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <div class="d-none d-lg-block">
                    <img src="{{ asset('img/logo_cred.png') }}" class="img-fluid" width="600" alt="">
                </div>
            </div>
          
            <div class="col-lg-7 d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                </div>
                <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                    <h1 class="font-weight-bold mb-4 text-center">É muito bom ter você aqui!</h1>

                    <form class="row g-3 mb-5 requires-validation" novalidate action="{{ route('cliente.cadastrar') }}" method="post">
                        @csrf
                        <div class="col-md-12 mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingInputName" placeholder="Nome Completo" minlength="2" maxlength="255" name="nome" required> 
                            <label for="floatingInputName" class="form-label">Nome Completo</label>
                            <div class="invalid-feedback">
                                Por favor, insira seu nome.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingInputCPF" minlength="14" maxlength="14" placeholder="CPF" name="cpf" required>
                            <label for="floatingInputCPF" class="form-label">CPF</label>
                            <div class="invalid-feedback">
                                Por favor, insira seu CPF.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingInputPhone" placeholder="Telefone Celular" minlength="14" maxlength="14" name="fone" required>
                            <label for="floatingInputPhone" class="form-label">Telefone Celular</label>
                            <div class="invalid-feedback">
                                Por favor, insira seu telefone celular.
                            </div>
                        </div>
                       
                        <div class="col-12 mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingInputAddress" placeholder="Endereço" name="endereco" required>
                            <label for="floatingInputAddress" class="form-label">Endereço</label>
                            <div class="invalid-feedback">
                                Por favor, insira seu endereço.
                            </div>
                        </div>
                        <div class="col-md-7 mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingInputOccupation" placeholder="Profissão" name="profissao" required>
                            <label for="floatingInputOccupation" class="form-label">Profissão</label>
                            <div class="invalid-feedback">
                                Por favor, insira sua profissão.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingInputIncome" data-tipo="renda" placeholder="Renda" name="renda" required>
                            <label for="floatingInputIncome" class="form-label">Renda</label>
                            <div class="invalid-feedback">
                                Por favor, insira sua renda.
                            </div>
                        </div>
                        
                        <div class="col-md-7 mb-3 form-floating">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                            <label for="inputEmail" class="form-label">Email</label>  
                            <div class="invalid-feedback">
                                Por favor, insira seu email.
                            </div>
                        </div>

                        <div class="col-md-5 mb-3 form-floating">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha" required>
                            <label for="inputPassword" class="form-label">Senha</label>
                            <div class="invalid-feedback">
                                Por favor, insira sua senha.
                            </div>
                        </div>
                        <!-- <div class="col-md-6 mb-3 form-floating">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Confirme sua senha" required>
                            <label for="inputPassword2" class="form-label">Confirme sua senha</label>
                            <div class="invalid-feedback">
                                Por favor, insira sua senha.
                            </div>
                        </div> -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-custom w-100">Cadastrar</button>
                        </div>
                    </form>
                </div> 
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                <!-- <p class="d-inline-block mb-0">Ainda não possui uma conta?</p>
                <a href="#" class="text-light font-weight-bold text-decoration-none">Crie uma agora</a> -->
                </div>   
            </div> 
        </div>    
    </section>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/mascaras.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" type="module"></script>
    <script src="{{ asset('js/app2.js') }}" type="module"></script>
    <script src="https://github.com/codermarcos/simple-mask-money/releases/download/v3.0.0/simple-mask-money.js"></script>
    <script src="{{ asset('js/form-validation.js') }}"></script>
</body>
</html>