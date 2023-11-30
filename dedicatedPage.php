<?php
include __DIR__ . "/partials/header.php";

session_start();
if (empty($_SESSION["password"])) {
    header("Location: login.php");
    exit();
}
?>




<div class="d-flex flex-row justify-content-center">
    <div class="card bg-white p-5 d-flex flex-row flex-nowrap ">
        <div class=" alert ">password:</div>
        <div class="alert alert-success">
            <?php echo $_SESSION["password"] ?>
        </div>
        <div class="button btn-alert d-flex flex-row p-2">
            <a href="logout.php">reset</a>
        </div>
    </div>
</div>



<?php
include __DIR__ . "/partials/footer.php";
?>