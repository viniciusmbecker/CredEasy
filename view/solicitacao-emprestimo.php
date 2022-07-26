<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
        
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <!-- Estilo Customizado -->
        <link rel="stylesheet" type="text/css" href="./assets/css/solicitacao.css">


        <title>Solicitação de Empréstimo</title>
    </head>

    <body>
        
        <section>
            <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <img src="../assets/img/CredEasy2.png" class="img-fluid py-5" alt="">
                    </div>
                </div>
                <div class="row mt-4">    
                    <div class="col-12 d-flex flex-column align-items-center">
                        <div class="justify-content-center align-self-center">
                            <h1 class="font-weight-bold text-center">Solicite um novo empréstimo</h1>
                            <form class="mt-5 needs-validation">
                                <div class="form-floating mb-4 was-validated">
                                    <input type="text" class="form-control border-0" id="floatingInput" data-tipo="renda" placeholder="Valor solicitado" required>
                                    <label for="floatingInput">Valor desejado</label>
                                    <div class="invalid-feedback">
                                        Por favor, insira o valor desejado.
                                    </div>
                                </div>
                                <div class="form-floating mb-4 was-validated">
                                    <input type="text" class="form-control border-0" id="floatingParcelas" minlength="1" maxlength="3" placeholder="Quantidade de parcelas" required>
                                    <label for="floatingParcelas">Quantidade de parcelas</label>
                                    <div class="invalid-feedback">
                                        Por favor, insira a quantidade de parcelas.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-custom w-100 mt-4 mb-2">Submeter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/app3.js" type="module"></script>
        <script src="https://github.com/codermarcos/simple-mask-money/releases/download/v3.0.0/simple-mask-money.js"></script>

    </body>

</html>    