from functools import reduce


def python_compose_pipe_functions():
    print('Compose & Pipe Functions in Python\n')

    # Functional Programming, often uses pipe and compose = higher order functions
    # A higher order is any function which takes a function as an argument, returns a function, or both.
    # Here's how a compose function works:

    # Start with small unary (one argument) functions
    add2 = lambda x: x + 2
    subtract1 = lambda x: x - 1
    multiply_by5 = lambda x: x * 5

    # Notice how the functions execute from inside to outside / from right to left
    without_compose_or_pipe_result = multiply_by5(subtract1(add2(4)))
    print('without_compose_or_pipe_result:', without_compose_or_pipe_result)
    # without_compose_or_pipe_result: 25

    # The above is NOT a compose or pipe function - let's make one

    # compose execute functions from right to left
    compose = lambda *functions: lambda value: reduce(lambda current_result, current_function: current_function(current_result), reversed(functions), value)

    compose_result = compose(multiply_by5, subtract1, add2)(4)
    print('compose_result:', compose_result)
    # compose_result: 25

    # pipe execute functions from left to right
    pipe = lambda *functions: lambda value: reduce(lambda current_result, current_function: current_function(current_result), functions, value)
    pipe_result = pipe(add2, subtract1, multiply_by5)(4)
    print('pipe_result:', pipe_result)
    # pipe_result: 25

    # example with a 2nd argument
    divide_by = lambda divisor, number_to_be_divided: number_to_be_divided / divisor

    pipe_result2 = pipe(add2, subtract1, multiply_by5, lambda x: divide_by(2, x))(5)
    print('pipe_result2:', pipe_result2)
    # pipe_result2: 15.0

    # example with currying the divide_by function for a custom unary function
    divide_by_curried = lambda divisor: lambda number_to_be_divided: number_to_be_divided / divisor
    divide_by2 = divide_by_curried(2)

    pipe_result3 = pipe(add2, subtract1, multiply_by5, divide_by2)(5)
    print('pipe_result3:', pipe_result3)
    # pipe_result3: 15.0


if __name__ == '__main__':
    python_compose_pipe_functions()
