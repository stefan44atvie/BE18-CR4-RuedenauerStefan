<?php

    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="BE18_CR4_StefanRuedenauer_BigLibrary";

    $connect = mysqli_connect($hostname,$username,$password,$databasename);

    // if(!$connect){
    //     die("connection failed".mysqli_connect_error());
    // }
?>