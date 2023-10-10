<?php
echo "Saisir le solde du compte bancaire : \n" ;
$solde = rtrim(fgets( STDIN )) ;

if ( $solde >= 0){
	echo "Le solde du compte est de " , $solde , "€\n";
}

else{
	echo "Le compte debiteur." ;
}
?>
