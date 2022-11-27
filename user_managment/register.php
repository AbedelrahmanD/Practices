<?php include("template/components/head.php");


if (isset($_POST["submit"])) {
    include_once __DIR__ . "/form_request/register.php";
}
?>

<?php if (isset($errors)) : ?>
    <div class="container mt-3 col-12 col-md-6">
        <?php if (count($errors)) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li>
                            <?= $error ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php else : ?>
            <div class="alert alert-success">
                <strong>
                    <?= REGISTER_SUCCESS ?>
                </strong>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<form action="" method="post">
    <div class="container shadow p-2 rounded my-5 col-11 col-md-6">
        <h1 class="text-center text-primary"><?= REGISTER ?></h1>
        <div class="form_group">
            <div class="form-label"><?= USERNAME ?></div>
            <input type="text" name="username" placeholder="<?= USERNAME ?>" class="form-control" value="<?= $_POST["username"] ?? '' ?>">
        </div>
        <div class="form_group">
            <div class="form-label"><?= PASSWORD ?></div>
            <input type="password" name="password" placeholder="<?= PASSWORD ?>" class="form-control" value="<?= $_POST["password"] ?? '' ?>">
        </div>
        <div class="form_group">
            <div class="form-label"><?= CONFIRM_PASSWORD ?></div>
            <input type="password" name="confirm_password" placeholder="<?= CONFIRM_PASSWORD ?>" class="form-control" value="<?= $_POST["confirm_password"] ?? '' ?>">
        </div>

        <button name="submit" class="btn btn-primary w-100 my-2"><?= SUBMIT ?></button>

        <a href="login.php?lang=<?= $lang ?>" class="text-center w-100 d-block mb-2"><?= LOGIN ?></a>

    </div>
</form>

<?php include("template/components/footer.php") ?>