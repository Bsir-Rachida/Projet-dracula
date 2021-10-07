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
            $errors[]= 'Merci d\'indiquer votre message';
        }
        if(empty($errors)) {
            header('Location: /contact.php');
        }
    } 

    include('aside.php');
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
    <?php include('nav.php'); 
          include('aside.php');
    ?>

<main>
    <div class="container-form">
        <form action="" method="post" >
        <?php if (!empty($errors)) {
            foreach($errors as $error) {
                echo $error;
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
    <?php include('footer.php'); ?>
</body>
</html>
