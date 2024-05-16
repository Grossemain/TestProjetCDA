<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=contact;port=3306','root','',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //
    // $sql = "CREATE TABLE IF NOT EXISTS `contact`.`contactform` (
    // `id` INT NOT NULL AUTO_INCREMENT ,
    // `nom` VARCHAR(255) NOT NULL ,
    // `mail` VARCHAR(255) NOT NULL ,
    // `message` VARCHAR(65000) NOT NULL ,
    // `dateMessage` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    // PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    // $pdo->exec($sql);
    // echo 'Félicitations, la table a bien été créée !';
    
    $query = $pdo->prepare('INSERT INTO contactform (nom, mail, message) VALUES(:nom, :mail, :message)');
    $query->execute([
        'nom' =>  strip_tags($_POST['nom']),
        'mail' => strip_tags($_POST['mail']),
        'message' =>  strip_tags($_POST['message']),
    ]);
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
    <title>Message envoyé</title>
</head>
<body>
    <p>Merci</p>
</body>
</html>