const javascriptDecoratorFunction = () => {
    console.log('Decorator Function in JavaScript\n\n');

    const ONE_SECOND = 1_000;

    const sleepFor = (sleepDurationInSeconds) => {
        const startTimeInMilliseconds = new Date().getTime();
        const delayInMilliseconds = sleepDurationInSeconds * ONE_SECOND;
        while (new Date().getTime() < startTimeInMilliseconds + delayInMilliseconds);
    };

    const measureFunctionExecutionTime = (aFunction) => {
        const wrapper = () => {
            const startTimeInMilliseconds = Date.now();
            aFunction();
            const finishTimeInMilliseconds = Date.now();
            const executionTimeInSeconds = (finishTimeInMilliseconds - startTimeInMilliseconds) / ONE_SECOND;
            console.log(`took ${executionTimeInSeconds} seconds to execute`);
        };
        return wrapper;
    };

    const dummyFunction1 = measureFunctionExecutionTime(() => {
        sleepFor(3.7);
        console.log('dummyFunction1 ran');
    });
    const dummyFunction2 = measureFunctionExecutionTime(() => {
        sleepFor(4.4);
        console.log('dummyFunction2 ran');
    });
    const dummyFunction3 = measureFunctionExecutionTime(() => {
        sleepFor(1.6);
        console.log('dummyFunction3 ran');
    });

    dummyFunction1();
    dummyFunction2();
    dummyFunction3();

    // dummyFunction1 ran
    // took 3.7 seconds to execute
    // dummyFunction2 ran
    // took 4.4 seconds to execute
    // dummyFunction3 ran
    // took 1.6 seconds to execute
};

export default javascriptDecoratorFunction;
