<?php
include_once "DB.php";
class Poster extends DB{
    function __construct(){
        parent::__construct('poster');
    }
}
?>