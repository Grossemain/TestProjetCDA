<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<section id="contact">
            <div id="formulaire">
                <h2 class="titre-2">Contact</h2>
            <form method="post" action="./insertion.php">
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom">
                <label for="email">votre mail</label>
                <input type="email" id="email" name="mail" placeholder="nom@domaine.com">
                <label for="message">Votre message</label>
                <textarea id="message" name="message" placeholder="Votre message"></textarea> 
                <button id="btnEnvoyerMail">Envoyer</button>
            </form>
            </div>
        </section>
</body>
</html>