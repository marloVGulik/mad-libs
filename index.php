<?php
    session_start();

    $_SESSION['newLocation'] = '/school/mad-libs/paniek-val.php';
    $_SESSION['oldLocation'] = '/school/mad-libs/index.php';

    require "./Data/Common/PHP/existTester.php";
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
        <h1>Er heerst paniek</h1>
        <form action="validateContent.php" method="POST">
            <label>Welk dier zou je nooit als huisdier willen hebben?</label><input type="text" name="notPet" required value="<?php ifExistsEcho('notPet'); ?>">
            <label>Wie is de belangrijkste persoon in je leven?</label><input type="text" name="importantPerson" required value="<?php ifExistsEcho('importantPerson'); ?>">
            <label>In welk land zou je willen leven?</label><input type="text" name="country" required value="<?php ifExistsEcho('country'); ?>">
            <label>Wat doe je als je jezelf verveeld?</label><input type="text" name="bored" required value="<?php ifExistsEcho('bored'); ?>">
            <label>Met welk speelgoed speelde je als kind?</label><input type="text" name="toys" required value="<?php ifExistsEcho('toys'); ?>">
            <label>Bij welke docent spijbel je het liefst?</label><input type="text" name="worstTeacher" required value="<?php ifExistsEcho('worstTeacher'); ?>">
            <label>Als je &euro;100.000,- had, wat zou je dan kopen?</label><input type="text" name="lotsOfMoney" required value="<?php ifExistsEcho('lotsOfMoney'); ?>">
            <label>Wat is je favoriete bezigheid?</label><input type="text" name="hobby" required value="<?php ifExistsEcho('hobby'); ?>">
            <input type="submit" id="submitButton" value="VERSTUUR DATA">
        </form>
    </div>
    <?php require "./Data/Common/HTML/footer.html" ?>
</body>
</html>