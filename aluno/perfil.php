<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
include '../gerencie/verifyAluno.php';
define("NOME_PAGINA", "Perfil Aluno");
include "_head.php";
$id_aluno = $_SESSION['id_aluno'];
?>

<?php

include "../gerencie/connect.php";

$sql = "SELECT * FROM aluno WHERE id_aluno = $id_aluno";
$query = $pdo->prepare($sql);
$query->execute();

$dados = $query->fetch(PDO::FETCH_ASSOC, PDO::FETCH_OBJ);

?>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="../aluno/dash-aluno" title="Dash">
                        <img src="../assets/img/logoProVest.png" alt="">
                    </a>
                </span>

                <div class="text logo-text">
                    <span class="name">ProVest - Aluno</span>
                    <span class="profession"><?= substr($dados['nome_aluno'], 0, 8); ?></span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../aluno/perfil-aluno" title="Perfil">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../gerencie/logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Perfil</div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 fundoWall"></div>
                <div class="row">

                    <div class="col-md-4">
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="fundoFoto-user text-center">

                                <input style="display: none;" type="file" name="upFoto" id="upFoto">
                                <label for="upFoto"><img src="../assets/img/daniel.jpeg" class="img-fluid img-user" alt="..">
                                    <div class="back">
                                        <i class="bi bi-plus-circle-fill iconMais"></i>
                                    </div>
                                </label>

                                <p style="margin-bottom: 0px;" class="mt-3"><strong><?= ucfirst(substr($dados['nome_aluno'], 0, 8)); ?></strong></p>
                                <span class="userEsco mb-4">Aluno do Ensino Medio</span><br>
                                <button type="submit" class="btn btn-att mt-4">Atualizar</button>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-8">
                        <form action="" method="POST">

                            <div class="formPerfil">

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dados Pessoais</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Localização</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contato</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nome</label>
                                                    <input type="text" class="form-control in" name="" placeholder=""><br>
                                                    <label>Escolariade</label>
                                                    <select class="form-select in" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option>Fundamental</option>
                                                        <option>Médio</option>
                                                        <option>Superior</option>
                                                    </select><br>
                                                    <label>Sexo</label>
                                                    <select class="form-select in" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option>Masculino</option>
                                                        <option>Feminino</option>
                                                    </select><br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Idade</label>
                                                    <input type="number" class="form-control in" name="" placeholder=""><br>
                                                    <label>Nacionalidade</label>
                                                    <select class="form-select in" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option></option>
                                                        <option></option>
                                                    </select><br>

                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-att mt-4">Atualizar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Estado</label>
                                                    <select class="form-select in" aria-label="Default select example" name="estadoUserAluno" id="Estado"></select><br>
                                                    <label>Cidade</label>
                                                    <select class="form-select in" aria-label="Default select example" name="cidadeUserAluno" id="Cidade">
                                                        <option>Cidade</option>
                                                    </select><br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>País de Locação</label>
                                                    <select class="form-select in" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option></option>
                                                        <option></option>
                                                    </select><br>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-att btLoca">Atualizar</button>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Telefone</label>
                                                    <input type="tel" id="telefone" class="form-control in" name="" placeholder="">
                                                    <br>
                                                    <label>Celular</label>
                                                    <input type="phone" id="celular" class="form-control in" name="" placeholder="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control in" name="" placeholder="">
                                                    <br>
                                                    <label>Sociais / links</label>
                                                    <input type="text" class="form-control in" name="" placeholder="">
                                                    <br>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-att btLoca">Atualizar</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="../assets/jquery/selectA.js"></script>
    <script src="../assets/jquery/selectP.js"></script>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/jquery/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function() {
            //Telefone
            $("#telefone").mask("(99) 9999-9999")
            //Celular
            $("#celular").mask("(99) 99999-9999")
        });
    </script>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>

</html>