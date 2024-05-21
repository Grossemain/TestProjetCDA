<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>push des articles</title>
</head>
<body>
    <form method="POST" action="data.php">
        Titre: <br/>
        <input type="text" name="title" required /><br/>
        Titre H1: <br/>
        <input type="text" name="h1Title" required /><br/>
        Contenu : <br/>
        <textarea name="content" required ></textarea><br/>
        Auteur : <br/>
        <input type="text" name="authorArticle" required /><br/>
        <input type="submit" name="submit" value="publier"/>
    </form>
    <ul>
        <?php
        $sql = "SELECT idArticle, title from article";
        $db = new PDO('mysql:host=localhost;dbname=comptes;charset=utf8', 'root', '');
        $request = $db->query($sql);
        while ($row = $request->fetch())
        {
            ?>
            <li><a href="article.php?id=<?=$row["idArticle"] ?>"><?=stripcslashes($row["title"])?></a></li>
            <?php
        }
        ?>
    </ul>
    
</body>
</html>

