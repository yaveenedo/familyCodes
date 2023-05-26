const javascriptFibonacci = () => {
    console.log('Fibonacci in JavaScript\n\n');

    const generateFibonacciUntil = (stopper = 5) => {
        let iterator = 0;
        let fibonacci = [0, 1];
        while (true) {
            if (iterator === stopper) break;
            const lastIndex = fibonacci.length - 1;
            const lastNumber = fibonacci[lastIndex];
            const secondLastNumber = fibonacci[lastIndex - 1];
            fibonacci = [...fibonacci, lastNumber + secondLastNumber];
            iterator += 1;
        }
        return fibonacci;
    };

    const generatedFibonacci = JSON.stringify(generateFibonacciUntil(10)).split(',').join(', ');
    console.log('fibonacci:', generatedFibonacci);
    // fibonacci: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
};

export default javascriptFibonacci;
