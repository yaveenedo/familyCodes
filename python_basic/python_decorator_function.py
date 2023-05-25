import time


def python_decorator_function():
    print('Decorator Function in Python\n')

    def measure_function_execution_time(a_function):
        def wrapper():
            start_time = time.time()
            a_function()
            finish_time = time.time()
            execution_time = finish_time - start_time
            print(f'took {execution_time} seconds to execute')
        return wrapper

    @measure_function_execution_time
    def dummy_function_1():
        time.sleep(3.7)
        print('dummy_function_1 ran')

    @measure_function_execution_time
    def dummy_function_2():
        time.sleep(4.4)
        print('dummy_function_2 ran')

    def dummy_function_3():
        time.sleep(1.6)
        print('dummy_function_3 ran')

    dummy_function_1()
    dummy_function_2()
    measure_function_execution_time(dummy_function_3)()

    # dummy_function_1 ran
    # took 3.711108922958374 seconds to execute
    # dummy_function_2 ran
    # took 4.4034810066223145 seconds to execute
    # dummy_function_3 ran
    # took 1.6047413349151611 seconds to execute


if __name__ == '__main__':
    python_decorator_function()
