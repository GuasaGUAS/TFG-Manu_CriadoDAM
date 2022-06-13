<?php
session_start();
if (!isset($_SESSION["Login"])) {
    header('Location: index.php');
} else {
    unset($_SESSION["Login"]);
    header('Location: index.php');
    
}
