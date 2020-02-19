<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Data/Common/CSS/main.css">
    <title>Onkunde</title>
</head>
<body>
    <?php require "./Data/Common/HTML/head.html" ?>
    <div class="formDiv">
        <h1>Onkunde</h1>
        <p>
            Er zijn veel mensen die niet kunnen <?= $_SESSION['canDo']; ?>. Neem nou <?= $_SESSION['friendlyWith']; ?>. Zelf met de hulp van een <?= $_SESSION['iTakeWithMe']; ?> 
            of zelfs <?= $_SESSION['favNumber']; ?> kan <?= $_SESSION['friendlyWith']; ?> niet <?= $_SESSION['canDo']; ?>.
            Dat heeft niets te maken met een gebrek aan <?= $_SESSION['bestPersonalProperty']; ?>, maar met een te veel aan <?= $_SESSION['worstPersonalProperty']; ?>. 
            Te veel <? = $_SESSION['worstPersonalProperty']; ?> leidt tot <?= $_SESSION['worstThatCouldHappen']; ?> en dat is niet goed als je wilt <?= $_SESSION['canDo']; ?>. 
            Helaas voor <?= $_SESSION['friendlyWith']; ?>.
        </p>
    </div>
    <?php require "./Data/Common/HTML/footer.html" ?>
</body>
</html>

<?php 
    session_destroy();
?>