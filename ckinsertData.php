<?php

    

    require('dataBaseCon.php');
    
    
    $carname = $_POST["carname"];
    
    $typecar = $_POST["typecar"];

    $targetI = "image15/";

  
    if(isset($_POST["submit"])){
        if(!empty($_FILES["file"]["name"])){
            $fileName = basename($_FILES['file']['name']);
            $tempName = $_FILES['file']['tmp_name'];
            $targetFilePath = $targetI.$fileName;
            $fileType = pathinfo($targetFilePath , PATHINFO_EXTENSION);
            
            $allowType = array('jpg','png','jpeg');
            if(in_array($fileType,$allowType)){
                if(move_uploaded_file($tempName,$targetFilePath)){
                    $sql = "INSERT INTO ckcardb (carname,typecar,image) VALUES ('$carname','$typecar','$fileName')";
                    $result = mysqli_query($cont,$sql);

                    if($result){

                        Header("location:ckadminAccessData.php");
                        exit(0);
                        
                    }else{
                
                        echo "Error";
                    }
                }
            }
        }
    }
    
        
        

   



?>