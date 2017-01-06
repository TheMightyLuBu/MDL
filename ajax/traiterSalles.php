<?php
    require_once '../data/pdomdl.php';
    $pdo = PdoMdl::getPdo();
    $liste = $pdo->getSalles();
    foreach ($liste as $s) {
        echo '<li id="'.$s->id.'" text-align="center"><a class="ui-btn ui-btn-icon-right ui-icon-carat-r">'.$s->room_name.'</a></li>';
    }
?>