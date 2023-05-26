const javascriptOptionalChaining = () => {
    console.log('Optional Chaining in JavaScript\n\n');

    const dataDictionary = {
        'foo': {
            'bar': {
                'buzz': 'lightyear'
            },
            'baz': {
                'asd': 2023,
                'zxc': [
                    { 'patrick': 'star' },
                    { 'spongebob': 'squarepants' }
                ],
                'qwe': ['john', 'sarah']
            }
        },
        'hello': {
            'world': 'hello world',
        },
    };

    // In JavaScript, if an object property doesn't exist, the value will be undefined, and sometimes it throws an error. To suppress the error, we use Optional Chaining (?.).

    const optionalChainingResult1 = dataDictionary?.foo?.bar?.baz;
    console.log('optional chaining result 1:', optionalChainingResult1);
    // optional chaining result 1: undefined

    const optionalChainingResult2 = dataDictionary?.foo?.bar?.buzz;
    console.log('optional chaining result 2:', optionalChainingResult2);
    // optional chaining result 2: lightyear
};

export default javascriptOptionalChaining;
