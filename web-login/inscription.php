<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=espace_membres;port=3306','root','',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $sql = "CREATE TABLE IF NOT EXISTS `espace_membres`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `pseudo` VARCHAR(255) NOT NULL ,
    `mdp` VARCHAR(255) NOT NULL ,
    `mail` VARCHAR(255) NOT NULL ,
    `dateInscription` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $pdo->exec($sql);
    echo 'Félicitations, la table a bien été créée !';
    }
    catch (PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <div style="text-align:center">
        <h2>Création d'un nouvel utilisateur</h2>
        <form action="newUserForm.php" method="post">
            <input type="text" name="pseudo" placeholder="pseudo">
            <br>
            <input type="password" name="mdp" placeholder="mdp">
            <br>
            <input type="text" name="mail" placeholder="mail">
            <br>
            <input type="submit" value="Ajouter un utilisateur">
        </div>
    </form>
</body>
</html>