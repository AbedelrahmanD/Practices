<?php include("template/components/head.php");

if (isset($_POST["submit"])) {
    include_once __DIR__ . "/form_request/login.php";
}
?>

<?php if (isset($message)) : ?>
    <div class="container mt-3 col-11 col-md-6">
        <div class="alert alert-danger">
            <strong>
                <?= $message ?>
            </strong>
        </div>
    </div>
<?php endif; ?>
<form method="post" action="">
    <div class="container shadow p-2 rounded my-5 col-11 col-md-6">
        <h1 class="text-center text-primary"><?= LOGIN ?></h1>
        <div class="form_group">
            <div class="form-label"><?= USERNAME ?></div>
            <input type="text" name="username" placeholder="<?= USERNAME ?>" class="form-control" value="<?= $_POST["username"] ?? ''  ?>">
        </div>
        <div class="form_group">
            <div class="form-label"><?= PASSWORD ?></div>
            <input type="password" name="password" placeholder="<?= PASSWORD ?>" class="form-control" value="<?= $_POST["password"] ?? ''  ?>">
        </div>

        <button name="submit" class="btn btn-primary w-100 my-2"><?= SUBMIT ?></button>

        <a href="register.php?lang=<?= $lang ?>" class="text-center w-100 d-block mb-2"><?= REGISTER ?></a>
    </div>

</form>
<?php include("template/components/footer.php") ?>