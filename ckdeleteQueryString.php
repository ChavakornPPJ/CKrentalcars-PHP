<?php
    
    require('dataBaseCon.php');
       
   
    $id = $_GET["idcar"];

    $sql = "DELETE FROM ckcardb WHERE id = $id ";

    $result = mysqli_query($cont,$sql);

    if($result){

        Header("location:ckadminAccessData.php");
        exit(0);
        
    }else{

        echo "Error";
    }

    
    

?> 