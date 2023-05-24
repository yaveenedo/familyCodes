def python_spread_operator():
    print('List Spread Operator in Python\n')

    fruits_in_my_refrigerator = ['apple', 'mango', 'orange']
    fruits_I_bought_from_supermarket = ['melon', 'banana']
    my_fruits = [*fruits_in_my_refrigerator, *fruits_I_bought_from_supermarket]
    print('my fruits:', my_fruits, '\n\n')
    # my fruits: ['apple', 'mango', 'orange', 'melon', 'banana']

    # ======================================================================================================================================================

    print('List of Dictionary Spread Operator in Python\n')

    car = {'wheels': 4, 'tires': 4}

    minivan_car = {**car, 'doors': 4}
    print('minivan_car:', minivan_car)
    # minivan_car: {'wheels': 4, 'tires': 4, 'doors': 4}

    sports_car = {**car, 'doors': 2}
    print('sports_car:', sports_car)
    # sports_car: {'wheels': 4, 'tires': 4, 'doors': 2}

    red_sports_car = {**car, 'doors': 2, 'color': 'red'}
    print('red_sports_car:', red_sports_car)
    # red_sports_car: {'wheels': 4, 'tires': 4, 'doors': 2, 'color': 'red'}


if __name__ == '__main__':
    python_spread_operator()
