<!DOCTYPE html>
<html lang="pt-br">

<?php
define("NOME_PAGINA", "Login / Cadastro");
include("_head.php");
?>

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
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logoProVest.png" alt="logoProvest" width="50" height="50">
                <span>ProVest</span>
            </a>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">

                <ul class="nav nav-tabs centerNavsTabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="home" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cadastro-tab" data-bs-toggle="tab" data-bs-target="#cadastro" type="button" role="tab" aria-controls="profile" aria-selected="false">Cadastro</button>
                    </li>
                </ul>
                <hr>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="container widthContainer">
                            <div class="row">
                                <div class="col-md-12 cardForm">
                                    <form action="" method="POST">
                                        <input type="email" class="form-control" name="emailUser" placeholder="Email"><br>
                                        <input type="password" class="form-control" name="passLogin" placeholder="Senha"><br>
                                        <button type="submit" class="form-control btnLogin">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab"><br>


                        <div class="cardAP">
                            <p class="pAP">Cadastre-se como</p>

                            <ul class="nav nav-tabs centerNavsTabs sizeNavsTabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="aluno-tab" data-bs-toggle="tab" data-bs-target="#aluno" type="button" role="tab" aria-controls="aluno" aria-selected="true">Aluno</button>
                                </li>
                                <span class="p-2 ou">ou</span>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="professor-tab" data-bs-toggle="tab" data-bs-target="#professor" type="button" role="tab" aria-controls="professor" aria-selected="false">Professor / Curso</button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="aluno" role="tabpanel" aria-labelledby="aluno-tab">

                                <div class="container widthContainer">
                                    <div class="row">
                                        <div class="col-md-12 cardForm">
                                            <form action="" method="POST">
                                                <input type="text" class="form-control" name="nomeUserAluno" placeholder="Nome"><br>
                                                <input type="text" class="form-control" name="estadoUserAluno" placeholder="Estado"><br>
                                                <input type="text" class="form-control" name="cidadeUserAluno" placeholder="Cidade"><br>
                                                <input type="email" class="form-control" name="emailUserAluno" placeholder="Email"><br>
                                                <input type="password" class="form-control" name="passLoginAluno" placeholder="Senha"><br>
                                                <button type="submit" class="form-control btnLogin">Cadastrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="professor" role="tabpanel" aria-labelledby="professor-tab">
                                <div class="container widthContainer">
                                    <div class="row">
                                        <div class="col-md-12 cardForm">
                                            <form action="" method="POST">
                                                <input type="text" class="form-control" name="nomeUserProf" placeholder="Nome"><br>
                                                <input type="text" class="form-control" name="estadoUserProf" placeholder="Estado"><br>
                                                <input type="text" class="form-control" name="cidadeUserProf" placeholder="Cidade"><br>
                                                <input type="email" class="form-control" name="emailUserProf" placeholder="Email"><br>
                                                <input type="password" class="form-control" name="passLoginProf" placeholder="Senha"><br>
                                                <button type="submit" class="form-control btnLogin">Cadastrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <footer class="DEUSTANOCODIGO">
            <p style="color: #000;">EKBALLO</p>
        </footer>
    </div>


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