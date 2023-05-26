const javascriptTernaryOperator = () => {
    console.log('Ternary Operator in JavaScript\n\n');

    let yourUsername = null;
    let canGoToAdminPage = null;

    yourUsername = 'admin';
    canGoToAdminPage = yourUsername === 'admin' ? 'You can go to admin page' : 'Go away!';
    console.log(`your username: "${yourUsername}", ${canGoToAdminPage}\n\n`);
    // your username: "admin", You can go to admin page

    yourUsername = 'roger';
    canGoToAdminPage = yourUsername === 'admin' ? 'You can go to admin page' : 'Go away!';
    console.log(`your username: "${yourUsername}", ${canGoToAdminPage}`);
    // your username: "roger", Go away!
};

export default javascriptTernaryOperator;
