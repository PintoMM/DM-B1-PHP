<?php

echo "Saisir le numero du mois :";
$mois = strtolower(rtrim(fgets(STDIN)));
echo "Saisir l'annee :";
$annee = strtolower(rtrim(fgets(STDIN)));

switch ($annee) {
    case "1":
        $jour = "31";
        break;
    case "2":
        $jour = "30";
        break; 
    case "3":
        $jour = "31";
        break; 
    case "4":
        $jour = "30";
        break;
    case "5":
        $jour = "31";
        break; 
    case "6":
        $jour = "30";
        break; 
    case "7":
        $jour = "31";
        break;
    case "8":
        $jour = "30";
        break; 
    case "9":
        $jour = "31";
        break; 
    case "10":
        $jour = "30";
        break; 
    case "11":
        $jour = "31";
        break; 
    case "12":
        $jour = "30";
        break;

    default :
        $jour = "inconnu";
        break;

}

echo "il y a " , $jour , " jours en " , $annee ;
?>