<?php include("template/components/head.php");
if(!isset($_SESSION["user"])){
    header("location: {$base_url}login.php");
}
$sql = new sql();
$users = $sql->fetch("select * from user");
?>

<div class="container shadow rounded my-5">
    <h1>
        <?=USERS_LIST?>
    </h1>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><?= USERNAME ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $user) : ?>
                <tr>
                    <td><?= ($index + 1) ?></th>
                    <td><?= $user["username"] ?></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php include("template/components/footer.php") ?>