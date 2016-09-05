<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cooking data</title>
</head>
<body>
    
</body>
<?php
    $string = file_get_contents("dictionnaire.txt", ".:/var/www/html/PHP/php_cooking_data-master");
    $dico = explode("\n", $string);
    $numberWords = count($dico);
    $count = 0;
    if (strlen($numberWords = 15){
        $count++
        echo $count; 
    }
        
?>
</html>