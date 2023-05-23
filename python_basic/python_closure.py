def python_closure():
    print('closure in python')
    # closure is a function having access to the scope of its parent function after the parent function has returned.

    def new_amusement_arcade(name='Dude', coins=0):
        def play_game():
            nonlocal coins
            coins -= 1
            print(f'\n{name} has {coins} {"coin" if coins == 1 else "coins"} left.' if coins >= 1 else f'\n{name} is out of coins.')

        return play_game

    tommy_play_game = new_amusement_arcade(name="Tommy", coins=3)
    jenny_play_game = new_amusement_arcade(name="Jenny", coins=5)

    tommy_play_game()
    tommy_play_game()
    jenny_play_game()
    tommy_play_game()

    # Tommy has 2 coins left.
    # Tommy has 1 coin left.
    # Jenny has 4 coins left.
    # Tommy is out of coins.


if __name__ == '__main__':
    python_closure()
