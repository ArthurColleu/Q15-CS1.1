<?php
$Vue->setMenu(new \App\Vue\Vue_Menu_IMC());
$Vue->addToCorps(new \App\Vue\Vue_CalculIMC());

if (isset($_REQUEST['action'] ) && $_REQUEST['action'] == 'IMC') {
    $poids = $_POST['poids'];
    $taille = $_POST['taille'];
    if ($taille > 0 && $poids > 0) {
        $imc = ($poids/($taille*$taille));
        $imc = round($imc, 1);
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage($imc));
    } else {
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous n'avez pas entrez les bonnes valeurs pour votre taille ou votre poids"));
    }
}
