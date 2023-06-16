<?php
    require "connexion.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate"/>

    <link rel="stylesheet" href="style.css">
    <script defer src="script.js" ></script>
    <title>Antoine Lespagnard - Portfolio</title>
</head>
<body> 


<!-- ******************************************************** -->
    <nav class="normalNav">
        <a class="btn_name" href="#whoami">
                <div id="button">
                    <div class="button-hover">
                        <div class="button-triangle"></div>
                        <div class="button-body"></div>
                    </div>
                </div>
            <h1 id="titre1">Profil</h1>
        </a>
            
        <a class="btn_name" href="#skills">
                <div id="button">
                    <div class="button-hover">
                        <div class="button-triangle"></div>
                        <div class="button-body"></div>
                    </div>
                </div>
            <h1 id="titre1">Skills</h1>            
        </a>

        <a class="btn_name" href="#myWork">
                <div id="button">
                    <div class="button-hover">
                        <div class="button-triangle"></div>
                        <div class="button-body"></div>
                    </div>
                </div>
            <h1 id="titre1">My•Work</h1>  
        </a>

        <a class="btn_name" href="#tempcontact">
                <div id="button">
                    <div class="button-hover">
                        <div class="button-triangle"></div>
                        <div class="button-body"></div>
                    </div>
                </div>
            <h1 id="titre1">Contact</h1>   
        </a>



        <a class="back-top" href="#accueil"><img src="images/icons/back-to-top.svg" alt=""></a>

    </nav>

    <div class='burger-container option-2'>
            <span></span>
            <span></span>
            <span></span>
        </div>
       
            <nav class="burgerNav">
                <a class="liens" href="#profil">Profil</a>
                <a class="liens" href="#skills">Skills</a>
                <a class="liens" href="#myWork">My Work</a>
                <a class="liens" href="#contact">Contact</a>
            </nav>

<!-- ******************************************************** -->
    <div id="accueil">
        
        <div class="discover">

            <h1 id="looking">Looking for</h1>
            <div class="jobs">
                <h1 class="nametag">a Photographer</h1>
                <h1 class="nametag">a Web Developper</h1>
                <h1 class="nametag">an Illustrator</h1>
                <h1 class="nametag">a Web Designer</h1>
                <h1 class="nametag">a Film Maker</h1>
                <h1 class="nametag">a Sound Designer</h1>
                <h1 class="nametag">a 3D artist</h1>
                <h1 class="nametag">something else?</h1>
            </div>    

            <div class="choice">
                <a class="bouton-accueil" href="#contact">Contact me</a>
                <a class="bouton-accueil whoami" href="#profil">Who am I?</a>
            </div> 
            
        </div>


        
        <div class="section">
            <div class="image-container">
            <div class="moi" style="background-image: url(images/scroll/1.png);"></div>
        </div>
    </div>
    
    
    <div class="section">
        <div class="image-container">
            <div class="moi" style="background-image: url(images/scroll/2.png);"></div>
        </div>
    </div>
    
    <div class="section">
        <div class="image-container">
            <div class="moi" style="background-image: url(images/scroll/3.png);"></div>
        </div>
    </div>
    
    <div class="section">
        <div class="image-container">
            <div class="moi" style="background-image: url(images/scroll/4.png);"></div>
        </div>
    </div>
    
    <div class="section">
        <div class="image-container">
            <div class="moi" style="background-image: url(images/scroll/5.png);"></div>
        </div>
    </div>
    
    <div class="section last">
        <div class="image-container">
            <div class="moi" style="background-image: url(images/scroll/6.png);"></div>
        </div>
    </div>
    
    
</div>   

<!-- ******************************************************** -->
<div class="tempo" id="whoami">
    <h2>Who Am I?</h2>
</div>

    <div id="profil">
        <div class="left-content">
            <div class="contenu"></div>
            <div class="infos texte">
                <h1 class="presentation">Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, repudiandae commodi obcaecati quas veritatis cum. Commodi nam aliquam neque itaque obcaecati magnam nesciunt distinctio reiciendis corporis, voluptatum cumque, ipsam ipsa earum molestiae repellat enim perferendis delectus atque numquam laudantium nisi asperiores voluptatibus iste!</p>
            </div>
        </div>
<!--
        <div class="right-content">
            <div class="contenu"></div>
            <div class="infos texte-droite">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, repudiandae commodi obcaecati quas veritatis cum. Commodi nam aliquam neque itaque obcaecati magnam nesciunt distinctio reiciendis corporis, voluptatum cumque, ipsam ipsa earum molestiae repellat enim perferendis delectus atque numquam laudantium nisi asperiores voluptatibus iste! Temporibus, in? </p>
            </div>
        </div>
-->
    </div>

    
    
    

<!-- ******************************************************** -->
<div class="tempo" id="skills">
    <h2>My Skills</h2>
