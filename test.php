<?php
for ($i=0; $i<10; $i++) {
echo "Boucle en PHP Numéro : ".$i."<br>";
}
for ($i=5; $i<9; $i++) {
echo $i."<br>";
}
?>

<?php
$i = 5;
while ($i < 9) {
echo $i;
$i++;
}
?>
<br>
<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}
?>
<br>
<?php
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $value) {
    echo $value;
}

/**
 * AFFICHE
 * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
 */
?>
<br>
 <?php
$i = 5;
do {
echo $i;
$i++;
} while ($i<9);
?>
<br>

<?php
// Un tableau (vide) peut être initialisé de la façon suivante
$tableau = array();
// Il peut ensuite être rempli comme suit
$tableau[] = 'valeur1';
$tableau[] = 'valeur2';
$tableau[] = 'valeur3';
// tableau indexé
echo $tableau[0];
$tableau[0] = 'nouvelle valeur 1';
// Si le contenu attendu du tableau est connu au moment de l'initialisation vous pouvez le construire directement par
$tableau = array('valeur1', 'valeur2', 'valeur3');
// tableau associatif
$tableau = array();
$tableau['nom'] = 'dupont';
$tableau['prenom'] = 'jean';
// ou ...
$tableau = array('nom' => 'dupont', 'prenom' => 'jean');
?>
