const javascriptArrayFilter = () => {
    console.log('array filter in javascript');
    
    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];
    
    const cheapProductsOnly = products.filter((product) => product.price <= 100);
    const cheapProductsOnlyFormatted = JSON.stringify(cheapProductsOnly, null, ' '.repeat(4));
    console.log('output:', cheapProductsOnlyFormatted);
    // output: [
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
