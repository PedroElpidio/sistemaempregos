<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--Script que verifica a resolução e direciona para o css apropriado-->
        <script src="javascript/js_VerifResolut.js"></script>
        <!--Folha de Estilo Padrão Desktop-->
        <link rel="stylesheet" type="text/css" href="css/desktop.css">
        <!--Folha de Estilo Para Mobile, altera resolução e alinhamentos de acordo com a tela do usuario-->
        <link id="css" rel="stylesheet" type="text/css" href="">
        <meta charset="UTF-8">        
        <title>JLP Recursos Humanos</title>
    </head>
    <body>
        <?php
        require './include/Config.inc.php';
        ?>
        <div class="container">
            <header class="menu">
                <figure class="logo">
                    <a href="index.php">
                        <img src="img/jlp_logo2.png" alt="Pagina Inicial" title="JLP Recursos Humanos" width="50px" height="40px"/>
                    </a>
                </figure>

                <nav class="bar_login">
                    <form method="post" action="paginas/perfil.php">
                        Email: <input type="text" name="email" autocomplete="off" required />
                        Senha: <input type="password" name="senha" required />
                        <input class="buttom" type="submit" value="Entrar" name="Login" />
                        <p class="redefinirSenha"><a href="paginas/recuperarSenha.php" class="link">Esqueceu sua senha?</a></p>
                    </form>

                </nav>
            </header>

            <main class="conteudo_home">
                <section>
                    <div class="topVagas">
                        <h1 class="h1_buttom">Vagas em Destaque</h1>
                        <br>
                        <p>
                            Script php que retorna as vagas mais concorridas<br>
                            Nome da Empresa<br>
                            Area da vaga<br>
                            Faixa Salarial<br>
                        </p>
                        <form method="post" action="paginas/topVagas.php" >
                            <input class="buttom" type="submit" value="Ver Mais" name="VerVagas" />
                        </form>
                        <form method="post" action="linkdavaga.php" >
                            <input class="buttom" type="submit" value="Candidate-se" name="Candidate-se" />
                        </form> 
                    </div>

                    <div class="topEmpresas">
                        <h1 class="h1_buttom">Empresas em Destaque</h1>
                        <br>
                        <p>
                            Script php que retorna as vagas mais concorridas<br>
                            Nome da Empresa<br>
                            Area da Empresa<br>
                            Quantidade de vagas<br>
                        </p>
                        <form method="post" action="paginas/topEmpresas.php">
                            <input class="buttom" type="submit" value="Ver Mais" name="VerEmpresas" href="paginas/topEmpresas.php"/>
                        </form>
                        <form method="post" action="paginas/vagasEmpresa.php">
                            <input class="buttom" type="submit" value="Ver Vagas" name="VerVagasEmpresa" />
                        </form>
                    </div>
                </section>

                <section>
                    <div class="empresa">
                        <h1 class="h1_buttom">Cadastre sua Empresa</h1>
                    </div>

                    <div class="candidato">
                        <h1 class="h1_buttom">Cadastre seu Currículo</h1>
                    </div>

                    <div class="contratados">
                        <h1 class="h1_buttom">Seja você o próximo contratado</h1>
                        <br>
                        <p name="Contradados">
                            Script PHP que retorna os contradados para a vaga<br>
                        </p>
                    </div>
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
