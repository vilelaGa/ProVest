<!DOCTYPE html>
<html lang="pt-br">

<?php
define("NOME_PAGINA", "Ver Mais");
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
    <style>
        .navbar {
            background-color: #000 !important;
        }
    </style>
    <?php include('_nav.php'); ?>

    <div class="container cardContainerPesquisa">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control mt-4" aria-label="Default select example" type="search" placeholder="Faça sua pesquisa">
                            <a class="search-btnNav" href="#">
                                <i style="color: #fff;" class="bi bi-search"></i>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select mt-4" aria-label="Default select example">
                                <option selected>Sugestões de pesquisa</option>
                                <option value="1">Pre-Enem</option>
                                <option value="2">Pre-Militar</option>
                                <option value="3">Concurso Publico</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container mt-3">
        <div class="row" style="margin-top: 28px;">
            <div class="col-md-6 p-4 text-center">
                <h2>AlfaCon <br><span class="spanCategoriaCurso">Militar</span> <span class="spanCategoriaCurso">Concurso Publico</span> <span class="spanView"><i style="color: #f5e200;" class="bi bi-star-fill"></i>5</span></h2>
                <img class="mt-3" style="object-fit: cover; border-radius: 16px;" width="400px" height="250px" src="https://assets.alfaconcursos.com.br/assets/layout/alfacon/gptw/img_cta-5b4edbc8fc296192ea77c971cd46275de4f9de8810499026cb10a6489244c378.jpg" alt="...">
            </div>
            <div class="col-md-6 p-4">
                <center class="mt-3">
                    <a href="#" class="btnEntrarContato text-center">Contato pelo chat</a>
                    <a href="#" class="btnOutrosContatos text-center">Outras formas de contato</a>
                </center>
                <p style="margin-top: 58px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis pellentesque ligula, quis molestie arcu mollis a. Duis tincidunt diam id dictum iaculis. Suspendisse potenti. Sed sit amet metus ac augue viverra dapibus id ac nisl. Maecenas semper nisl a dolor laoreet, id consectetur risus eleifend. Morbi posuere, nunc at scelerisque auctor, arcu ligula faucibus elit, a pellentesque mauris massa a augue. Nullam sit amet dolor non eros commodo rutrum. Suspendisse potenti. Aenean blandit cursus orci, ac ultrices felis vulputate ornare. Aliquam erat volutpat. In quis dignissim nunc. Nam tincidunt sed magna non blandit. Vivamus vehicula metus diam, et accumsan felis tincidunt vitae.</p>
            </div>
        </div>
        <hr>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 p-4">
                <h4>Infomações</h4>
                <div class="campoInfomacaoAdd">
                    <div class="mt-2">
                        <p><i class="bi bi-person-video3"></i> - <span>Presencial / Hibrido</span></p>
                        <p><i class="bi bi-geo-alt-fill"></i> - <span>Rio de Janeiro / Barra Mansa</span></p>
                        <p><i class="bi bi-geo-fill"></i> - <span>Rua Anísio Gomes da Silva, 545 - Centro - Barra Mansa.</span></p>
                        <p><i class="bi bi-calendar3"></i> - <span>5 meses no ProVest</span></p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 p-4">
                <h4>Contato</h4>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="site-tab" data-bs-toggle="tab" data-bs-target="#site" type="button" role="tab" aria-controls="site" aria-selected="true">Site</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="telefone-tab" data-bs-toggle="tab" data-bs-target="#telefone" type="button" role="tab" aria-controls="telefone" aria-selected="true">Telefone</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="celular-tab" data-bs-toggle="tab" data-bs-target="#celular" type="button" role="tab" aria-controls="celular" aria-selected="false">Celular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab" aria-controls="email" aria-selected="false">Email</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent" style="margin-top: 24px;
    align-items: center;">
                    <div class="tab-pane fade show active" id="site" role="tabpanel" aria-labelledby="site-tab">
                    <a class="btnSiteVerMais" href="#">Visite nosso site</a>
                    </div>
                    <div class="tab-pane fade show" id="telefone" role="tabpanel" aria-labelledby="telefone-tab">
                        <a class="btnTelefVerMais" href="#"><i class="bi bi-telephone-fill"></i> +55 24 3322-5111</a>
                    </div>
                    <div class="tab-pane fade" id="celular" role="tabpanel" aria-labelledby="celular-tab">
                    <a class="btnWhatsVerMais" href="#"><i class="bi bi-whatsapp"></i> +55 24 99814-0723</a>
                    </div>
                    <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
                    <a class="btnEmailVerMais" href="#"><i class="bi bi-google"></i> garielvilela003@gmail.com</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('_footer.php'); ?>



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