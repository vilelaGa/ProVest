<?php
session_start();
include 'connect.php';

$sqlSelect = "SELECT email_aluno FROM alunos";
$querySelect = $pdo->prepare($sqlSelect);
$execQuerySelect = $querySelect->execute();
$linha = $querySelect->fetchAll(PDO::FETCH_ASSOC);

$nome = $_POST['nomeUserAluno'];
$estado = $_POST['estadoUserAluno'];
$cidade = $_POST['cidadeUserAluno'];
$email = $_POST['emailUserAluno'];
$senha = $_POST['passLoginAluno'];
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
        $sql = "INSERT INTO alunos (senha_aluno, nome_aluno, estado_aluno, cidade_aluno, email_aluno, data_alunos, hora_alunos) VALUE('$senhaCripto', '$nome','$estado', '$cidade','$email', NOW(), NOW())";
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
