<?php
    
    $level = empty($_COOKIE['levels']) ? 0 : $_COOKIE['levels'];

    switch ($level) {
        case 0:
            header("Location: level1.php");
            break;
        case 1: 
            header("Location: level2.php");
            break;
        case 2:
            header("Location: level3.php");
            break;
        case 3:
            header("Location: last.php");
            break;
        default:
            header("Location: home.php");
            break;
    }
?>