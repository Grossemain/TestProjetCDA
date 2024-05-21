<?php
include('functions.php');
//affiche le header.php avec include
require 'head.php';

//affiche le menu.php avec include
require 'header.php';
?>
<?php
if(isset($_GET["id"]) && !empty($_GET['id']))
{
    $sql = "SELECT * FROM article WHERE idArticle =" . $_GET["id"];
    $db = new PDO('mysql:host=localhost;dbname=comptes;charset=utf8', 'root', '');
    $request = $db->prepare($sql);
    $request = $db->query($sql);
    $article = $request->fetch();
    if($request -> rowCount() == 0)
    {
        Header('location:push_article.php');
    }
}
else
{
    Header('location:push_article.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$article["title"]?></title>
</head>
<body class="CSS">
        <main>
<!--debut de la section informations-->
<section id="informations">
    <div class="container">
        <div class="row">
            <div class="colonne-1">
    <img src="img/blog.jpg" width="300px">
            </div>
            <div class="colonne-2">
    <h1 class="titre-1"><?= stripcslashes($article["h1Title"])?></h1>
    </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 info-article">
                        <div class="date-publication">
                            <p><?= stripcslashes($article["dateArticle"])?></p>
                            </div>
                        <div class="auteur">
                            <img src="img/PHOTO-profil-LINKEDIN.jpg" alt="Romain Maillet">
                            <p><?= stripcslashes($article["authorArticle"])?></p>
                            <p><a href="https://fr.linkedin.com/in/romainmailletgrossemain">linkedin</a></p>
                        </div>
                    </div>
                    <article class="col-sm article-blog">
                    <p><?= stripcslashes($article["content"])?></p>
                    <a href="push_article.php">Liste des articles</a>
                </article>
                </div>
            </div>
            </main>
  </body>
<?php
require 'footer.php';
?> 
</body>
</html>