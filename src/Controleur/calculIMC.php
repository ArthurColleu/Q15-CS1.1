<?php
$Vue->setMenu(new \App\Vue\Vue_Menu_IMC());
if (isset($_REQUEST['action'] ) && $_REQUEST['action'] == 'IMC') {
    $taille = $_POST['taille'];
    $poids = $_POST['poids'];
    if ($taille > 0 && $poids > 0) {
        $imc = $poids / $taille**2;
        $imc = round($imc, 1);
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage($imc));
    } else {
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous n'avez pas entrez les bonnes valeurs pour votre taille ou votre poids"));
    }
} else {
    $Vue->addToCorps(new App\Vue\Vue_CalculIMC());
}
