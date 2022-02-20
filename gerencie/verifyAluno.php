<?php

if(!$_SESSION['id_aluno']){
    header("Location: ../login-cadastro");
    exit();
}

?>
