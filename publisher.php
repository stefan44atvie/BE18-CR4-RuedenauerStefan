<?php
    require "includes/db_connect.php";

    $id=$_GET["author"];


    $sql="SELECT * FROM `newlibrary` WHERE author_last_name like '$id'";
    $result = mysqli_query ($connect, $sql);
    $layout ="";

    if (mysqli_num_rows ($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $layout .= "
            
                    <tr>
                    <td><a class='btn btn-info' href='details.php?id={$row["id"]}'>Details</a></td>
                    <td>{$row["title"]}</td>
                    <td><img src='{$row["image"]}' width='150'></img></td>

                    <td>{$row["author_first_name"]} {$row["author_last_name"]}</td>
                    <td>{$row["short_description"]}</td>
                   
                    <td>{$row["type"]}</td>
                    <td>{$row["status"]}</td>
                </tr>  
                ";
        };
    }else{
        $layout .= "no result";        
    };




?>
<!DOCTYPE html> <html lang="en">
<neady <meta charset="UTF-8"y
‹meta http-equiv="X-UA-Compatible" content="IE-edge")
<meta name="viewport" content="width-device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/bootstrap.css">

</head> 
<body>
<!-- <div class="container"> -->
<table class="table table-striped thead-dark">
  <thead>
    <tr>
      <th scope="col">Options</th>
      <th scope="col">Titel</th>
      <th scope="col">Bild</th>
      <th scope="col">Autor</th>
      <th scope="col">Inhaltsangabe</th>
      <th scope="col">Art</th>
      <th scope="col">Status des Titels</th>
    </tr>
  </thead>
  <tbody>
       
        <?php
            echo $layout;
            ?>
        
  </tbody>
</table>
<a class='btn btn-secondary' href='create.php'>Create New entry</a>
<a class='btn btn-info' href='index.php'>Home</a>

<!-- </div> -->

</bodv> 
</html>