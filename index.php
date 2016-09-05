<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cooking data</title>
</head>

<body>

</body>
<?php
    $string = file_get_contents("dictionnaire.txt", ".:/var/www/html/PHP/php_cooking_data");
    $dico = explode("\n", $string);
    $numberWords = count($dico);
    $compteur = 0;
    $compteur_w = 0;
    $compteur_q = 0;
    for ($i = 0; $i <= $numberWords; $i++){
        if (preg_match("#w#",$dico[$i])){
            $compteur_w++;
        }
        if (preg_match("#q$#",$dico[$i])){
            $compteur_q++;
        }
        if (strlen($dico[$i]) == 15){
            $compteur++;
        }
 }
    echo "Il y a $compteur mots.</br>";
    echo "Il y a $compteur_w mots avec un \"W\".</br>";
    echo "Il y a $compteur_q mots qui se termine par un \"Q\".</br>";
    
$string = file_get_contents("films.json", ".:/var/www/html/PHP/php_cooking_data");
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"];

echo '<ol>';
    for ($i = 1; $i <= 10; $i++){
        echo '<li>'.$top[$i]['im:name']['label'].'</li>';
    }
print_r ($top);
echo '</ol>';
    
$key = array_search('Gravity', $top);
    
    
?>

</html>