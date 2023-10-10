<?php
echo "Saisir la valeur :\n" ;
$valeur = rtrim (fgets(STDIN)) ;

if ($valeur % 2 == 0){
    echo "La valeur est paire ";
}

else {
    echo "La valeur est impaire ";
}

?>




