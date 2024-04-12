<?php

    require('dataBaseCon.php');

    $id_arr = $_POST["idcheckbox"];

    $multiple_id = implode(",",$id_arr);

    //in = หลายตัว
    $sql = "DELETE FROM ckcardb WHERE id in ($multiple_id) ";

    $result = mysqli_query($cont,$sql);

    if($result){

        Header("location:ckadminAccessData.php");
        exit(0);
        
    }else{

        echo "Error";
    }



?>