<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>CK Car Rental</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="<?php echo 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' ;?>" >
  <link rel="stylesheet" href="<?php echo 'Css/carstyle.css' ; ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:ital@1&family=Libre+Baskerville:wght@700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:ital@1&family=Libre+Baskerville:wght@700&family=Poppins&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
    
    <div class="project">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/honda-accord.png" ></div>
            <div class="slide-type-car">
              <p>Sedan</p>
              
            </div>
            <div class="slide-type-detail">
              A sedan is a four-door car type with a traditional trunk
            </div>
            <form action="carsinStockrev3.php" method="POST">

              <input type="hidden" name="cartypeList" value="Sedan">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
            
          </div>
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/honda-hrv.png"></div>
            <div class="slide-type-car">
              <p>Crossover</p>
              
            </div>
            <div class="slide-type-detail">
              A crossover is often comes as two-wheel drive. It is basically an off-road car chassis
            </div>
            <form action="carsinStockrev3.php" method="POST">

              <input type="hidden" name="cartypeList" value="Crossover">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/toyota-f2.png"></div>
            <div class="slide-type-car">
              <p>SUVs</p>
              
            </div>
            <div class="slide-type-detail">
              The SUV is a large car that can often carry 5-7 passengers. They often have 4wd. 
            </div>
            <form action="carsinStockrev3.php" method="POST">

              <input type="hidden" name="cartypeList" value="SUVs">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/mazda3-h1.png"></div>
            <div class="slide-type-car">
              <p>Hatchback</p>
              
            </div>
            <div class="slide-type-detail">
              A Hatchback car is basically a mix of a sedan and a station wagon. They often come as a 5-door.
            </div>
            <form action="carsinStockrev3.php" method="POST">

              <input type="hidden" name="cartypeList" value="Hatchback">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/volvo-w2.png" ></div>
            <div class="slide-type-car">
              
              <p>Wagon</p>
              
            </div>
            <div class="slide-type-detail">
              A wagon is quite similar to a sedan, but with an extended roofline with a hatch door instead of a trunk.
            </div>
            <form action="carsinStockrev3.php" method="POST">

              <input type="hidden" name="cartypeList" value="Wagon">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/chev.png" ></div>
            <div class="slide-type-car">
              
              <p>Coupe</p>
              
            </div>
            <div class="slide-type-detail">
              The coupe is a two-door car, very similar to the sedan but with two doors instead of four.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Coupe">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/toyota-tundra.png" ></div>
            <div class="slide-type-car">
              <p>Pickup Truck</p>
              
            </div>
            <div class="slide-type-detail">
              A pickup has an enclosed cab with an open cargo area.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="PickupTruck">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="sl-image-box"><img class="sl-image" src="image/toyota-al.png" ></div>
            <div class="slide-type-car">
              <p>Minivan</p>
              
            </div>
            <div class="slide-type-detail">
              The minivan or multi-purpose vehicle (MPV) is a van, It often has 7 or 8 passenger seats.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Minivan">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/mazda-mx5.png" ></div>
              <p>Van</p>
              
            </div>
            <div class="slide-type-detail">
              A Van is a two- or three-seater car model that is often used to transport goods.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Van">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/volks.png" ></div>
              <p>Roadster</p>
              
            </div>
            <div class="slide-type-detail">
              
              A roadster car is basically a convertible car, but with two doors, and it usually has no rear seat.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Roadster">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/porsche911.png" ></div>
              <p>Sports</p>
              
            </div>
            <div class="slide-type-detail">
              Sports cars usually have good handling with good road capabilities and a fairly powerful engine.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Sports">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/ferrari488.png" ></div>
              <p>Supercar</p>
              
            </div>
            <div class="slide-type-detail">
              The supercar is a high-performance car, usually with a very powerful and large engine. Most supercars are two-seater.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Supercar">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          
          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/bmw-z4.png" ></div>
              <p>Convertible</p>
              
            </div>
            <div class="slide-type-detail">
              The convertible or cabriolet car models come with a retractable roof. 
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Convertible">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/fordm.png" ></div>
              <p>Muscle</p>
              
            </div>
            <div class="slide-type-detail">
              Muscle cars are often older American cars with very large and powerful v8 or v10 engines. 
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Muscle">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>

          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/bently.png" ></div>
              <p>Luxury</p>
              
            </div>
            <div class="slide-type-detail">
              They are often very expensive, and have all the latest features for a comfortable ride.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Luxury">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          <div class="swiper-slide">
            <div class="slide-type-car">
              <div class="sl-image-box"><img class="sl-image" src="image/limo.png" ></div>
              <p>Limousine</p>
              
            </div>
            <div class="slide-type-detail">
              A limousine is a stretched car that is often used by celebrities and pop stars.
            </div>
            <form action="carsinStockrev2.php" method="POST">

              <input type="hidden" name="cartypeList" value="Limousine">
              <div class="slide-button"><button class="bk-btn">Booking</button></div>

            </form>
          </div>
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  
    

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="js/carRentalrev1.js"></script>
  

    
  
</body>

</html>
