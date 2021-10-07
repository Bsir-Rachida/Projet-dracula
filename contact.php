<?php
$data = array_map('trim', $_POST);
$errors= [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['user_lastName'])) {
            $errors[]= 'Merci de renseigner votre nom';
        }
        if (empty($_POST['user_firstName'])) {
            $errors[]= 'Merci de renseigner votre prénom';
        }
        if (empty($_POST['user_phone'])) {
            $errors[]= 'Merci de renseigner votre numéro de téléphone';
        }
        if (empty($_POST['user_mail'])) {
            $errors[]= 'Merci de renseigner votre mail';
        }elseif (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)) {
            $errors[]= 'L\'adresse mail n\'est pas au bon format';
        }
        if (empty($_POST['user_message'])) {
            $errors[]= 'Merci d\'indiquer votre message' . '<br>';
        }
        if(empty($errors)) {
            header('Location: /contact.php');
        }
    }
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

    <ul class = "navbar">
      <li> <a href = "index.php#container-ban">About</a></li>
      <li> <a href = "index.php#experience">Expériences</a></li>
      <li> <a href = "index.php#formation">Formations</a></li>
      <li> <a href = "index.php#hobby">Hobbies</a></li>
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
    <div class="container-form">
<form action="" method="post" >
<?php if (!empty($errors)) {
      foreach($errors as $error) {
           echo $error . '<br>'.'<br>';
    }
}
    ?>
    <div class="forms">
        <div>
            <label for="lastName" class= "labelForm">Nom :</label>
            <input type="text" id="lastName" name="user_lastName" value="<?= $data['user_lastName'] ?? '' ?>" required >
        </div>
         <div>
            <label for="firstName" class= "labelForm">Prénom :</label>
            <input type="text" id="firstName" name="user_firstName" value="<?= $data['user_firstName'] ?? '' ?>" required>
        </div>
        <div>
            <label for="numberPhone" class= "labelForm">Téléphone :</label>
            <input type="tel" id="numberPhone" name="user_phone" value="<?= $data['user_phone'] ?? '' ?>" required>
        </div>
        <div>
            <label for="mail" class= "labelForm">E-mail :</label>
            <input type="email" id="mail" name="user_mail" value="<?= $data['user_mail'] ?? '' ?>" required>
        </div>

        <div>
            <label for="msg" class= "labelForm">Message :</label>
            <textarea id="msg" name="user_message" value="<?= $data['user_message'] ?? '' ?>" required></textarea>
        </div>
            <button>Envoyer</button>
        </div>      
    </div>
</form>

</div>
</main>
  
<footer>
    <p> © 2021 CV Vlad Tepes - Tous droits réservés </p>
    <a href = "legalNotice.html">Mentions légales</a>
</footer>

</body>
</html>
