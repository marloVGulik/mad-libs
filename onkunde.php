<?php 
session_start();


$_SESSION['newLocation'] = '/school/mad-libs/onkunde-val.php';
$_SESSION['oldLocation'] = '/school/mad-libs/onkunde.php';

require "./Data/Common/PHP/existTester.php";

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
        <form action="validateContent.php" method= "POST">
            <label>Wat zou je graag willen kunnen?</label><input name="canDo" type="text" value="<?php ifExistsEcho('canDo'); ?>">
            <label>Met welke persoon kan je goed opschieten?</label><input name="friendlyWith" type="text" value="<?php ifExistsEcho('friendlyWith'); ?>">
            <label>Wat is je favoriete getal?</label><input name="favNumber" type="number" step="1" value="<?php ifExistsEcho('favNumber'); ?>">
            <label>Wat heb je altijd bij als je op vakantie gaat?</label><input name="iTakeWithMe" type="text" value="<?php ifExistsEcho('iTakeWithMe'); ?>">
            <label>Wat is je beste persoonlijke eigenschap?</label><input name="bestPersonalProperty" type="text" value="<?php ifExistsEcho('bestPersonalProperty'); ?>">
            <label>Wat is je slechtste persoonlijke eigenschap?</label><input name="worstPersonalProperty" type="text" value="<?php ifExistsEcho('worstPersonalProperty'); ?>">
            <label>Wat is het ergste dat je kan overkomen?</label><input name="worstThatCouldHappen" type="text" value="<?php ifExistsEcho('worstThatCouldHappen'); ?>">

            <input type="submit" value="I'm feeling lucky" id="submitButton">
        </form>
    </div>
    <?php require "./Data/Common/HTML/footer.html" ?>
</body>
</html>
