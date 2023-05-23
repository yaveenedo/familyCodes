const javascriptTernaryOperator = () => {
    console.log('ternary operator in javascript');

    let yourUsername = '';
    let can_go_to_admin_page = '';

    yourUsername = 'admin';
    console.log(`your username: "${yourUsername}"`);
    can_go_to_admin_page = yourUsername === 'admin' ? 'You can go to admin page' : 'Go away!';
    console.log(can_go_to_admin_page);

    yourUsername = 'roger';
    console.log(`your username: "${yourUsername}"`);
    can_go_to_admin_page = yourUsername === 'admin' ? 'You can go to admin page' : 'Go away!';
    console.log(can_go_to_admin_page);
}

export default javascriptTernaryOperator;
