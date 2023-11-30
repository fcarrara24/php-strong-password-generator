<?php
include __DIR__ . "/partials/header.php";

//redirecting to login page in case not loaded yet
session_start();
if (empty($_SESSION["auth_token"])) {
    header("Location: login.php");
    exit();
}

echo '<h1>main</h1>';





include __DIR__ . "/partials/footer.php";

?>