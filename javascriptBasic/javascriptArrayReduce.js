const javascriptArrayReduce = () => {
    console.log('Array Reduce in JavaScript\n\n');

    const todayMoneySpents = [4.99, 15, 9.99, 999.9, 2, 60];
    const todayMoneySpentsTotal = todayMoneySpents.reduce((totalMoneySpent, currentMoneySpent) => totalMoneySpent + currentMoneySpent, 0);
    console.log('total money spent today:', todayMoneySpentsTotal, '\n\n\n');
    // total money spent today: 1091.8799999999999

    // ======================================================================================================================================================

    console.log('Array of Objects Reduce in JavaScript\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const groupedProducts = products.reduce((productsGroup, currentProduct) => (currentProduct.price > 100 ? { ...productsGroup, expensive: [...productsGroup.expensive, currentProduct] } : { ...productsGroup, cheap: [...productsGroup.cheap, currentProduct] }), { expensive: [], cheap: [] });
    const groupedProductsFormatted = JSON.stringify(groupedProducts, null, ' '.repeat(4));
    console.log('grouped products:', groupedProductsFormatted);
    // grouped products: {
    //     "expensive": [
    //         {
    //             "id": "id_2",
    //             "price": 233
    //         },
    //         {
    //             "id": "id_4",
    //             "price": 499
    //         }
    //     ],
    //     "cheap": [
    //         {
    //             "id": "id_1",
    //             "price": 30
    //         },
    //         {
    //             "id": "id_3",
    //             "price": 5
    //         }
    //     ]
    // }
};

export default javascriptArrayReduce;
