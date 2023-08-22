<?php
include_once "../base.php";

$_POST['ondate']=$_POST['year']."-". $_POST['month'] . "-" . $_POST['day'];
unset($_POST['year']);
unset($_POST['month']);
unset($_POST['day']);
if(!empty($_FILES['trailer']['tmp_name'])){
    $_POST['trailer']=$_FILES['trailer']['name'];
    move_uploaded_file($_FILES['trailer']['tmp_name'],"../upload/".$_POST['trailer']);
}
if(!empty($_FILES['poster']['tmp_name'])){
    $_POST['poster']=$_FILES['poster']['name'];
    move_uploaded_file($_FILES['poster']['tmp_name'],"../upload/".$_POST['poster']);
}
$_POST['sh']=1;
$_POST['rank']=($Movie->max('id')+1);
$Movie->save($_POST);

to("../backend.php?do=movie");

?>