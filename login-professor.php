<!DOCTYPE html>
<html lang="pt-br">

<?php
define("NOME_PAGINA", "Login Professor");
include("_head.php"); ?>

<body>
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
            <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- fim do preloader -->

    <nav class="navbar colorNavBarLogin text-center">
        <div class="container">
            <a class="navbar-brand" href="home">
                <img src="./assets/img/logoProVest.png" alt="logoProvest" width="50" height="50">
                <span style="    color: #fff;
    font-size: 1.5rem;">ProVest</span>
            </a>
        </div>
    </nav>

    <div class="container widthContainer">
        <div class="row">
            <h2 class="mt-3 text-center">Professores</h2>
            <hr>
            <div class="col-md-12 cardForm text-center">
                <form action="" method="POST">
                    <input type="email" class="form-control" name="emailUser" placeholder="Email"><br>
                    <input type="password" class="form-control" name="passLogin" placeholder="Senha"><br>
                    <button type="submit" class="form-control btnLogin">Login</button>
                </form>
                <p style="margin-top: 12px;
    font-size: 14px;">Login para <a href="login-cadastro">Alunos</a></p>
            </div>
        </div>
    </div>

    <footer class="DEUSTANOCODIGO">
        <p style="color: #000;">EKBALLO</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery-3.6.0.min.js"></script>
    <script>
        //<![CDATA[
        $(window).on('load', function() {
            $('#preloader .inner').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('body').delay(350).css({
                'overflow': 'visible'
            });
        })
        //]]>
    </script>
</body>

</html>