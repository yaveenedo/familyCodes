// array reduce in javascript

const products = [
    { id: 'id_1', price: 30 },
    { id: 'id_2', price: 233 },
    { id: 'id_3', price: 5 },
    { id: 'id_4', price: 499 }
];

const groupedProducts = products.reduce((productsGroup, currentProduct) => {
    if (currentProduct.price > 100) return { ...productsGroup, expensive: [...productsGroup.expensive, currentProduct] };
    return { ...productsGroup, cheap: [...productsGroup.cheap, currentProduct] };
}, { expensive: [], cheap: [] });

const groupedProductsOneLiner = products.reduce((productsGroup, currentProduct) => (currentProduct.price > 100 ? { ...productsGroup, expensive: [...productsGroup.expensive, currentProduct] } : { ...productsGroup, cheap: [...productsGroup.cheap, currentProduct] }), { expensive: [], cheap: [] });

console.log('output:', groupedProducts);
// output: {
//     expensive: [
//         { id: 'id_2', price: 233 },
//         { id: 'id_4', price: 499 }
//     ],
//     cheap: [
//         { id: 'id_1', price: 30 },
//         { id: 'id_3', price: 5 }
//     ]
// }