</div>
<div id="competences">

    <div class="skillsWrapper">
        <?php

            $req = $bdd->prepare("SELECT * FROM skills ORDER BY id DESC");
            $req->execute();
            while($don = $req->fetch())
            {
                echo "<img class='skillsIcons' src='images/skills/".$don['fichier']."' alt='image de ".$don['nom']."'>";
                }
            $req->closeCursor();
        ?>
    </div>
</div>

<!-- ******************************************************** -->

<div class="tempo myWork" id="myWork">
<h2>My work</h2>
</div>

    <div class="montravail">


        <a class="categorie gauche" href="gallery.php?cat=Photographie">
            <?php
                $req = $bdd -> prepare("SELECT * FROM galerie WHERE frontPage=1 AND id_categorie=28 ORDER BY id DESC LIMIT 4");
                $req->execute();
                while($don = $req->fetch()){
                    echo "<img class='travaux' src='images/portfolio/".$don['image']."' alt='image de ".$don['nom']."'>";
                }
            ?>
            <h3 class="cat">Photography</h3>
        </a>


        <a class="categorie droite" href="gallery.php?cat=Illustrator"> <!-- Afficher plusieurs categories sur une page? ici : Illustrator et Photoshop -->
            <?php
                $req = $bdd -> prepare("SELECT * FROM galerie WHERE frontPage=1 AND (id_categorie=23 OR id_categorie=24) ORDER BY id DESC LIMIT 4");
                $req->execute();
                while($don = $req->fetch()){
                    echo "<img class='travaux' src='images/portfolio/".$don['image']."' alt='image de ".$don['nom']."'>";
                }
            ?>
            <h3 class="cat">Illustration</h3>
        </a>


        <a class="categorie gauche" href="gallery.php?cat=PremierPro">
            <?php
                $req = $bdd -> prepare("SELECT * FROM galerie WHERE frontPage=1 AND id_categorie=26 ORDER BY id DESC LIMIT 4");
                $req->execute();
                while($don = $req->fetch()){
                    echo "<img class='travaux' src='images/portfolio/".$don['image']."' alt='image de ".$don['nom']."'>";
                }
            ?>
            <h3 class="cat">Video</h3>
        </a>

        <a class="categorie droite" href="gallery.php?cat=Web">
            <?php
                $req = $bdd -> prepare("SELECT * FROM galerie WHERE frontPage=1 AND (id_categorie=25 OR id_categorie=30) ORDER BY id DESC LIMIT 4");
                $req->execute();
                while($don = $req->fetch()){
                    echo "<img class='travaux' src='images/portfolio/".$don['image']."' alt='image de ".$don['nom']."'>";
                }
            ?>
            <h3 class="cat">Web (UI/UX)</h3>
        </a>


        <a class="categorie gauche" href="gallery.php?cat=InDesign">
            <?php
                $req = $bdd -> prepare("SELECT * FROM galerie WHERE frontPage=1 AND id_categorie=27 ORDER BY id DESC LIMIT 4");
                $req->execute();
                while($don = $req->fetch()){
                    echo "<img class='travaux' src='images/portfolio/".$don['image']."' alt='image de ".$don['nom']."'>";
                }
            ?>
            <h3 class="cat">Layout</h3>
        </a>

        <a class="categorie droite" href="gallery.php?cat=Blender">
            <?php
                $req = $bdd -> prepare("SELECT * FROM galerie WHERE frontPage=1 AND id_categorie=29 ORDER BY id DESC LIMIT 4");
                $req->execute();
                while($don = $req->fetch()){
                    echo "<img class='travaux' src='images/portfolio/".$don['image']."' alt='image de ".$don['nom']."'>";
                }
            ?>
            <h3 class="cat">3D</h3>
        </a>

            <a class="categorie gauche" href="gallery.php?cat=Autres">
            <?php
                $req = $bdd -> prepare("SELECT * FROM galerie WHERE frontPage=1 AND id_categorie=31 ORDER BY id DESC LIMIT 4");
                $req->execute();
                while($don = $req->fetch()){
                    echo "<img class='travaux' src='images/portfolio/".$don['image']."' alt='image de ".$don['nom']."'>";
                }
            ?>
            <h3 class="cat">Others</h3>
        </a>


    </div>

<!-- ******************************************************** -->
<div id="tempcontact" class="tempo">
<h2>Contact Me</h2>

</div>

    <div id="contact">
        <div class="containercontact">
            <h1 class="contact">Formulaire de contact</h1>
                <form action="traitement.php" method="POST">
                    <?php
                        if(isset($_GET['add']))
                        {
                            echo "<div class='success'>Votre message a bien été envoyé</div>";
                        }
                    ?>
                <input type="" placeholder="your Name" id="nom" name="nom" required>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <textarea id="message" cols="30" rows="10" placeholder="Your Message" name="message" required></textarea>
                <input type="submit" value="submit" class="btnwsh">
                    <?php
                        if(isset($_GET['error']))
                        {
                            echo "<div class='error'>Une erreur est survenue</div>";
                        }
                    ?>
                </form>
        </div>
    </div>

<!-- ******************************************************** -->


    
</body>
</html>