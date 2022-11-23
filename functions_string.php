<?php
$a= 5;
$b= 5.5;

function addition( int $a, float $b){
    return $a+ $b;

}
echo addition(5, 5.5);

//Manipulation de base des chaînes de caractères
$name= "Louis Nguyen";

//Explode: création de tableau à chaque espace
$array= explode(" ", $name);
var_dump($array );
//Implode: inverse
$name= implode(" ", $array);
var_dump($name);

//sprintf 
$time= 15;
$name="Louis Nguyen";
$format= "Bonjour %s, il est %d h";
echo sprintf($format, $name, $time);

//str_replace remplace une chaîne de caractère par une autre
$name="Louis Nguyen";
echo str_replace("Louis","Nguyen", $name);

//strlen affiche le nombre de lettre
echo strlen (string: 'abcdef'); 
echo "<br>";

//strtolower Maj to min
echo strtolower (string: 'Louis Le beau Gosse');
echo "<br>";

//strtoupper min to MAJ
echo strtoupper (string: 'louis le beau bosse');
echo "<br>";

//ucfirst uppercase sur la 1ère lettre
echo ucfirst (string: 'louis le beau bosse');
echo "<br>";

//trim enlève les espaces du début et fin
var_dump(trim(string: '  louis le beau bosse  ' ));
echo "<br>";

//ltrim enlève les espaces à gauche 
var_dump(ltrim(string: '  louis le beau bosse  ' ));
echo "<br>";

//ltrim enlève les espaces à droite 
var_dump(rtrim(string: '  louis le beau bosse  ' ));
echo "<br>";

//substr extraire un morceau d'une chaîne de caractère
$rest=substr( "louis le beau bosse", 2  );
echo "<br>";

?>

?>
