<?php
include_once "../base.php";
$type=$_POST['type'];
switch($type){
    case "movie":
    $Order->del(['movie'=>$_POST['target']]);
    break;
    case "date":
    $Order->del(['date'=>$_POST['target']]);
    break;
}
