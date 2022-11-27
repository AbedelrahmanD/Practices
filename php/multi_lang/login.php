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


$scrript_name_arr=explode("/",$_SERVER["SCRIPT_NAME"]);
array_pop($scrript_name_arr);
$site_url="http://".$_SERVER["HTTP_HOST"].implode("/",$scrript_name_arr)."/";
?>

<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Template</title>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.<?=$dirc?>.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body dir="<?=$dirc?>">
   <div class="container shadow p-2 rounded my-5 col-11 col-md-6">
    <h1 class="text-center text-primary"><?=LOGIN?></h1>
    <div class="form_group">
        <div class="form-label"><?=USERNAME?></div>
        <input type="text" name="username" placeholder="<?=USERNAME?>" class="form-control">
    </div>
     <div class="form_group">
        <div class="form-label"><?=PASSWORD?></div>
        <input type="password" name="password" placeholder="<?=PASSWORD?>" class="form-control">
    </div>

    <button class="btn btn-primary w-100 my-2"><?=SUBMIT?></button>

    <a href="register.php?lang=<?=$lang?>" class="text-center w-100 d-block mb-2"><?=REGISTER?></a>
    
   </div>
</body>
</html>