<?php
echo "Saisir l'operateur : \n ";
$operateur = rtrim (fgets( STDIN )) ;
echo "Saisir la premiere valeur : \n" ;
$valeur1 = rtrim (fgets( STDIN )) ;
echo "Saisir la deuxieme valeur : \n" ;
$valeur2 = rtrim (fgets( STDIN )) ;

if ($operateur == "+"){
    $resultat = $valeur1 + $valeur2 ;
    echo "$valeur1 + $valeur2 = $resultat\n" ;
}

if ($operateur == "-"){
    $resultat = $valeur1 - $valeur2 ;
    echo "$valeur1 - $valeur2 = $resultat\n" ;
}

if ($operateur == "*"){
    $resultat = $valeur1 * $valeur2 ;
    echo "$valeur1 * $valeur2 = $resultat\n" ;
}

if ($operateur == "/"){
    $resultat = $valeur1 / $valeur2 ;
    echo "$valeur1 / $valeur2 = $resultat\n" ;
}