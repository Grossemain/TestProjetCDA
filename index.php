<?php
//affiche le header.php avec include
include 'header.php';

//affiche le menu.php avec include
include 'menu.php';
?>
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
    <h1 class="titre-1">Le blog de Romain Maillet</h1>
    <h2 class="titre-2">Toute l'<span>actu web</span></h2>
                </div>
            </section>
            <section id="liste-articles">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <article class="col-sm " >
                                <img src="img/apprendre-code.jpg" class="img-fluid">
                                    <h2 class="titre-2">Apprendre le HTML5</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam, magni odio saepe nam neque doloremque animi nisi, reprehenderit distinctio ducimus, a id placeat dignissimos cumque maiores natus esse numquam.</p>
                                            <button class="bouton"><a href="article.php">lire la suite</a></button>
                            </article>
                            <article class="col-sm">
                                <img src="img/apprendre-code.jpg" class="img-fluid">
                                    <h2 class="titre-2">Apprendre le CSS3</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam, magni odio saepe nam neque doloremque animi nisi, reprehenderit distinctio ducimus, a id placeat dignissimos cumque maiores natus esse numquam.</p>
                                            <button class="bouton"><a href="">lire la suite</a></button>
                            </article>
                            <article class="col-sm">
                                <img src="img/apprendre-code.jpg" class="img-fluid">
                                    <h2 class="titre-2">Apprendre le Javascript</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam, magni odio saepe nam neque doloremque animi nisi, reprehenderit distinctio ducimus, a id placeat dignissimos cumque maiores natus esse numquam.</p>
                                            <button class="bouton"><a href="">lire la suite</a></button>
                            </article>
                        </div>
                        <div class="row">
                            <article class="col-sm " >
                                <img src="img/apprendre-code.jpg" class="img-fluid">
                                    <h2 class="titre-2">Apprendre le PHP</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam, magni odio saepe nam neque doloremque animi nisi, reprehenderit distinctio ducimus, a id placeat dignissimos cumque maiores natus esse numquam.</p>
                                            <button class="bouton"><a href="">lire la suite</a></button>
                            </article>
                            <article class="col-sm">
                                <img src="img/apprendre-code.jpg" class="img-fluid">
                                    <h2 class="titre-2">Apprendre le SQL</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam, magni odio saepe nam neque doloremque animi nisi, reprehenderit distinctio ducimus, a id placeat dignissimos cumque maiores natus esse numquam.</p>
                                            <button class="bouton"><a href="">lire la suite</a></button>
                            </article>
                            <article class="col-sm">
                                <img src="img/apprendre-code.jpg" class="img-fluid">
                                    <h2 class="titre-2">Apprendre le Python</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam, magni odio saepe nam neque doloremque animi nisi, reprehenderit distinctio ducimus, a id placeat dignissimos cumque maiores natus esse numquam.</p>
                                            <button class="bouton"><a href="">lire la suite</a></button>
                            </article>
                        </div>
                    </div>
            </div>
            </section>
        </main>
<?php
//affiche le footer.php avec include
include 'footer.php';
?>
</body>
</html>