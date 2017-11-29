<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--Script que verifica a resolução e direciona para o css apropriado-->
        <script src="../javascript/js_VerifResolut.js"></script>
        <!--Folha de Estilo Padrão Desktop-->
        <link rel="stylesheet" type="text/css" href="../css/desktop.css">
        <!--Folha de Estilo Para Mobile, altera resolução e alinhamentos de acordo com a tela do usuario-->
        <link id="css" rel="stylesheet" type="text/css" href="">
        <meta charset="UTF-8">        
        <title>JLP Recursos Humanos</title>
    </head>
    <body>
        <?php
        require '../include/Config.inc.php';
        ?>
        <div class="container">
            <header class="menu">
                <figure class="logo">
                    <a href="../index.php">
                        <img src="../img/jlp_logo2.png" alt="Pagina Inicial" title="JLP Recursos Humanos" width="50px" height="40px"/>
                    </a>
                </figure>

                <nav >
                    <form class="bar_pesquisa" method="post" action="resultados.php">
                        <input type="text" name="pesquisa" />
                        <input class="buttom" type="submit" value="Pesquisar" name="pesquisar" />
                        <p class="editarPerfil"><a href="editarPerfil.php" class="link">Editar Perfil</a></p>
                        <p class="encerrar"><a href="logout.php" class="link">Encerrar Sessão</a></p>
                    </form>
                </nav>
            </header>

            <main class="conteudo_paginas">
                <section>
                    <header class="info_user">
                        <?php
                        $usuario = "Usuário Teste";
                        /* Foto do Individuo armazenada no DB */
                        echo '<br><img class="ft_usuario" src="../img/usuario_teste.png" width="75px" height="75px">';
                        /* nome do individuo armazenado no DB */
                        echo '<h1 class="_usuario">Olá, ' . $usuario . '.</h1>';
                        ?>
                        <form method="get" action="vagasCadastradas.php">
                            <p class="_usuario">
                                Atual formação, Cidade-UF
                                <br>
                                Quantidades de Vagas Candidatadas
                                <input class="buttom" type="submit" value="Ver Vagas" name="Ver Vagas" />
                        </form>
                        </p>
                        <br>
                    </header>
                    <aside class="col_esq1">
                        <br>
                        <?php
                        echo '<p>Script PHP que retorna a empresa com +vagas</p>';
                        ?>
                        <form method="get" action="empresaComMaisVagas.php">
                            <input class="buttom" type="submit" value="Ver Vagas" name="Ver Vagas" />
                        </form>
                    </aside>
                    <aside class="col_dir">
                        <br>
                        <p>Script PHP que retorna as vagas candidatadas e quantidade de concorrentes</p>
                        <form method="get" action="vagasCadastradas.php">
                            <input class="buttom" type="submit" value="Ver Vagas" name="Candidatar" />
                        </form>
                        <br>
                        <br>
                        <p>Script PHP que retorna as vagas candidatadas e quantidade de concorrentes</p>
                        <form method="get" action="vagasCadastradas.php">
                            <input class="buttom" type="submit" value="Ver Vagas" name="Candidatar" />
                        </form>
                        <br>
                        <br>
                        <p>Script PHP que retorna as vagas candidatadas e quantidade de concorrentes</p>
                        <form method="get" action="vagasCadastradas.php">
                            <input class="buttom" type="submit" value="Ver Vagas" name="Candidatar" />
                        </form>
                    </aside>
                    <aside class="col_esq2">
                        <br>
                        <?php
                        echo '<p>Script PHP que retorna as vagas mais concorridas</p>';
                        ?>
                        <form method="get" action="VagasMaisConcorridas.php">
                            <input class="buttom" type="submit" value="Ver Vagas" name="Candidatar" />
                        </form>
                    </aside>
                </section>
            </main>

            <footer>
                <div class="rodape">
                    <p>©2017 Juan Bellai, Lorena Alves, Pedro Elpídio.</p>
                    <p>TODOS OS DIREITOS RESERVADOS</p><br>
                </div>
            </footer>
        </div>

    </body>
</html>
