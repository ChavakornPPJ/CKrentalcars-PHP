<?php

    require('dataBaseCon.php');

    $idAndStatus = $_GET["idcar"];

    $iAs = explode(",",$idAndStatus);

    

    if($iAs[1] === 'Available'){
        
        $sql = "UPDATE ckcardb SET status = 'Reserved' WHERE id = $iAs[0] ";
        
    }else{
        
        $sql = "UPDATE ckcardb  SET status = 'Available' WHERE id = $iAs[0] ";
    }

    

    $result = mysqli_query($cont,$sql);

        if($result){

            Header("location:ckadminAccessData.php");
            exit(0);
            
        }else{

            echo "Error";
        }

?>