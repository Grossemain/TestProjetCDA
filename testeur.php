<?php
include('functions.php');
// function repondre_oui_non ($phrase){
//     while (true){
//         $reponse = readline($phrase . " - (o)ui/(n)on");
//         if ($reponse === "o") {
//             return true;
//         }elseif ($reponse === 'n'){
//             return false;
//         }
//     }
// }

// $resultat = repondre_oui_non('voulez vous continuer ?');
// var_dump($resultat);


// function demander_creneau($phrase = "entrez un creneau"){
//     echo $phrase . "\n";
//     while (true) {
//         $ouverture = (int)readline('heure douverture:');
//         if ($ouverture >= 0 && $ouverture <= 23){
//             break;
//         }
//     }
//     while (true){
//         $fermeture = (int)readline('heure de fermeture:');
//         if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
//             break;
//         }
//     }
//     return [$ouverture, $fermeture];
// }

// $creneau = demander_creneau();
// $creneau2 = demander_creneau('entrez votre creneau');
// var_dump($creneau,$creneau2);

// function demander_creneaux ($phrase = 'veuillez entrer vos creneaux'){
//     $creneaux = [];
//     $continuer =true;
//     while ($continuer) {
//         $creneaux[] =demander_creneau();
//         $continuer = repondre_oui_non('voulez vous continuer? ');
//     }

//     return $creneaux;

    
// }

// $creneaux = demander_creneaux('Entrez vos creneaux');
// var_dump($creneaux);
$db = getConnection();
$query = $db->prepare('SELECT * FROM article');
$executeIsOk = $query->execute();
$contents = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$content['title']?></title>
</head>
<body>
    <h2>articles</h2>
    <ul>
        <?php foreach ($contents as $content):?>
            <li>
                <?=$content['h1Title']?><br>
                <?=$content['content']?><br>
                <?=$content['authorArticle']?><br>
                <?=$content['dateArticle']?><br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>