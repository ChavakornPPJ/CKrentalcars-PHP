const showTypeCars = 
    [{
        imageNumber: 1,
        image: 'image/honda-accord.png' ,
        slideTypeCar: 'Sedan' ,
        slideTypeDetail: 'A sedan is a four-door car type with a traditional trunk',
    },
    {
        imageNumber: 2,
        image: 'image/honda-hrv.png' ,
        slideTypeCar: 'Crossover' ,
        slideTypeDetail: 'A crossover is often comes as two-wheel drive. It is basically an off-road car chassis.',
    },
    {
        imageNumber: 3,
        image: 'image/benz-g.png' ,
        slideTypeCar: 'SUVs' ,
        slideTypeDetail: 'The SUV is a large car that can often carry 5-7 passengers. They often have 4wd.',
    },
    {
        imageNumber: 4,
        image: 'image/audi-s3.png' ,
        slideTypeCar: 'Hatchback' ,
        slideTypeDetail: 'A Hatchback car is basically a mix of a sedan and a station wagon. They often come as a 5-door.',
    },
    {
        imageNumber: 5,
        image: 'image/volvo-v90.png' ,
        slideTypeCar: 'Wagon' ,
        slideTypeDetail: 'A wagon is quite similar to a sedan, but with an extended roofline with a hatch door instead of a trunk.',
    },
    {
        imageNumber: 6,
        image: 'image/chev.png' ,
        slideTypeCar: 'Coupe' ,
        slideTypeDetail: 'The coupe is a two-door car, very similar to the sedan but with two doors instead of four.',
    },
    {
        imageNumber: 7,
        image: 'image/toyota-tundra.png' ,
        slideTypeCar: 'Pickup Truck' ,
        slideTypeDetail: 'A pickup has an enclosed cab with an open cargo area.',
    },
    {
        imageNumber: 8,
        image: 'image/toyota-al.png' ,
        slideTypeCar: 'Minivan' ,
        slideTypeDetail: 'The minivan or multi-purpose vehicle (MPV) is a van, It often has 7 or 8 passenger seats.',
    },
    {
        imageNumber: 9,
        image: 'image/mazda-mx5.png' ,
        slideTypeCar: 'Roadster' ,
        slideTypeDetail: 'A roadster car is basically a convertible car, but with two doors, and it usually has no rear seat.',
    },
    {
        imageNumber: 10,
        image: 'image/volks.png' ,
        slideTypeCar: 'Van' ,
        slideTypeDetail: 'A Van is a two- or three-seater car model that is often used to transport goods.',
    },
    {
        imageNumber: 11,
        image: 'image/porsche911.png' ,
        slideTypeCar: 'Sports' ,
        slideTypeDetail: 'Sports cars usually have good handling with good road capabilities and a fairly powerful engine.',
    },
    {
        imageNumber: 12,
        image: 'image/ferrari488.png' ,
        slideTypeCar: 'Supercar' ,
        slideTypeDetail: 'The supercar is a high-performance car, usually with a very powerful and large engine. Most supercars are two-seater.',
    },
    {
        imageNumber: 13,
        image: 'image/bmw-z4.png' ,
        slideTypeCar: 'Convertible' ,
        slideTypeDetail: 'The convertible or cabriolet car models come with a retractable roof.',
    },
    {
        imageNumber: 14,
        image: 'image/fordm.png' ,
        slideTypeCar: 'Muscle' ,
        slideTypeDetail: 'Muscle cars are often older American cars with very large and powerful v8 or v10 engines.',
    },
    {
        imageNumber: 15,
        image: 'image/bently.png' ,
        slideTypeCar: 'Luxury' ,
        slideTypeDetail: 'They are often very expensive, and have all the latest features for a comfortable ride.',
    },
    {
        imageNumber: 16,
        image: 'image/limo.png' ,
        slideTypeCar: 'Limousine' ,
        slideTypeDetail: 'A limousine is a stretched car that is often used by celebrities and pop stars.',
    },

    ]

;

let showTypeCard = '';

showTypeCars.forEach((showCarObject) => {
    
    const {imageNumber,image,slideTypeCar,slideTypeDetail} = showCarObject
    console.log(showCarObject);
    
    const html = `

        <div class="swiper-slide">
            <div class="slide-img-box"><img class="slide-img${imageNumber}" src="${image}" /></div>
            <div class="slide-type-car">
                <p>${slideTypeCar}</p>
            
            </div>
            <div class="slide-type-detail">
                ${slideTypeDetail}
            </div>
            <div class="slide-button"><button class="bk-btn"><a class="Book-btn" href="c:/Carproject15/Html/CarRental Sedan rev1.html">Booking</a></button></div>
        </div>        
    
    `

     
    showTypeCard += html;

});
console.log(showTypeCard);

document.querySelector('.swiper-wrapper').innerHTML = showTypeCard;
    

            