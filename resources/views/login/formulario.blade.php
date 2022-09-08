<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilo-login.css') }}">

        <title>Login</title>
    </head> 
    <body class="bg-dark">
        
        <section>
            <div class="row g-0">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="d-none d-lg-block">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo_cred.png') }}" class="img-fluid" width="600" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-end min-vh-100">
                    <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    </div>
                    <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                        <h1 class="font-weight-bold mb-4">Bem vind@ de volta!</h1>
                        <form class="mb-5 requires-validation" novalidate action="{{ route('signin')}}" method="post">
                            @csrf
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control border-2" id="floatingInputCPF" minlength="14" maxlength="14" placeholder="CPF" autocomplete="off" name="cpf" value="{{ old('cpf') }}" required>
                                <label for="floatingInput" class="form-label">CPF</label>
                                <div class="invalid-feedback">
                                    Por favor, insira seu CPF.
                                </div>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control border-2" id="floatingPassword" placeholder="Senha" name="senha" required>
                                <label for="floatingPassword" class="form-label">Senha</label>
                                <div class="invalid-feedback">
                                    Por favor, insira sua senha.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-custom w-100">Entrar</button>
                        </form>

                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>
                        </svg>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h5 class="alert-heading">Ops, algo deu errado!</h5>
                                <hr>
                                @foreach ($errors->all() as $error)
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>    
                                    {{ $error }} 
                                @endforeach
                            </div>
                        @endif
                        <div class="d-flex align-items-center justify-content-center">
                        <p class="d-inline-block mb-0">Não possui uma conta?
                            <a href="{{ route('cliente.formulario') }}" class="text-light font-weight-bold text-decoration-none">Cadastre-se agora mesmo</a>
                        </p>
                        </div>
                        
                    </div>

                    <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
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