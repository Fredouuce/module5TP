<?php 

$math = 15;
$francais = 12;
$histoiregeo = 9;
$note = $math + $francais + $histoiregeo;
$moyenne = $note / 3;

echo 'La moyenne est de '.$moyenne.' /20'
?>

<?php 

$ht = 50;
$tva = 20;

$tva_ttc = $tva / 100; //Calcul montant tva 0.2

$tva_value = $tva_ttc * $ht; //on multiplie pour avoir la valeur de la tva 10€ ici 
 
$prix = $tva_value + $ht;// ajouts de la tva au prix HT

echo 'le prix TTC du produit est de '.$prix.' €';

?>


<?php 
//EXO 3

$test = '42'; 


var_dump($test);

?>

<?php
//EXO 4

$sex = 'femme';

if ( $sex == "femme"){
    echo "Salut tu es une femme";
}else{
    echo "tu n'est pas une femme";
}
?>


<?php 
//EXO 5

$budget = 1553.89; 
$achats = 1554.76;

if ($budget >= $achats){
    echo "Vous avez assez d'argent";
}

elseif($budget < $achats){

 echo "Vous n'avez pas assez d'argent";
}


?>



<?php
//EXO 6
$age  = 18;

if ( $age < 18){
    echo "Vous êtes mineur";
}elseif($age >= 18)
{
    echo "Vous êtes majeur";
}

?>


<?php
$heur = 1;

if($heur >= 6 AND $heur <= 12){
    echo "C'est le matin";
}
elseif ($heur > 12 AND  $heur <=17)
{
    echo "c'est l'aprem";
}

else{
    echo "c'est le soir";
}


?>


<?php

    for($i = 0; $i < 11;$i++){

        echo $i.'*5 ='.($i*5)."<br>";
    }


?>

<?php 

// for($a = 0; $a < 21; $a += 2){
//     echo $a;
// }
// if($a == 10){
//     echo "<h1>".$a."</h1>";
// }
$a= 0;

while ($a <= 20){
    $a += 2;

    if($a == 10){
         echo "<h1>".$a."</h1>";
    }else{
        echo $a."<br>";
    }

}
?>


<?php 

$info = array(
    'France' => "Paris",
    'Allemagne' => "Berlin",
    'Italie' => "Rome");

    foreach($info as $pays)

    echo $pays .'<br>'

?>