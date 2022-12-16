<?php
include __DIR__."/lib/init.php";
unset($_SESSION["user"]);
header("location: {$base_url}login.php");