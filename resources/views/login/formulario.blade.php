<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilo-login.css') }}">

        <title>Login</title>
    </head> 
    <body class="bg-dark">
        
        <section>
            <div class="row g-0">
                <div class="col-lg-7 d-flex align-items-center justify-content-center">
                    <div class="d-none d-lg-block">
                        <img src="{{ asset('img/logo_cred.png') }}" class="img-fluid" width="600" alt="">
                    </div>
                </div>
                <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
                    <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    </div>
                    <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                        <h1 class="font-weight-bold mb-4">Bem vindo de volta!</h1>
                        <form class="mb-5 requires-validation" novalidate action="{{ route('signin')}}" method="post">
                            @csrf
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control border-0" id="floatingInputCPF" minlength="14" maxlength="14" placeholder="CPF" autocomplete="off" name="cpf" required>
                                <label for="floatingInput">CPF</label>
                                <div class="invalid-feedback">
                                    Por favor, insira seu CPF.
                                </div>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control border-0" id="floatingPassword" placeholder="Senha" name="senha" required>
                                <label for="floatingPassword">Senha</label>
                                <div class="invalid-feedback">
                                    Por favor, insira sua senha.
                                </div>
                            </div>
                            {{-- <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck">
                                <label for="exampleCheck" class="form-check-label">Lembrar-me</label>
                            </div> --}}
                            <button type="submit" class="btn btn-custom w-100">Entrar</button>
                        </form>

                        <!-- <p class="font-weight-bold text-center text-muted">Ou entre com sua conta</p> -->
                        <div class="d-flex justify-content-around mt-5">
                            <a class="btn btn-custom2 flex-grow-1 me-2" href="recuperacao-senha/recuperacao-senha.html" role="button">Esqueci minha senha</a>

                            <a class="btn btn-custom2 flex-grow-1 ms-2" href="{{ route('cliente.formulario') }}" role="button">Ainda não sou cliente</a>
                        </div>
                    </div>

                    <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                        <div class="d-inline-block mb-0">
                            <a class="btn btn-custom3" href="{{ route('home') }}" role="button">Voltar para a home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/mascara.js') }}"></script>
        <script src="{{ asset('js/form-validation.js') }}"></script>
    </body>
</html>