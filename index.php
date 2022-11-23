<?php 
//Les fonctions natives de php à connaître
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