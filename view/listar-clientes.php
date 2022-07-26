<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <title>Document</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark mb-2">
            <a href="/home" class="navbar-brand">Home</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/logout" class="nav-link">Sair</a>
                </li>
            </ul>
        </nav>
        <div class="container text-center">
        <h1>Listagem de Clientes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>NOME</th>
                    <th>RENDA</th>
                    <th>ENDEREÇO</th>
                    <th>PROFISSÃO</th>
                    <th>Nº TELEFONE</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                    <th>USUÁRIO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente->getCpf(); ?></td>
                        <td><?php echo $cliente->getNome(); ?></td>
                        <td><?php echo number_format($cliente->getRenda(), 2, ',', '.'); ?></td>
                        <td><?php echo $cliente->getEndereco(); ?></td>
                        <td><?php echo $cliente->getProfissao(); ?></td>
                        <td><?php echo $cliente->getNumeroDeTelefone(); ?></td>
                        <td><?php echo $cliente->getEmail(); ?></td>
                        <td><?php echo $cliente->getSenha(); ?></td>
                        <td><?php echo $cliente->getTipoDeUsuario(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </body>
</html>



    
