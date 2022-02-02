<?php
session_start();
include 'connect.php';

$sqlSelect = "SELECT email_professor FROM professor";
$querySelect = $pdo->prepare($sqlSelect);
$execQuerySelect = $querySelect->execute();

$linha = $querySelect->fetchAll(PDO::FETCH_ASSOC);

$nome = $_POST['nomeUserProf'];
$estado = $_POST['estadoUserProf'];
$cidade = $_POST['cidadeUserProf'];
$email = $_POST['emailUserProf'];
$senha = $_POST['passLoginProf'];
$senhaCripto = md5($senha . "YESHUAEKBALLOELOI");

function ValidarEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

if (!empty($nome) && !empty($estado) && !empty($cidade) && !empty($email) && !empty($senha)) {
    if (ValidarEmail($email) && $estado != "EstadoP" && $cidade != "Cidade") {
        $sql = "INSERT INTO professor (senha_professor, nome_professor, estado_professor, cidade_professor, email_professor, data_professor, hora_professor) VALUE('$senhaCripto', '$nome','$estado', '$cidade','$email', NOW(), NOW())";
        $query = $pdo->prepare($sql);
        $execQuery = $query->execute();
        header("Location: ../login-cadastro");
    } else {
        header("Location: ../login-cadastro");
        $_SESSION['erroEmailP'] = true;
    }
} else {
    header("Location: ../login-cadastro");
    $_SESSION['erroP'] = true;
}
