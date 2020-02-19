<?php 

    function ifExistsEcho($varName) {
        if(array_key_exists($varName, $_SESSION) && substr($_SESSION[$varName], 0, 6) != '<br />') {
            echo $_SESSION[$varName];
        } else {
            $_SESSION[$varName] = "";
            echo $_SESSION[$varName];
        }
    }

?>