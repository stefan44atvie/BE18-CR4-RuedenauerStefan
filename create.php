<?php
    if(isset($_POST["submit"])){
        $type = $_POST["type"];
        
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
    <div class="container" class="form-group">
        <form  method="POST" action="actions/a_create.php">
            <input type="text" placeholder="Titel des Artikels" class="form-control" name="title">           
            <input type="text" placeholder="Autor (Vorname)" class="form-control" name="author_first_name">           
            <input type="text" placeholder="Autor (Nachname)" class="form-control" name="author_last_name">
            <input type="int" placeholder="ISBN" class="form-control" name="ISBN">
            <input type="text" placeholder="Short description" class="form-control" name="short_description">           
            <!-- <input type="text" placeholder="Art des Artikels" class="form-control" name="booktype">            -->
            <input type="text" placeholder="Publisher Name" class="form-control" name="publisher_name">           
            <input type="text" placeholder="Publisher Address" class="form-control" name="publisher_address"> 
            <input type="date" placeholder="Publish Date" class="form-control" name="publish_date" >  
            <input type="text" placeholder="Art des Artikels (book, CD, or DVD)" class="form-control" name="booktype">           
            <input type="files" placeholder="Bild (HTTP-LINK)" class="form-control" name="bildupload">           
            <input type="text" placeholder="Status (available OR reserved)" class="form-control" name="status" >           
            
          

           

            <input type="submit" name="submit" value="Create product" class="btn btn-success">        
        </form>
    </div>
    <!-- action="" -->
</body>
</html>