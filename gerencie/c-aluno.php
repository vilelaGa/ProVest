<?php
session_start();
include 'connect.php';

$sqlSelect = "SELECT email_aluno FROM aluno";
$querySelect = $pdo->prepare($sqlSelect);
$execQuerySelect = $querySelect->execute();
$linha = $querySelect->fetchAll(PDO::FETCH_ASSOC);

$nome = filter_var($_POST['nomeUserAluno'], FILTER_SANITIZE_ADD_SLASHES);
$estado = filter_var($_POST['estadoUserAluno'], FILTER_SANITIZE_ADD_SLASHES);
$cidade = filter_var($_POST['cidadeUserAluno'], FILTER_SANITIZE_ADD_SLASHES);
$email = filter_var($_POST['emailUserAluno'], FILTER_SANITIZE_EMAIL);
$senha = filter_var($_POST['passLoginAluno'], FILTER_SANITIZE_ADD_SLASHES);
$senhaCripto = password_hash($senha, PASSWORD_DEFAULT);

foreach ($linha as $res) {
}

function ValidarEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

if (!empty($nome) && !empty($estado) && !empty($cidade) && !empty($email) && !empty($senha)) {
    if (ValidarEmail($email) && $email != $res['email_aluno'] && $estado != "Estado" && $cidade != "Cidade") {
        $sql = "INSERT INTO aluno (senha_aluno, nome_aluno, estado_aluno, cidade_aluno, email_aluno, data_alunos, hora_alunos, anoRegistro_aluno) VALUE('$senhaCripto', '$nome','$estado', '$cidade','$email', NOW(), NOW(), NOW())";
        $query = $pdo->prepare($sql);
        $execQuery = $query->execute();
        header("Location: ../login-cadastro");
    } else {
        header("Location: ../login-cadastro");
        $_SESSION['erroEmailA'] = true;
    }
} else {
    header("Location: ../login-cadastro");
    $_SESSION['erroA'] = true;
}
