<?php

if (isset($_POST["title"], $_POST["content"]) && !empty($_POST["title"]) && !empty( $_POST["content"]))
{
    $title = htmlspecialchars(addcslashes($_POST["title"]));
    $content = htmlspecialchars(addcslashes($_POST["content"]));
    $h1Title = htmlspecialchars(addcslashes($_POST["h1Title"]));
    $authorArticle  = htmlspecialchars(addcslashes($_POST["authorArticle"]));
    $dateArticle = date("Y-m-d");

    $db = new PDO('mysql:host=localhost;dbname=comptes;charset=utf8', 'root', '');
    $sql = "INSERT INTO article (title, content, dateArticle, h1Title, authorArticle) VALUES (:title, :content, :dateArticle; :h1Title, :authorArticle)";
    $request = $db->prepare($sql);
    $request ->bindParam(':title', $title);
    $request ->bindParam(':content', $content);
    $request ->bindParam(':dateArticle', $dateArticle);
    $request ->bindParam(':h1Title', $h1Title);
    $request ->bindParam(':authorArticle', $authorArticle);

    $request->execute();

    header("location:push_article.php");

}