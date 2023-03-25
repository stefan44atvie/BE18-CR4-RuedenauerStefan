<?php
    require_once "includes/db_connect.php";
    $id=$_GET["id"];    
    $sql="select * from newlibrary where id = $id";
    

    $result = mysqli_query($connect, $sql);
    $row=mysqli_fetch_assoc($result);
    

    $body.="
        <div class='card' style='width: 18rem;'>
            <div class='card-header'>
                Ein Buch von {$row["author_first_name"]} {$row["author_last_name"]}
            </div>
            <img class='card-img-top ' src='{$row["image"]}' width='100' alt='Card image cap'>
            <div class='card-body'>
            <h5 class='card-title'>  {$row["title"]}</h5>
            <p class='card-text'>{$row["short_description"]} <br>
            <table class='table'>
                <tbody>
                    <tr>
                        <td>ISBN: </td>
                        <td>{$row["isbn"]} </td>
                    </tr>
                    <tr>
                        <td>Verlag: </td>
                        <td>{$row["publisher_name"]} </td>
                    </tr>
                    <tr>
                    <td>Verlagsadresse: </td>
                    <td>{$row["publisher_address"]} </td>
                </tr>
                <tr>
                        <td>Veröffentlichung: </td>
                        <td>{$row["publish_date"]} </td>
                </tr>
                <tr>
                    <td>Art: </td>
                    <td>{$row["type"]} </td>
                </tr>
                <tr>
                        <td>Status: </td>
                        <td>{$row["status"]} </td>
                </tr>

                </tbody>
            </table>
            



            <a href='index.php' class='btn btn-info'>Home</a>
            <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
            <a href='update.php?id={$row["id"]}' class='btn btn-primary'>Update</a>

            </div>
        </div>
        ";



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Fonts Pre Connect -->
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS Files Links -->
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="css/bootstrap.css">


  <!-- Title -->
  <title>Simple Page</title>
</head>
<body>
    
      
            <?php
                echo $body;
            ?>
   
  

  <noscript>Your browser don't support JavaScript!</noscript>
  <script src="./scripts.js"></script>
</body>
</html>