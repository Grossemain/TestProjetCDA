<php 
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=espace_membres;port=3307',
        'root',
        '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $mail = $_POST['mail'];

        // Hachage du mot de passe
        $mdp_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        // Insertion
        $req = $pdo->prepare('INSERT INTO utilisateurs(pseudo, mdp, mail, dateInscription)
    VALUES(:pseudo, :mdp, :mail, CURDATE())');
    $req->execute(array(
        'pseudo' => $pseudo,
        'mdp' => $mdp_hache,
        'mail' => $mail
));
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

header('location:admin.php');