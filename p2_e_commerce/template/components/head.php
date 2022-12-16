<?php include(__DIR__ . "/../../lib/init.php") ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $base_url ?>template/css/bootstrap.<?= $dirc ?>.min.css">
</head>

<body dir="<?= $dirc ?>">

    <?php if (isset($_SESSION["user"])) : ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex justify-content-end">
                    <a 
                    href="<?=$base_url?>logout.php"
                    class="text-white" role="button">
                        Logout
                    </a>
                </div>
            </div>
        </nav>
    <?php endif; ?>