<?php

session_start();
include 'connect.php';

$emailAluno = filter_var($_POST['emailUser'], FILTER_SANITIZE_EMAIL);
$senhaAluno = filter_var($_POST['passLogin'], FILTER_SANITIZE_ADD_SLASHES);
$senhaCripto = password_hash($senhaAluno, PASSWORD_DEFAULT);

$sql = "SELECT id_aluno, senha_aluno FROM aluno WHERE email_aluno = :email";
$query = $pdo->prepare($sql);
$query->bindValue(":email", $emailAluno, PDO::PARAM_STR);
$query->execute();
$dados = $query->fetch(PDO::FETCH_ASSOC,PDO::FETCH_OBJ);

if (password_verify($senhaAluno, $dados['senha_aluno'])) {
    $_SESSION['id_aluno'] = $dados['id_aluno'];
    header("Location: ../dashAlu.php");
} else {
    $_SESSION['user_invalido'] = true;
}

?>
