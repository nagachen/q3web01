<?php
include_once "DB.php";
class Movie extends DB{
    function __construct(){
        parent::__construct('movie');
    }
}
?>