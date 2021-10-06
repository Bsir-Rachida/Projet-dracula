<?php
require 'parcours.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='style.css' rel = 'stylesheet'>   
    <script src="https://kit.fontawesome.com/4aaf9a8324.js" crossorigin="anonymous"></script> 
</head>
  
<body>

<header>
    
    <div id ="container-ban" class = "container-ban">  
        <div class = "title">Réceptionniste de nuit</div>    
        <p>" Oenolgue de père en fils, je souffre des préjugés à mon encontre depuis la pandémie, j'ai donc immigré dans les pays occidentaux, dont la France afin de me reconvertir en réceptionniste de nuit...A l'abri de la lumière..."</p>
    </div>
<nav>
    <ul class = "navbar" id="navbar">
      <li> <a href = "#container-ban">About</a></li>
      <li> <a href = "#experience">Expériences</a></li>
      <li> <a href = "#formation">Formations</a></li>
      <li> <a href = "#hobby">Hobbies</a></li>
      <li> <a href = "contact.php"> Contact</a></li>
    </ul>

    <a class="close" href="#"></a>
    <a class="menu" href="#navbar">
        <img src="./images/coffin.png" class = "coffin">
        MENU
    </a>
</nav>  
</header>
  

  
<body>    
  
  <!--Aside part-->
    <aside>
        <div class = "contact">
            <h1>Vlad Tepes</h1>
            <img src="images/arabesque_reverse.png" class="arabesque">
            <img src="./images/portrait.png" class="portrait" alt="Portrait" title="Portrait">
            <p>Château de Bran<br>Bran 507025<br>Transylvanie<br>+40587458954<br>vladbasarab-tepes@gmail.com</p>
            <img src="images/arabesque.png" class="arabesque">
        </div>

        <div class="Skills">
            <img src = "./images/verre.png" alt="service" title="service">
            <h3>Service client</h3>
            <img src ="./images/verre2.png" alt="office" title="office">
            <h3>Microsoft Office</h3>
            <img src = "./images/verre.png" alt="service" title="service">
            <h3>Adaptabilité</h3>
        </div>

        <div class="reseaux">
            <img src="./images/facebook.resized.png" alt="facebook" title="facebook">
            <img src="./images/instagram.resized.png" alt="instagram" title="instagram">
            <img src="./images/linkedin.resized.png" alt="linkedin" title="linkedin">
        </div>

    </aside>
<!--end Aside-->
  
    <main>
        <section id ="experience" class='experience'> 

            <div class='header_section'>
                <img src="./images/arabesque_reverse.png" class="arabesque" alt="arabesque">
                <h2 class='h2timeline'><img src="images/motifs2.png" alt="" class="sep">Expériences<img src="images/motifs3.png" alt="" class="sep2"></h2>
                <img src="./images/arabesque.png" class="arabesque" alt="arabesque">
            </div>

  
            <div class="parcours">
                <?php foreach ($skills as $skill) : ?>
                <div class=skills>    
                    <div class="description">
                        <h3><?= $skill['title'] ?></h3>
                        <p><?= $skill['subtitle'] ?></p>
                        <ul class='ultimeline'>
                        <?php foreach ($skill['items'] as $item) : ?>
                        <li><?= $item ?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                <div class='year'><img src = "./images/flying-bat-r.png" class="bat"><br><?= $skill['date'] ?><br><img src = "./images/flying-bat-l.png" class="bat"></div>
                <img src='./images/<?= $skill['image'] ?>'class='imgtimeline' alt='image hôtel four seasons'>
                </div>
                <?php endforeach; ?>
            </div>
    
        </section>

        <section id ="formation" class='formation'>

            <div class='header_section'>
                <img src="./images/arabesque_reverse.png" class="arabesque" alt="arabesque">
                <h2 class='h2timeline'><img src="images/motifs2.png" alt="" class="sep">Formation<img src="images/motifs3.png" alt="" class="sep2"></h2>
                <img src="./images/arabesque.png" class="arabesque" alt="arabesque">
            </div>

            <div class='parcours'>
                <?php foreach ($trainings as $training) : ?>
                <div class= 'training'>
                    <img src='./images/<?= $training['image'] ?>'class='imgtimeline' alt='image clefs hôtel'>
                    <div class='year'><img src = "./images/flying-bat-r.png" class="bat"><br><?= $training['date'] ?><br><img src = "./images/flying-bat-l.png" class="bat"></div>
                    <div class='description'>
                        <h3><?= $training['title'] ?></h3>
                        <p><?= $training['subtitle'] ?></p>  
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </section>
  
        <section id="hobby" class="hobby">

            <div class='header_hobbies'>
                <img src="./images/arabesque_reverse.png" class="arabesque" alt="arabesque">
                <h2 class="h2timeline"> <img src="images/motifs2.png" alt="" class="sep">Hobbies<img src="images/motifs3.png" alt="" class="sep2"></h2>
                <img src="./images/arabesque.png" class="arabesque" alt="arabesque">        
            </div>
   
            <div class="hobbies">   
                <div class="cocktail"> 
                    <h3><i class="fas fa-cocktail"></i> 
                    <span> Dégustation de vin </span></h3>
                </div>  

                <div class="music">
                    <h3><i class="fas fa-music"></i> 
                    <span>Musique classique et baroque </span></h3>
                </div> 

                <div class="batSitting">
                    <h3><img class="batsitting" src ="images/bat.png">
                    <span> Bat sitting </span></h3>
                </div>   
        </section>

    </main>
  
    <footer>

        <p> © 2021 CV Vlad Tepes - Tous droits réservés </p>
        <a href = "legalNotice.html">Mentions légales</a>

    </footer>

</body>
</html>
