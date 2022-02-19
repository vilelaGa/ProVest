<?php

session_start();
include 'connect.php';

$emailProfessor = filter_var($_POST['emailUser'], FILTER_SANITIZE_EMAIL);
$senhaProfessor = filter_var($_POST['passLogin'], FILTER_SANITIZE_ADD_SLASHES);
$senhaCripto = password_hash($senhaProfessor, PASSWORD_DEFAULT);

$sql = "SELECT id_professor, senha_professor FROM professor WHERE email_professor = :email";
$query = $pdo->prepare($sql);
$query->bindValue(":email", $emailProfessor, PDO::PARAM_STR);
$query->execute();
$dados = $query->fetch(PDO::FETCH_ASSOC,PDO::FETCH_OBJ);

if (password_verify($senhaProfessor, $dados['senha_professor'])) {
    $_SESSION['id_professor'] = $dados['id_professor'];
    header("Location: ../dashProf.php");
} else {
    $_SESSION['user_invalido'] = true;
}

?>
