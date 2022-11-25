<?php
$lang="en";
if(isset($_GET["lang"])){
$lang=$_GET["lang"];
}
$languages=[
    "en"=>"ltr",
    "ar"=>"rtl"
];
$dirc=$languages[$lang];
include("languages/$lang.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Template</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.<?=$dirc?>.min.css">
</head>
<body dir="<?=$dirc?>">
    <h1>
        <?=WELCOME?>
    </h1>
</body>
</html>