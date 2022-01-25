<!DOCTYPE html>
<html lang="pt-br">

<?php
define("NOME_PAGINA", "Início");
include("_head.php") ?>

<body style="background-color: #f4f4f4">

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

    <section class="bg-rgb">

        <?php include('_nav.php'); ?>

        <div class="text-center">
            <div class="navSlack">
                <ul class="listaNav">
                    <a href="#" class="line">
                        <li>Quem somos </li>
                    </a>
                    <a href="#" class="line">
                        <li>Cursos em destaque</li>
                    </a>
                    <a href="#" class="line">
                        <li>Assine já</li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="bg-video">
            <video autoplay muted loop style="filter: saturate( 0% )!important;">
                <source src="assets/img/pexels-yan-krukov-8197045.mp4" type="video/mp4">
            </video>
            <form action="" method="post">
                <!-- <strong style="background-color: #000;">PRE-ENEM</strong>| -->
                <!-- <h2 class="tituloInput"><i> Encontre o curso ideal!</i></h2> -->
                <div class="search-box">
                    <input class="search-txt" type="search" name="" placeholder="Faça a sua pesquisa">
                    <a class="search-btn" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </div>
            </form>
            <!-- <footer class="DEUSTANOCODIGO">
                <p>EKBALLO</p>
            </footer> -->
        </div>

    </section>

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