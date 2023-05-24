def python_currying_function():
    print('currying function in python')

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
    print('exponent3(4):', exponent3(4))

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


if __name__ == '__main__':
    python_currying_function()
