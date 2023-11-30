<?php
include __DIR__ . "/partials/header.php";

//redirecting to login page in case not loaded yet
session_start();
if (empty($_SESSION["password"])) {
    header("Location: login.php");
    exit();
} else {
    header("Location: dedicatedPage.php");
    exit();
}







?>