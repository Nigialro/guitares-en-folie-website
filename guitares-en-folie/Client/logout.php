<?php
session_start();
//Déconnexion de l'utilisateur
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['connected']);

//Message de redirection
header('Location: log.php');
exit;
?>