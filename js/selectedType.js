
function selectedTypeCar(){

    const selectType = document.querySelector('.menuTypeCar').value;
    let typeofCar = document.querySelector('.btn-t-c');
    
    
    if(selectType === 'Sedan'){

        typeofCar.innerHTML = 'Go to Sedan';
        

    }else if (selectType === 'Crossover'){

        typeofCar.innerHTML = 'Go to Crossover';

    }else if (selectType === 'SUVs'){

        typeofCar.innerHTML = 'Go to SUVs';

    }else if (selectType === '5'){

        typeofCar.innerHTML = 'Go to Hatchback';

    }else if (selectType === '6'){

        typeofCar.innerHTML = 'Go to Wagon';

    }else if (selectType === '7'){

        typeofCar.innerHTML = 'Go to Coupe';

    }else if (selectType === '8'){

        typeofCar.innerHTML = 'Go to Pickup Truck';

    }else if (selectType === '9'){

        typeofCar.innerHTML = 'Go to Minivan';

    }else if (selectType === '10'){

        typeofCar.innerHTML = 'Go to Van';

    }else if (selectType === '11'){

        typeofCar.innerHTML = 'Go to Roadster';

    }else if (selectType === '12'){

        typeofCar.innerHTML = 'Go to Sports';

    }else if (selectType === '13'){

        typeofCar.innerHTML = 'Go to Supercar';

    }else if (selectType === '14'){

        typeofCar.innerHTML = 'Go to Convertible';

    }else if (selectType === '15'){

        typeofCar.innerHTML = 'Go to Muscle';

    }else if (selectType === '16'){

        typeofCar.innerHTML = 'Go to Luxury';

    }else if (selectType === '17'){

        typeofCar.innerHTML = 'Go to Limousine';

    }else{

        typeofCar.innerHTML = 'Car Type';

    }

    return selectType;
    
}


