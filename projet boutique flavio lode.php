<?php

// 1

$articles = ["Chaussettes","T-shirts","Jean","chaussures","chapeau"];

for($i=0;$i<count($articles);$i++) {
    echo $articles[$i]." \n";
}
echo PHP_EOL;

foreach($articles as $article) {
    echo $article." \n";
}

// 2

$stockage = [9,42,25,15,38];
$ventes = [0,0,0,0,0];

for($i=0; $i<count($articles);$i++) {
    echo $articles[$i]." : ".$stockage[$i]." \n";
}

//  3

$demande = readline("Saisir un article par son index: ");
$quantite = readline("Saisir la quantité souhaité: ");


if ($stockage[$demande] >= $quantite) {
    $stockage[$demande] -= $quantite;
    $ventes[$demande] += $quantite;
    echo "Votre commande de $quantite exemplaires de ".$articles[$demande]."est accomplit. \n";
} else {
    echo "Le stock est insuffisant ! \n";
}

// 4

// abréviation réapprovisionnement -> rpvt
$rpvt = readline("Saisir l'index de l'article à réaprovisionner: ");
$quantite_ajoutee = readline("Saisir la quantité a ajouté: ");

$stockage[$rpvt] += $quantite_ajoutee;
echo $articles[$rpvt]." : ".$stockage[$rpvt]." \n";

// 5

foreach($articles as $index => $article) {
    if ($article <= 0) {
        echo $article." : rupture de stock \n";
    } else {
        echo $article." : ".$stockage[$index]." \n";
    }
}

// 6
echo "Nombre de ventes : \n";
foreach($articles as $index => $article) {
    echo $article." : ".$ventes[$index]." \n";
}

// 7

$demande_sup = readline("Saisir l'index à supprimer: ");
unset($articles[$demande_sup]);
unset($stockage[$demande_sup]);
unset($ventes[$demande_sup]);

for($i=0; $i<count($articles);$i++) {
    echo $article[$i]." : ".$stockage[$i]." \n";
}