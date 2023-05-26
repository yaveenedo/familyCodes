const javascriptArrayFilter = () => {
    console.log('Array Filter in JavaScript\n\n');

    const numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

    const evenNumbersOnly = numbers.filter((number) => number % 2 === 0);
    console.log('even numbers only:', JSON.stringify(evenNumbersOnly));
    // even numbers only: [12,34,36,4,254]

    const oddNumbersOnly = numbers.filter((number) => number % 2 !== 0);
    console.log('odd numbers only:', JSON.stringify(oddNumbersOnly), '\n\n\n');
    // odd numbers only: [27,23,65,93,87]

    // ======================================================================================================================================================

    console.log('Array of Objects Filter in JavaScript\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const cheapProductsOnly = products.filter((product) => product.price <= 100);
    const cheapProductsOnlyFormatted = JSON.stringify(cheapProductsOnly, null, ' '.repeat(4));
    console.log('cheap products only:', cheapProductsOnlyFormatted);
    // cheap products only: [
    //     {
    //         "id": "id_1",
    //         "price": 30
    //     },
    //     {
    //         "id": "id_3",
    //         "price": 5
    //     }
    // ]
};

export default javascriptArrayFilter;
