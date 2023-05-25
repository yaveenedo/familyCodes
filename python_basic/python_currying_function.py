def python_currying_function():
    print('Currying Function in Python\n')

    exponent = lambda a: lambda b: a ** b

    exponent2 = exponent(2)
    print('exponent2(1):', exponent2(1))
    print('exponent2(2):', exponent2(2))
    print('exponent2(3):', exponent2(3))
    print('exponent2(4):', exponent2(4))
    print('exponent2(5):', exponent2(5))
    print('exponent2(6):', exponent2(6))

    exponent3 = exponent(3)
    print('exponent3(1):', exponent3(1))
    print('exponent3(2):', exponent3(2))
    print('exponent3(3):', exponent3(3))
    print('exponent3(4):', exponent3(4), '\n')

    # exponent2(1): 2
    # exponent2(2): 4
    # exponent2(3): 8
    # exponent2(4): 16
    # exponent2(5): 32
    # exponent2(6): 64
    # exponent3(1): 3
    # exponent3(2): 9
    # exponent3(3): 27
    # exponent3(4): 81

    # ======================================================================================================================================================

    animals = [
        { 'id': 'animal_1', 'name': 'penguin' },
        { 'id': 'animal_2', 'name': 'elephant' },
        { 'id': 'animal_3', 'name': 'koala' },
        { 'id': 'animal_4', 'name': 'dog' },
        { 'id': 'animal_5', 'name': 'cat' },
        { 'id': 'animal_6', 'name': 'panda' },
    ]

    show_animal_link = lambda animal_name: lambda: print(f'click here to view {animal_name}: https://unsplash.com/s/photos/{animal_name}')

    animals_with_on_click_function = list(map(lambda animal: {**animal, 'show': show_animal_link(animal['name'])}, animals))
    animals_with_on_click_function[0]['show']()
    animals_with_on_click_function[4]['show']()

    # click here to view penguin: https://unsplash.com/s/photos/penguin
    # click here to view cat: https://unsplash.com/s/photos/cat


if __name__ == '__main__':
    python_currying_function()
