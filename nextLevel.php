<?php
//Code taken from ajax and cookie folders of User Authentication lecture
session_start();

$level = empty($_POST['level']) ? false : $_POST['level'];

$level2 = empty($_SESSION["level2Check"]) ? false : $_SESSION["level2Check"];

if ($level2) {
    $level = 'level2';
}

switch ($level) {
    case 'level1':
        setcookie('levels', '1');
        print 'level2.php';
        break;
    case 'level2':
        setcookie('levels', '2');
        header("Location: level3.php");
        break;
    case 'level3':
        setcookie('levels', '3');
        break;
    default:
        print 'home.php';
        break;
}
?>