<?php
    session_start();
    require_once '../data/pdomdl.php';   
    $mdp = $_REQUEST['mdp'];
    $mdp = md5($mdp);
    $login = $_REQUEST['login']; 
    $pdo = PdoMdl::getPdo();
    $connexion = $pdo->getConnexion($login,$mdp);   
    echo json_encode($connexion);
?>