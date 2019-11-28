    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="shortcut icon" href="images/favicon (8).ico" type="image/x-icon">
    <link rel="icon" href="images/favicon (8).ico" type="image/x-icon">

    <!--   Materialize   -->
    <?php include("inc_materialize.php"); ?>

    <style>
        .surf {
            position: right;
            /*right: Npx; depende da imagem ela pode estar tocando no seu texto*/
            bottom: 25px;
            height: 60px;
            width: 60px;
            line-height: 2px;
        }
    </style>

    <header>
        <div id="navbar" class="navbar-fixed scrollspy">

            <nav class="blue">
                <div class="nav-wrapper container">
                    <div class="container"> <a href="index.php" class="brand-logo"><img class="surf" src="images/surf.png" /></a></div>
                    <ul class="right hide-on-med-and-down">

                        <li><a class="head-link" href="cadastrar_usuario.php" onclick="functionUsuario()">Cadastrar Usuario</a></li>
                        <li><a class="head-link" href="cadastrar_post.php" onclick="functionpost()">Cadastrar Post</a></li>
                        <li><a class="head-link" href="sobre.php" id="sobre" onclick="functionSobre()">Sobre</a></li>
                        <li><a class="head-link" href="contato.php" id="contato" onclick="functionContato()">Contato</a></li>
                        <li><a class="head-link" href="login.php" id="login" onclick="functionLogin()">Login</a></li>
                    </ul>
                </div>
            </nav>
    </header>

    <!-- Menu Mobile -->
    <ul id="mobile-navbar" class="sidenav">
        <li><a class="head-link" href="sobre.php" id="products">Sobre</a></li>
        <li><a class="head-link" href="contato.php" id="contato">Contato</a></li>
        <li><a class="head-link" href="login.php" id="login" onclick="functionLogin()">Login</a></li>
    </ul>

    <!-- JavaScript no final do body para otimizar o carregamento -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>