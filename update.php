<?php
    require "includes/db_connect.php";
    
    $id = $_GET["id"];
    $sql = "select * from newlibrary where id = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $author_first_name = $_POST["author_first_name"];
        $author_last_name = $_POST["author_last_name"];
        $isbn = $_POST["isbn"];
        $short_description = $_POST["short_description"];
        $publisher_name = $_POST["publisher_name"];
        $publisher_address = $_POST["publisher_address"];
        $publish_date = $_POST["publish_date"];
        $type = $_POST["booktype"];
        $image = $_POST["image"];
        $status = $_POST["status"];
        
        $sqlupdate= "UPDATE `newlibrary` SET `isbn`='$isbn',`title`='$title', `short_description`='$short_description', `type`='$type',`author_first_name`='$author_first_name', `author_last_name`='$author_last_name',`publisher_name`='$publisher_name', `publisher_address`='$publisher_address', `publish_date`='$publish_date', `status`='$status'  WHERE id = $id";
        // -- image`='$image',`isbn`='$isbn',`short_description`='$short_description',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',`publish_date`='$publish_date',`status`='$status' WHERE id = $id";
        // echo $sqlupdate;
        // if(mysqli_query($connect,$sqlupdate)){
        //     header("Location: index.php");"
        // }
        if(mysqli_query($connect,$sqlupdate)){
            header("Location: index.php");
        }else{
            echo "something went wrong";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <h1> Update the article</h1>
    <br>
    <div class="container" class="form-group">
    <!-- action="actions/a_update.php" -->
        <form  method="POST" >
            <input type="text" placeholder="Titel des Artikels" class="form-control" name="title" value="<?=$row["title"] ?>" >           
            <input type="text" placeholder="Autor (Vorname)" class="form-control" name="author_first_name" value="<?=$row["author_first_name"] ?>">           
            <input type="text" placeholder="Autor (Nachname)" class="form-control" name="author_last_name" value="<?=$row["author_last_name"] ?>">
            <input type="int" placeholder="ISBN" class="form-control" name="isbn" value="<?=$row["isbn"] ?>">
            <input type="text" placeholder="Short description" class="form-control" name="short_description" value="<?=$row["short_description"] ?>">           
            <input type="text" placeholder="Publisher Name" class="form-control" name="publisher_name" value="<?=$row["publisher_name"] ?>">           
            <input type="text" placeholder="Publisher Address" class="form-control" name="publisher_address" value="<?=$row["publisher_address"] ?>"> 
            <input type="date" placeholder="Publish Date" class="form-control" name="publish_date" value="<?=$row["publish_date"] ?>">  
            <input type="text" placeholder="Art des Artikels (book, CD, or DVD)" class="form-control" name="booktype" value="<?=$row["type"] ?>">           
            <input type="files" placeholder="Bild (HTTP-LINK)" class="form-control" name="bildupload" value="<?=$row["image"] ?>">           
            <input type="text" placeholder="Status (available OR reserved)" class="form-control" name="status" value="<?=$row["status"] ?>">           
            
          

           

            <input type="submit" name="submit" value="Update article" class="btn btn-success">        
        </form>
    </div>
    <!-- action="" -->
</body>
</html>