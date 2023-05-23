const javascriptSpreadOperator = () => {
    console.log('spread operator in Javascript');

    const fruitsInMyRefrigerator = ['apple', 'mango', 'orange'];
    const fruitsIBoughtFromSupermarket = ['melon', 'banana'];
    const myFruits = [...fruitsInMyRefrigerator, ...fruitsIBoughtFromSupermarket];
    console.log(`my fruits: ${JSON.stringify(myFruits)}`);
    // my fruits: ["apple","mango","orange","melon","banana"]

    const myOrder = {
        'item' : 'apple',
        'quantity' : '5kg',
        'total_amount_to_pay' : 7.9
    };

    const paidOrder = {
        'is_paid' : true
    };

    const myPaidOrder = {
        ...myOrder,
        ...paidOrder
    };

    console.log(`my paid order: ${JSON.stringify(myPaidOrder)}`);
    // my paid order: {"item":"apple","quantity":"5kg","total_amount_to_pay":7.9,"is_paid":true}
};

export default javascriptSpreadOperator;
