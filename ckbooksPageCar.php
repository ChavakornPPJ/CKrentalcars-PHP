    <?php
        
        require('dataBaseCon.php');

        $idbooksCar = $_GET["idbooks"];

        $sql = "SELECT * FROM ckcardb WHERE id = $idbooksCar ";

        $result = mysqli_query($cont,$sql);

        $row = mysqli_fetch_assoc($result);



    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>CK Car Rental</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
            

            

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
                    <div class="Cars"><a class="Cars-tap" target="_parent" href="ckcarRentalrev1.php">Cars</a></div>
                <div class="Contact">Contact</div>
                </div>
                
            </div>
            <div class="books-Order">

                <?php 

                    

                    $booksBtn = $_POST["booksbtn"]; 
                    
                    if(isset($booksBtn)){ ?>

                                     
                        <div class="bookingOrderDis">

                            <img class="books-img" src="image15/<?php echo $row["image"] ?>" alt="">

                            <div class="carname-topic">
                                
                                <button class="carname-head">Your Order Carname :</button>
                                
                            </div>
                            
                            <h1 class="books-carname"><?php echo $row["carname"] ?></h1>

                            <div class="typecar-topic">
                                
                                <button class="typecar-head">Your Order Cartype :</button>
                                
                            </div>
                           

                            <h1 class="books-typecar"><?php echo $row["typecar"] ?></h1>
                            

                        </div>


                <?php } ?>
                
                <div class="booksProcess">

                

                    <div class="detailBooks-head">
                        
                        Booking Process

                    </div>
                    <div>

                        
                        <input type="hidden" value="" class="test-books">

                    </div>
                    <form class="typeCusDetails" action="cksummaryBooking.php" method="POST">

                        <div class="books-fname">
                            <label for="">First Name :</label>
                            <input class="typeFname" type="text" placeholder="Type Your First Name">
                        </div>
                        <div class="books-lname">
                            <label for="">Last Name :</label>
                            <input class="typeLname" type="text" placeholder="Type Your Last Name">
                        </div>
                        <div class="books-email">
                            <label for="">Email :</label>
                            <input class="typeEmail" type="text" placeholder="Type Your E-mail">
                        </div>
                        <div class="books-mobile">
                            <label for="">Mobile :</label>
                            <input class="typeMobile" type="text" placeholder="Type Your Mobile-Numbers">
                        </div>
                        <div class="renral-location">
                            <label for="">Rental Location :</label>
                            <input class="typePickupLo" type="text" placeholder="Where do you want to pickup car?">
                            
                        </div>
                        <div class="pickupDate">
                            <label for="">Pick Up Date :</label>
                            <input class="pickupCalendar" type="Date">
                        </div>
                        <div class="pickupTime">
                            <label for="">Pick Up Time :</label>
                            <input class="pickupT" type="time">
                        </div>
                        <div class="returnDate">
                            <label for="">Return Date :</label>
                            <input class="returnCalendar" type="Date">
                        </div>
                        <div class="returnTime">
                            <label for="">Return Time :</label>
                            <input class="returnT" type="time">
                        </div>
                        

                        <button type="submit" class="btn-cf-booking">Confirm Booking</button>

                    </form>        
                    

                </div>

            </div>
        
        </body>
        <script src="js/testB.js">

             

        </script>
    </html>
