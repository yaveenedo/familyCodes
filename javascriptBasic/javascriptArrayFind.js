const javascriptArrayFind = () => {
    console.log('Array Find in JavaScript\n\n');

    const numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

    const evenNumberFound = numbers.find((number) => number % 2 === 0);
    console.log('even number found:', JSON.stringify(evenNumberFound));
    // even numbers only: 12

    const oddNumberFound = numbers.find((number) => number % 2 !== 0);
    console.log('odd number found:', JSON.stringify(oddNumberFound), '\n\n\n');
    // odd numbers only: 27

    // ======================================================================================================================================================

    console.log('Array of Objects Find in JavaScript\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const productFound = products.find((product) => product.id === 'id_2');
    console.log('product found:', JSON.stringify(productFound));
    // product found: {"id":"id_2","price":233}
};

export default javascriptArrayFind;
