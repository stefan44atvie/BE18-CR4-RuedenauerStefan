<?php
    require "../includes/db_connect.php";
    //require "../file_upload.php";

    if($_POST){
       //$booktype = $_POST["booktype"];
       //$picture = file_upload($_FILES["picture"]);
       $title = $_POST["title"];
       $author_first_name = $_POST["author_first_name"];
       $author_last_name =  $_POST["author_last_name"];
       $ISBN = $_POST["ISBN"];
       $short_description = $_POST["short_description"];
       $booktype = $_POST["booktype"];
       $publisher_name = $_POST["publisher_name"];
       $publisher_address = $_POST["publisher_address"];
       $publish_date = $_POST["publish_date"];
       $picupload = $_POST["bildupload"];
       $status = $_POST["status"];




        $sql = "INSERT INTO `newlibrary`(title, author_first_name, author_last_name, isbn, short_description, type, publisher_name, publisher_address, publish_date, status, image) VALUES ('$title', '$author_first_name','$author_last_name', '$ISBN', '$short_description', '$booktype','$publisher_name','$publisher_address', '$publish_date', '$status','$picupload' )";
       //$sql = "INSERT INTO `persons`(LastName) VALUES ('$author_last_name')";

       if(mysqli_query($connect, $sql)){
          header("Location: ../index.php");
       }else{
            echo "some got wrong";
       }
    }
?>