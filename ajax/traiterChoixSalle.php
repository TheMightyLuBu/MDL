<?php
    require_once '../data/pdomdl.php';
    $idSalle = $_REQUEST['idSalle'];
    $pdo = PdoMdl::getPdo();
    $lesReservationsDuJour = $pdo->getLesReservationsDuJour($idSalle);
    echo json_encode($lesReservationsDuJour);
?>