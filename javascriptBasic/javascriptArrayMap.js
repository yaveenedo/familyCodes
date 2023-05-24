const javascriptArrayMap = () => {
    console.log('Array Map in Javascript\n\n');

    const numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];
    const numbersLabeled = numbers.map((number) => ({ [number]: number % 2 === 0 ? 'even' : 'odd' }));
    console.log('labeled numbers:', JSON.stringify(numbersLabeled), '\n\n\n');
    // labeled numbers: [{"12":"even"},{"34":"even"},{"27":"odd"},{"23":"odd"},{"65":"odd"},{"93":"odd"},{"36":"even"},{"87":"odd"},{"4":"even"},{"254":"even"}]

    // ======================================================================================================================================================

    console.log('Array of Objects Map in Javascript\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const productsLabeled = products.map((product) => ({ ...product, label: product.price > 100 ? 'expensive' : 'cheap' }));
    const productsLabeledFormatted = JSON.stringify(productsLabeled, null, ' '.repeat(4));
    console.log('labeled products:', productsLabeledFormatted);
    // labeled products: [
    //     {
    //         "id": "id_1",
    //         "price": 30,
    //         "label": "cheap"
    //     },
    //     {
    //         "id": "id_2",
    //         "price": 233,
    //         "label": "expensive"
    //     },
    //     {
    //         "id": "id_3",
    //         "price": 5,
    //         "label": "cheap"
    //     },
    //     {
    //         "id": "id_4",
    //         "price": 499,
    //         "label": "expensive"
    //     }
    // ]
};

export default javascriptArrayMap;
