

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

    <ul class = "navbar">
      <li> <a href = "#container-ban">About</a></li>
      <li> <a href = "#experience">Expériences</a></li>
      <li> <a href = "#formation">Formations</a></li>
      <li> <a href = "#hobby">Hobbies</a></li>
      <li> <a href = "contact.php">Contact</a></li>
    </ul>
  
</header>
  
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
<form action="" method="post">
    <div>
        <label for="lastName">Nom :</label>
        <input type="text" id="lastName" name="user_lastName">
    </div>
    <div>
        <label for="firstName">Prénom :</label>
        <input type="text" id="firstName" name="user_firstName">
    </div>
    <div>
        <label for="numberPhone">Téléphone :</label>
        <input type="number" id="numberPhone" name="user_phone">
    </div>
    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>

    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>
    
</main>
  
<footer>
    <p> © 2021 CV Vlad Tepes - Tous droits réservés </p>
    <a href = "legalNotice.html">Mentions légales</a>
</footer>

</body>
</html>
