const javascriptClosure = () => {
    console.log('Closure in JavaScript\n\n');
    // closure is a function having access to the scope of its parent function after the parent function has returned.

    const newAmusementArcade = ({ name = 'Dude', coins = 0 }) => {
        const playGame = () => {
            coins -= 1;
            console.log(coins >= 1 ? `${name} has ${coins} ${coins === 1 ? 'coin' : 'coins'} left.` : `${name} is out of coins.`);
        };

        return playGame;
    };

    const tommyPlayGame = newAmusementArcade({ name: 'Tommy', coins: 3 });
    const jennyPlayGame = newAmusementArcade({ name: 'Jenny', coins: 5 });

    tommyPlayGame();
    tommyPlayGame();
    jennyPlayGame();
    tommyPlayGame();

    // Tommy has 2 coins left.
    // Tommy has 1 coin left.
    // Jenny has 4 coins left.
    // Tommy is out of coins.
};

export default javascriptClosure;
