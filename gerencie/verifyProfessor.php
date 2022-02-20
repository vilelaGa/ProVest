<?php

if(!$_SESSION['id_professor']){
    header("Location: ../login-professor");
    exit();
}

?>
