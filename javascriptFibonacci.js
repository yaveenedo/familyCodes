const generateFibonacciUntil = (stopper = 5) => {
    let iterator = 0;
    let fibonacci = [0, 1];
    while (true) {
        if (iterator === stopper) break;
        const lastIndex = fibonacci.length - 1;
        lastNumber = fibonacci[lastIndex];
        secondLastNumber = fibonacci[lastIndex - 1];
        fibonacci = [...fibonacci, lastNumber + secondLastNumber];
        iterator += 1;
    }
    return fibonacci;
};

console.log('output:', JSON.stringify(generateFibonacciUntil(10)).split(',').join(', '));
// output: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
