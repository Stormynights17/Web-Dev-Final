<?php

    $answer1 = empty($_GET['riddle1']) ? '' : $_GET['riddle1'];

    $answer2 = empty($_GET['riddle2']) ? '' : $_GET['riddle2'];

    if($answer1 == 'fence' && $answer2 == 'cold') {
        setcookie('level2', true);
        header("Location: level3.php");
        exit;
    }
    else {
        $riddleError = true;
        require "level2.php";
    }
?>