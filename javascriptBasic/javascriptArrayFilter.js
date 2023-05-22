// array filter in javascript

const products = [
    { id: 'id_1', price: 30 },
    { id: 'id_2', price: 233 },
    { id: 'id_3', price: 5 },
    { id: 'id_4', price: 499 }
];

const cheapProductsOnly = products.filter((product) => product.price <= 100);
console.log('output:', cheapProductsOnly);
// output: [
//     { id: 'id_1', price: 30 },
//     { id: 'id_3', price: 5 },
// ];
