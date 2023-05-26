const javascriptHttpRequest = async () => {
    console.log('HTTP Request in JavaScript\n\n');

    const makeHttpRequest = async () => {
        const response = await fetch('https://jsonplaceholder.typicode.com/todos/1');
        if (response.ok) {
            const result = await response.json();
            return result;
        }
        return null;
    };

    const httpRequestResult = await makeHttpRequest();
    console.log('httpRequestResult', JSON.stringify(httpRequestResult, null, ' '.repeat(4)));
    // httpRequestResult {
    //     "userId": 1,
    //     "id": 1,
    //     "title": "delectus aut autem",
    //     "completed": false
    // }
};

export default javascriptHttpRequest;
