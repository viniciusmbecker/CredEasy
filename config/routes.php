<?php

    use Vini\Credeasy\Controller\CadastroConcluido;
    use Vini\Credeasy\Controller\Deslogar;
    use Vini\Credeasy\Controller\DetalhesEmprestimo;
    use Vini\Credeasy\Controller\FormularioHome;
    use Vini\Credeasy\Controller\FormularioInsercaoCliente;
    use Vini\Credeasy\Controller\FormularioLogin;
    use Vini\Credeasy\Controller\ListarClientes;
    use Vini\Credeasy\Controller\PaginaClientes;
    use Vini\Credeasy\Controller\Persistencia;
    use Vini\Credeasy\Controller\RealizarLogin;
    use Vini\Credeasy\Controller\SolicitarEmprestimo;

    $rotas = [
        '/home' => FormularioHome::class,
        '/cadastra-cliente' => FormularioInsercaoCliente::class,
        '/cadastro-realizado' => Persistencia::class,
        '/cadastro-concluido' => CadastroConcluido::class,
        '/listar-clientes' => ListarClientes::class,
        '/login' => FormularioLogin::class,
        '/realiza-login' => RealizarLogin::class,
        '/logout' => Deslogar::class,
        '/dashboard' => PaginaClientes::class,
        '/solicita-emprestimo' => SolicitarEmprestimo::class,
        '/detalhes' => DetalhesEmprestimo::class
    ];

    return $rotas;
    
?>