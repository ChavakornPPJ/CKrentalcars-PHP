    <?php
        
        require('dataBaseCon.php');
                

    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" >
            <title>CK Car Rental</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" >
            

            

            <link rel="stylesheet" href="<?php echo 'Css/sedanBookPagerev1.css' ?>">

            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:ital@1&family=Libre+Baskerville:wght@700&display=swap">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:ital@1&family=Libre+Baskerville:wght@700&family=Poppins&display=swap">

            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:ital@1&family=Libre+Baskerville:wght@700&family=Mukta:wght@800&family=Oxygen:wght@700&family=Poppins&display=swap">
        
        
        </head>

        <body>
        
            <div class="Menu-bar">
                <div class="Menu-logo">CK Car Rent


                </div>
                <div class="Home-content">
                    <div class="Home"><a class="Home-tap" target="_parent" href="index.php">Home</a></div>
                    <div class="Cars"><a class="Cars-tap" target="_parent" href="ckcarRentalrev3.php">Cars</a></div>
                    <div class="Contact">Contact</div>
                </div>
                
            </div>
         
            <form action="" method="POST" class="dl">
            
                <label class="changeDrop" for="">Change Car Type</label>
                
                <select class="menuTypeCar" name="cartypeList" id="" onchange="
                                                                                    selectedTypeCar();
              
                                                                                ">
                    
                    <option class="optionTypeCar" value="Cartype">Car Type</option>
                    <option class="optionTypeCar" value="Sedan">Sedan</option>
                    <option class="optionTypeCar" value="Crossover">Crossover</option>
                    <option class="optionTypeCar" value="SUVs">SUVs</option>
                    <option class="optionTypeCar" value="Hatchback">Hatchback</option>
                    <option class="optionTypeCar" value="Wagon">Wagon</option>
                    <option class="optionTypeCar" value="Coupe">Coupe</option>
                    <option class="optionTypeCar" value="PickupTruck">Pickup Truck</option>
                    <option class="optionTypeCar" value="Minivan">Minivan</option>
                    <option class="optionTypeCar" value="Van">Van</option>
                    <option class="optionTypeCar" value="Roadster">Roadster</option>
                    <option class="optionTypeCar" value="Sports">Sports</option>
                    <option class="optionTypeCar" value="Supercar">Supercar</option>
                    <option class="optionTypeCar" value="Convertible">Convertible</option>
                    <option class="optionTypeCar" value="Muscle">Muscle</option>
                    <option class="optionTypeCar" value="Luxury">Luxury</option>
                    <option class="optionTypeCar" value="Limousine">Limousine</option>
                    
                                       
                </select>

                <button type="submit" value="" name="btntypeCar" class="btn-t-c">Select Type</button>

            </form>    
            
            <div class="Booking-page">
                  

                <div class="card-show">

                        
                   
                        <?php 

                            $tCar_arr = array("CarType","Sedan","Crossover","SUVs","Hatchback","Wagon","Coupe","PickupTruck","Minivan","Van","Roadster","Sports","Supercar","Convertible","Muscle","Luxury","Limousine");
                            
                            $tCar = $_POST["cartypeList"];
                        
                            if(in_array($tCar,$tCar_arr)){

                                
                                $sql = "SELECT * FROM ckcardb WHERE typecar LIKE '%$tCar%' ORDER BY carname ASC ";
                                $result = mysqli_query($cont,$sql); 
                                
                                $count = mysqli_num_rows($result);
                                $prior = 1; ?>
                                
                                <?php if($count>0){?>
                                    

                                        <?php while ($row = mysqli_fetch_assoc($result)){?>

                                            <div class="card-Sedan">
                                                
                                                <form action="ckbooksPageCar.php?idbooks=<?php echo $row["id"]; ?>" method="POST" class="card-btn-form">
                                                    <div class="car-image-box">
                                                        <img class="car-image" src="image15/<?php echo $row["image"]; ?>"  alt="">
                                                        <input type="hidden" value="<?php echo $row["image"]; ?>">
                                                    </div>
                                                    
                                                    
                                                    <div class="card-carname">
                                                        <?php echo $row["carname"]; ?>
                                                        <input type="hidden" value="<?php echo $row["carname"]; ?>">
                                                    </div>
                                                    <div class="card-type-car">
                                                        <?php echo $row["typecar"]; ?>
                                                        <input type="hidden" value="<?php echo $row["typecar"]; ?>">
                                                    </div>
                                                    
                                                    <button type="submit" name="booksbtn" class="card-bk-btn" onclick=" bookingID(); ">Books</button>   
                                            
                                                    
                                                </form>

                                            </div>
                                            
                                            
                                        <?php } ?>
                                        
                                        
                                        
                                <?php }else{ ?>
                                    
                                        <div>
                                            The information does not exist.
                                        </div>
                                    
                                <?php } ?>    

                            <?php }else if (in_array('CarType',$tCar_arr)) { ?>
                                    
                                <div>
                                    You can select Cartype from above droplist.
                                </div>
                                                                            
                            <?php }else { ?>

                                <h5>Occured an error!</h5>
                            
                        <?Php } ?>
                           
                </div>
                                
            </div>
        
        </body>
        <script src="js/selectedType.js">

        </script>
    </html>
