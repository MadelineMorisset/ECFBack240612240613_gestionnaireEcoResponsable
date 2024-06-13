<?php
session_start();

include('./dataConnexion.php');

if (!isset($_POST['pseudo']) || empty($_POST['pseudo']) || !isset($_POST['password']) || empty($_POST['password'])) {
    die("<strong>Le login et le mot de passe sont nécessaires afin de se connecter à l'espace personnel.</strong>");
} 

$login = strip_tags($_POST['pseudo']);
$pw = strip_tags($_POST['password']);

$query = $db->prepare('SELECT * FROM utilisateur WHERE login = :pseudo');
$query->execute(["pseudo" => $_POST['pseudo']]);
$users = $query->fetch();      

foreach ($users as $user) {
    $checkPassword = password_verify($pw, $user['password']);
    if ($user && password_verify($pw, $user['password'])) {
        $_SESSION['id_user'] = $user['id_user'];
        header('Location: ../userPage.php');
        exit();
    } else {
        die('Login ou mot de passe incorrect.');
    }
}
?>