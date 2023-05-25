const javascriptCurryingFunction = () => {
    console.log('Currying Function in Javascript\n\n');

    const exponent = (a) => (b) => a ** b;

    const exponent2 = exponent(2);
    console.log('exponent2(1):', exponent2(1));
    console.log('exponent2(2):', exponent2(2));
    console.log('exponent2(3):', exponent2(3));
    console.log('exponent2(4):', exponent2(4));
    console.log('exponent2(5):', exponent2(5));
    console.log('exponent2(6):', exponent2(6));

    const exponent3 = exponent(3);
    console.log('exponent3(1):', exponent3(1));
    console.log('exponent3(2):', exponent3(2));
    console.log('exponent3(3):', exponent3(3));
    console.log('exponent3(4):', exponent3(4), '\n\n');

    // exponent2(1): 2
    // exponent2(2): 4
    // exponent2(3): 8
    // exponent2(4): 16
    // exponent2(5): 32
    // exponent2(6): 64
    // exponent3(1): 3
    // exponent3(2): 9
    // exponent3(3): 27
    // exponent3(4): 81

    // ======================================================================================================================================================

    const animals = [
        { id: 'animal_1', name: 'penguin' },
        { id: 'animal_2', name: 'elephant' },
        { id: 'animal_3', name: 'koala' },
        { id: 'animal_4', name: 'dog' },
        { id: 'animal_5', name: 'cat' },
        { id: 'animal_6', name: 'panda' },
    ];

    const showAnimalLink = (animalName) => () => console.log(`click here to view ${animalName}: https://unsplash.com/s/photos/${animalName}`);

    const animalsWithOnClickFunction = animals.map((animal) => ({ ...animal, show: showAnimalLink(animal.name) }));
    animalsWithOnClickFunction[0].show();
    animalsWithOnClickFunction[4].show();

    // click here to view penguin: https://unsplash.com/s/photos/penguin
    // click here to view cat: https://unsplash.com/s/photos/cat
};

export default javascriptCurryingFunction;
