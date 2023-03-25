<?php
    require_once "includes/db_connect.php";
    $id = $_GET["id"];
    
    $sql = "DELETE FROM `newlibrary` WHERE id=$id";
    
    if(mysqli_query($connect, $sql)){
            header("Location: index.php");
        }
    

?>