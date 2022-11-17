<?php 
//Les fonctions natives de php à connaître
//strlen affiche le nombre de lettre
echo strlen (string: 'abcdef'); 
echo "<br>";
//strtolower Maj to min
echo strtolower (string: 'Louis Le Beau Gosse');
echo "<br>";
//strtoupper min to MAJ
echo strtoupper (string: 'louis be beau bosse');
echo "<br>";

//ucfirst uppercase sur la 1ère lettre
echo ucfirst (string: 'louis be beau bosse');
echo "<br>";
//trim enlève les espaces du début et fin
var_dump(trim(string: '  louis be beau bosse  ' ));
echo "<br>";
//ltrim enlève les espaces à gauche 
var_dump(ltrim(string: '  louis be beau bosse  ' ));
echo "<br>";
//ltrim enlève les espaces à droite 
var_dump(rtrim(string: '  louis be beau bosse  ' ));
echo "<br>";


//substr extraire un morceau d'une chaîne de caractère
var_dump(substr(string: 'louis be beau bosse', int: 0, int: 2  ));
echo "<br>";

?>