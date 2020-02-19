<?php
    session_start();

    $continue = true;
    foreach(array_keys($_POST) as $currentPostDataName) {
        if(strlen($_POST[$currentPostDataName]) > 0) {
            $_SESSION[$currentPostDataName] = htmlspecialchars( $_POST[$currentPostDataName]);
        } else {
            // $_SESSION[$currentPostDataName] = "EMPTY";
            $continue = false;
        }
    }
    print("You'll get redirected soon :D");

    if($continue == false) {
        $_SESSION['newLocation'] = $_SESSION['oldLocation'];
    }
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
    } else {
        $uri = 'http://';
    }
    $uri .= $_SERVER['HTTP_HOST'];
    header('Location: '.$uri.$_SESSION['newLocation']);
?>