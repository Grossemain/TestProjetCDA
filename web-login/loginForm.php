<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=espace_membres;port=3306',
        'root',
        '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

    $pseudo = $_POST['pseudo'];

    // Récupération de l'utilisateur et de son pass hashé

    $req = $pdo->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo
    ));

    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base

    $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

    if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe !';
    } else {
        if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        header("location:admin.php");
    } else {
        header("location:login.php");
    }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}