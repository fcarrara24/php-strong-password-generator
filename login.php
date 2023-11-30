<?php
include __DIR__ . "/partials/header.php";
include __DIR__ . "/functions/function.php";

$pass = '';

if (isset($_GET["passwordLength"]) && $_GET["passwordLength"] !== "") {
    $pass = generaPassword();
    echo '<div class="text-white container">' . $pass . '</div>';
}
?>
<div class="container card bg-white p-4">
    <?php if ($pass === '') { ?>
        <div class="alert alert-danger ">
            <?php echo 'errore di compilazione'; ?>
        </div>
    <?php } ?>
    <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
        <!-- password input -->
        <div class="form-group d-flex flex-row justify-content-between ">
            <label for="passwordLength" class="pe-4">Lunghezza PASSWORD</label>
            <input type="number" class="form-control" id="passwordLength" name="passwordLength">
        </div>

        <div class="px-5 py-3 ">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="repeat">
                <label class="form-check-label" for="flexSwitchCheckDefault">Ripetizione di caratteri</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="lettere">
                <label class="form-check-label" for="flexSwitchCheckChecked">Lettere</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="numeri">
                <label class="form-check-label" for="flexSwitchCheckChecked">Numeri</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="simboli">
                <label class="form-check-label" for="flexSwitchCheckChecked">Simboli</label>
            </div>
        </div>


        <div class="d-flex flex-row flex-start">
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-danger">Annulla</button>
        </div>
    </form>
</div>
<?php
include __DIR__ . "/partials/footer.php";

?>