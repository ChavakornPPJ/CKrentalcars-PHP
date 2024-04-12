<?php

    include ('dataBaseCon.php');

    //file upload

    $targetI = "image15/";
    

    
    

    if (isset($_POST["image"])){
        if(!empty($_FILES['file']['name'])){
            $fileName = basename($_FILES['file']['name']);
            $tempName = $_FILES['file']['tmp_name'];
            $targetFilePath = $targetI.$fileName;
            $fileType = pathinfo($targetFilePath , PATHINFO_EXTENSION);
            
            $allowType = array('jpg','png','jpeg');
            if(in_array($fileType,$allowType)){
                if(move_uploaded_file($tempName,$targetFilePath)){
                    $sql = "INSERT INTO ckcardb (image) VALUES ('$fileName')";
                    $result = mysqli_query($cont,$sql);

                    if($result){
                        
                        echo "<h2>success</h2>";
                    }else{
                        echo mysqli_error($cont);

                    }
                }
            }
            
        }else{
            
        }
        
        

    }
    
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <label for="Image">Upload Car Image</label>
        <input type="file" name="file" class="form-control ">
        
        <button type="submit" name="submit" class="btn btn-primary mt-3 p-1" >Upload</button>
        <button type="reset" name="reset" class="btn btn-danger mt-3 p-1">Delete Info</button>
        
        
        

    </form>
</body>
</html>-->
