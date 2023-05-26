const javascriptComposePipeFunctions = () => {
    console.log('Compose & Pipe Functions in JavaScript\n\n');

    // Functional Programming, often uses pipe and compose = higher order functions
    // A higher order is any function which takes a function as an argument, returns a function, or both.
    // Here's how a compose function works:

    // Start with small unary (one argument) functions
    const add2 = (x) => x + 2;
    const subtract1 = (x) => x - 1;
    const multiplyBy5 = (x) => x * 5;

    // Notice how the functions execute from inside to outside / from right to left
    const withoutComposeOrPipeResult = multiplyBy5(subtract1(add2(4)));
    console.log('withoutComposeOrPipeResult:', withoutComposeOrPipeResult);
    // withoutComposeOrPipeResult: 25

    // The above is NOT a compose or pipe function - let's make one

    // compose execute functions from right to left
    const compose = (...functions) => (value) => functions.reduceRight((currentResult, currentFunction) => currentFunction(currentResult), value);

    const composeResult = compose(multiplyBy5, subtract1, add2)(4);
    console.log('composeResult:', composeResult);
    // composeResult: 25

    // pipe execute functions from left to right
    const pipe = (...functions) => (value) => functions.reduce((currentResult, currentFunction) => currentFunction(currentResult), value);
    const pipeResult = pipe(add2, subtract1, multiplyBy5)(4);
    console.log('pipeResult:', pipeResult);
    // pipeResult: 25

    // example with a 2nd argument
    const divideBy = (divisor, numberToBeDivided) => numberToBeDivided / divisor;

    const pipeResult2 = pipe(add2, subtract1, multiplyBy5, (x) => divideBy(2, x))(5);
    console.log('pipeResult2:', pipeResult2);
    // pipeResult2: 15

    // example with currying the divideBy function for a custom unary function
    const divideByCurried = (divisor) => (numberToBeDivided) => numberToBeDivided / divisor;
    const divideBy2 = divideByCurried(2);

    const pipeResult3 = pipe(add2, subtract1, multiplyBy5, divideBy2)(5);
    console.log('pipeResult3:', pipeResult3);
    // pipeResult3: 15
};

export default javascriptComposePipeFunctions;
