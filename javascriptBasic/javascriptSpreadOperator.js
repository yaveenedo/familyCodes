const javascriptSpreadOperator = () => {
    console.log('Array Spread Operator in Javascript\n\n');

    const fruitsInMyRefrigerator = ['apple', 'mango', 'orange'];
    const fruitsIBoughtFromSupermarket = ['melon', 'banana'];
    const myFruits = [...fruitsInMyRefrigerator, ...fruitsIBoughtFromSupermarket];
    console.log(`my fruits: ${JSON.stringify(myFruits)}\n\n\n`);
    // my fruits: ["apple","mango","orange","melon","banana"]

    // ======================================================================================================================================================

    console.log('Object Spread Operator in Javascript\n\n');

    const car = { 'wheels': 4, 'tires': 4 };

    const minivanCar = { ...car, 'doors': 4 };
    console.log(`minivan car: ${JSON.stringify(minivanCar)}\n\n`);
    // sports car: {"wheels":4,"tires":4,"doors":4}

    const sportsCar = { ...car, 'doors': 2 };
    console.log(`sports car: ${JSON.stringify(sportsCar)}\n\n`);
    // sports car: {"wheels":4,"tires":4,"doors":2}

    const redSportsCar = { ...car, 'doors': 2, 'color': 'red' };
    console.log(`red sports car: ${JSON.stringify(redSportsCar)}`);
    // red sports car: {"wheels":4,"tires":4,"doors":2,"color":"red"}
};

export default javascriptSpreadOperator;
