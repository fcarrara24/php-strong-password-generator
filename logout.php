<?php

session_start();

session_start();
if (isset($_SESSION["password"]) && $_SESSION["password"] !== "") {

    session_destroy();
}
header("Location: index.php");
die();


?>