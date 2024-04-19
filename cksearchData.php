<?php
        require('dataBaseCon.php');
        
        $careve = $_POST["everythingcar"];
    
        $sql = "SELECT * FROM ckcardb WHERE carname LIKE '%$careve%' || typecar LIKE '%$careve%' ORDER BY carname ASC ";

        $result = mysqli_query($cont,$sql);

        $count = mysqli_num_rows($result);
        $prior = 1; 

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CK Car Rental</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        </head>
        <body class="p-3 bg-dark text-white">
            <div class="container">
                <h1 class="text-center">CK Car Database</h1>
                <?php if($count>0){?>

                    <a href="ckadminAccessData.php" class="btn btn-primary">Go Back to CK DataBase</a>

                    <form action="cksearchData.php" class="mt-5" method="POST"> 
                        <label for="">Search Car</label>
                        <input type="text" placeholder="Input Car Name" name="everythingcar">
                        <input type="submit" value="Search" class="btn btn-primary mb-1 mx-2">
                    </form>

                    <table class="table table-striped table-dark" border="1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>CarName</th>
                                <th>TypeCar</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){?>
                                <tr>
                                    <td><?php echo $prior++ ;?></td>
                                    <td><?php echo $row["carname"] ;?></td>
                                    <td><?php echo $row["typecar"] ;?></td>
                                    <td><?php if($row["image"] !== ""){

                                                    echo "<h6 class='text-success''>Image has been success uploaded</h6>";

                                                }else{
                                                    echo "<h6 class='text-danger''>! Image has not been uploaded</h6>";
                                                };?>
                                        
                                        
                                    </td>

                                    <td>
                                      
                                        <?php if($row["status"] === "Available"){
                                                echo "<h5 class='btn btn-primary'>Available</h5>";
                                            }else{
                                                echo "<h5 class='btn btn-secondary'>Reserved</h5>";
                                            }
                                           
                                            ?>
                                    </td>
                                    <td>
                                                                       
                                        <a href="AvailableCar.php?idcar=<?php echo $row["id"].",".$row["status"] ;?>" class="btn btn-info">A/R</a> 

                                    </td>
                                    <td>
                                        <!-- ตัวแปรที่ถูกส่งไปหลัง ? = ค่าตัวแปร -->
                                        <a href="ckdeleteQueryString.php?idcar=<?php echo $row["id"] ;?>" class="btn btn-danger" onclick="return confirm('Do you want to delete information?')">Delete</a>
                                    </td>
                                    
                                    <td>
                                        <form action="ckmultipleDelete.php" method="post">
                                    
                                            <input type="checkbox" class="form-check-input" name="idcheckbox[]" value="<?php echo $row["id"]; ?>">
                                    </td>
                                    <td>
                                            <a href="ckeditForm.php?idedcar=<?php echo $row["id"] ;?>" class="btn btn-success">Edit</a>
                                    </td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                             
                                            <a href="ckinsertForm.php" class="btn btn-primary">Go to Input page</a>   
                                            <input type="submit" value="Delete Selected" class="btn btn-danger">
                                        </form> 
                    <button class="btn btn-success" onclick="checkAll()">Select all</button>
                    <button class="btn btn-danger" onclick="uncheckAll()">Cancel All Select</button>


                <?php }else{ ?> 

                    <div class="alert alert-primary" role="alert">
                        The information does not exist.
                    </div>

                <?php }?> 
                
                
            </div>

            <?php $_POST["everythingcar"] = ""; ?>
            
        </body>

        <script >
            
            function checkAll(){
                var formElement = document.forms[1].length; 
                console.log(formElement); 
                for(i=0;i<formElement-1;i++){
                document.forms[1].elements[i].checked=true;
                }
            }

            function uncheckAll(){
                var formElement = document.forms[1].length;
                console.log(formElement); 
                for(i=0;i<formElement-1;i++){
                document.forms[1].elements[i].checked=false;
                }
            }
            
            
        </script>
    </html>