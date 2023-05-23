const javascriptArrayMap = () => {
    console.log('array map in javascript');
    
    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];
    
    const productsLabeled = products.map((product) => ({ ...product, label: product.price > 100 ? 'expensive' : 'cheap' }));
    const productsLabeledFormatted = JSON.stringify(productsLabeled, null, ' '.repeat(4));
    console.log('output:', productsLabeledFormatted);
    // output: [
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
}

export default javascriptArrayMap;
