<?php


    $db_host = "localhost";
    $db_user = "id22035164_ckcardtb";
    $db_password = "Grand_572";
    $db_name = "id22035164_ckcar";
    


    $cont = mysqli_connect($db_host,$db_user,$db_password,$db_name);

    if($cont){

        echo "Complete connected"."<br>";
        
    }   
?>