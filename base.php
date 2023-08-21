<?php
session_start();
date_default_timezone_set('Asia/Taipei');
    include_once __DIR__ ."/controller/Poster.php";
    include_once __DIR__ ."/controller/Movie.php";
    include_once __DIR__ ."/controller/Order.php";



    $Poster = new Poster;
    $Movie = new Movie;
    $Oreder = new Order;


    function dd($array){
        echo"<pre>";
        print_r($array);
        echo"</pre>";
    }
    function to($url){
        header("location:".$url);
    }

?>