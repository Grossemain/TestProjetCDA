<?php

// ****************** connexion à la base de données **********************

function getConnection()
    {
    // try : je tente une connexion
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=comptes;charset=utf8', // infos : sgbd, nom base, adresse (host) + encodage
            'root', // pseudo utilisateur (root en local)
            '', // mot de passe (aucun en local)
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC)
        ); // options PDO : 1) affichage des erreurs / 2) récupération des données simplifiée

        // si ça ne marche pas : je mets fin au code php en affichant l'erreur
    } catch (Exception $erreur) { // je récupère l'erreur en paramètre
        die('Erreur : ' . $erreur->getMessage());  // je l'affiche et je mets fin au script
    }

    // je retourne la connexion stockée dans une variable
    return $db;
    }

    // ******************************************* UTILISATEURS (INSCRIPTION ET CONNEXION) ****************************************************

// ***************** vérifier la présence de champs vides ************************

function checkEmptyFields()
{
    foreach ($_POST as $field) {
        if (empty($field)) {
            return true;
        }
    }
    return false;
}


// ***************** vérifier la longueur des champs ************************

function checkInputsLenght()
{

    if (strlen($_POST['prenom']) > 25 || strlen($_POST['prenom']) < 3) {
        return false;
    }

    if (strlen($_POST['nom']) > 25 || strlen($_POST['nom']) < 3) {
        return false;
    }

    if (strlen($_POST['email']) > 50 || strlen($_POST['email']) < 5) {
        return false;
    }

    if (strlen($_POST['adresse']) > 40 || strlen($_POST['adresse']) < 5) {
        return false;
    }

    if (strlen($_POST['code_postal']) !== 5) {
        return false;
    }

    if (strlen($_POST['ville']) > 25 || strlen($_POST['ville']) < 3) {
        return false;
    }

    return true;
}


// ***************** vérifier que le mot de passe réunit tous les critères demandés ************************

function checkPassword($password)
{
    // minimum 8 caractères et maximum 15, minimum 1 lettre, 1 chiffre et 1 caractère spécial
    $regex = "^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@$!%*?/&])(?=\S+$).{8,15}$^";
    return preg_match($regex, $password);
}


// ***************** vérifier que l'e-mail est déjà utilisé ************************

function checkEmail()
{
    $db = getConnection();

    $query = $db->prepare("SELECT * FROM clients WHERE email = ?");
    $query->execute([$_POST['email']]);

    return $query->fetch();
}

// ***************** créer un utilisateur ************************

function createUser()
{
    $db = getConnection();  // on se connecte à la bdd

    if (checkEmptyFields()) {  // vérif si champs vides => message d'erreur si c'est le cas
        echo "<div class=\"container w-50 text-center p-3 mt-2 bg-danger text-white\"> Attention : un ou plusieurs champs vides !</div>";
    } else {

        if (!checkInputsLenght()) {  // vérif si longeur des champs correcte
            echo "<div class=\"container w-50 text-center p-3 mt-2 bg-danger text-white\"> Attention : longueur incorrecte d'un ou plusieurs champs !</div>";
        } else {

            if (checkEmail()) { // vérif si email déjà utilisé
                echo "<div class=\"container w-50 text-center p-3 mt-2 bg-danger text-white\"> Attention : e-mail déjà utilisé !</div>";
            } else {

                if (!checkPassword(strip_tags($_POST['password']))) { // vérif si mdp réunit les critères requis
                    echo "<div class=\"container w-50 text-center p-3 mt-2 bg-danger text-white\"> Attention : sécurité du mot de passe insuffisante !</div>";
                } else {

                    // hâchage du mot de passe => on le stocke dans une variable
                    $hashedPassword = password_hash(strip_tags($_POST['password']), PASSWORD_DEFAULT);

                    // insertion de l'utilisateur en base de données
                    $query = $db->prepare('INSERT INTO clients (nom, prenom, email, mot_de_passe) VALUES(:nom, :prenom, :email, :mot_de_passe)');
                    $query->execute([
                        'nom' =>  strip_tags($_POST['nom']),
                        'prenom' => strip_tags($_POST['prenom']),
                        'email' =>  strip_tags($_POST['email']),
                        'mot_de_passe' => $hashedPassword,
                    ]);

                    // récupération de l'id de l'utilisateur créé
                    $id = $db->lastInsertId();

                    // insertion de son adresse dans la table adresses
                    createAddress($id);

                    // on renvoie un message de succès 
                    echo '<script>alert(\'Le compte a bien été créé !\')</script>';
                }
            }
        }
    }
}


// ******************** créer une nouvelle adresse ****************

function createAddress($user_id)
{
    $db = getConnection();

    $query = $db->prepare('INSERT INTO adresses (id_client, adresse, code_postal, ville) VALUES(:id_client, :adresse, :code_postal, :ville)');
    $query->execute([
        'id_client' => $user_id,
        'adresse' => strip_tags($_POST['adresse']),
        'code_postal' =>  strip_tags($_POST['code_postal']),
        'ville' =>  strip_tags($_POST['ville']),
    ]);
}

// ***************** se connecter  ************************

function logIn()
{
    // connexion à la base de données
    $db = getConnection();

    // on nettoie l'email saisi avec strip tags, et on le stocke dans la variable $userEmail
    // pour le manipuler plus facilement
    $userEmail = strip_tags($_POST['email']);

    // on fait une requête SQL pour vérifier si le client existe, grâce à son email
    $user = checkEmail();

    // si la requête n'a rien récupéré => l'utilisateur n'existe pas
    if (!$user) {
        // on renvoie un message d'erreur en JS via la fonction alert() (volontairement imprécis pour ne pas aider les hackers)
        echo '<script>alert(\'E-mail ou mot de passe incorrect !\')</script>';
        // sinon => l'utilisateur existe
    } else {
        // on vérifie que son mot de passe saisi (en clair) correspond à son mot de passe en base de données (hashé)
        // pour cela, on utilise la fonction password_verify, qui compare un mdp en clair (1er paramètre) et un mdp hashé (2è p.)
        // elle renvoie true si les deux correspondent (le mpd hashé contient des informations qui permettent de faire ça)
        $isPasswordCorrect = password_verify($_POST['password'], $user['mot_de_passe']);

        // si les deux correspondent => mot de passe ok => on stocke les infos de l'utilisateur dans la session
        // on stocke aussi son adresse g^râce à la fonction setSessionAdress()
        // et on renvoie un message de succès
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['email'] = $userEmail;
            setSessionAddresses();
            header('Location: ./index.php');
            // sinon, on renvoie un message d'erreur (volontairement imprécis pour ne pas aider les hackers)
        } else {

            echo '<script>alert(\'E-mail ou mot de passe incorrect !\')</script>';
        }
    }
}


// ***************** se déconnecter  ************************

function logOut()
{
    $_SESSION = array();
    echo '<script>alert(\'Vous avez bien été déconnecté !\')</script>';
}

// ************************ récupérer le mot de passe en bdd*****************************

function  getUserPassword()
{
    $db = getConnection();
    $query = $db->prepare('SELECT mot_de_passe FROM clients WHERE id = ?');
    $query->execute(array($_SESSION['id']));
    $infos = $query->fetch();
    return $infos['mot_de_passe'];
}


