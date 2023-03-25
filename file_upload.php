<?php 
    // $_FILES["picture"];
    function file_upload(){
        $result = new stdClass();
        $result->fileName = "product.jpg";
        $result->error = 1;
        $fileName = $picture["picname"];
        $fileType = $picture["type"];
        $fileError = $picture["error"];
        $fileSize = $picture["size"];
        $fileTempName = $picture ["tmp_name"];

        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $filesAllowed = ["png", "jpg", "jpeg"];

        if($fileError == 4){
            # no picture selected
            $result->errorMessage = "No picture chosen";
            return $result;
        }else{
            #picture selected
            if(in_array($fileExtension, $filesAllowed)){
                if($fileError == 0){
                    if($fileSize < 500000){
                        # continue
                        $fileNewName = uniqid("") . "." . $fileExtension;
                        $to = "../pictures/$fileNewName";
                        if(move_uploaded_file($fileTempName, $to)){
                            $result->errorMessage = "file uploaded successfully";
                            $result->fileName = $fileNewName;
                            return $result;
                        }
                    }else{
                        $result->errorMessage="file size too big <br>";
                        return $result;
                    }
                }else{
                    $result->errorMessage = "there was an error while uploading the file $fileError";
                    return $result;
                }
            }else{
                $result->errorMessage = "This file cant be uploaded";
                return $result;
            }
        }

        }

        
    
?>