<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Data/Common/CSS/main.css">
    <title>PANIEK!</title>
</head>
<body>
    <?php require "./Data/Common/HTML/head.html" ?>
    <div class="formDiv">
        <h1>Er heerst paniek!</h1>
        <p>Er heerst paniek in het koningkrijk <?= $_SESSION['country']; ?>, Koning <?= $_SESSION['worstTeacher']; ?> is ten einde raad en als Koning <?= $_SESSION['worstTeacher']; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_SESSION['importantPerson']; ?>. </p>
        <p>"<?= $_SESSION['importantPerson']; ?>! Het is een ramp! Het is een schande!"</p>
        <p>"Sire, Majesteit, Uwu Luidruchtigheid, wat is er aan de hand?</p>
        <p>"Mijn <?= $_SESSION['notPet']; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?= $_SESSION['toys']; ?> voor hem gekocht!"</p>
        <p>"Majesteit, uw <?= $_SESSION['notPet']; ?> komt vast vanzelf weer terug?"</p>
        <p>"Ja da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_SESSION['hobby']; ?> leren?"</p>
        <p>"Maar Sire, daar kunt u toch uw <?= $_SESSION['lotsOfMoney']; ?> voor gebruiken."</p>
        <p>"<?= $_SESSION['importantPerson']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
        <p>"<?= $_SESSION['bored'] ?>, Sire."</p>
    </div>
    <?php require "./Data/Common/HTML/footer.html" ?>
</body>
</html>

<?php 
    session_destroy();
?>