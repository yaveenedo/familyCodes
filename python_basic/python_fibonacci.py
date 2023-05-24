def python_fibonacci():
    print('Fibonacci in Python\n')

    def generate_fibonacci_until(stopper=5):
        iterator = 0
        fibonacci = [0, 1]
        while True:
            if iterator == stopper:
                break
            fibonacci = [*fibonacci, fibonacci[-1] + fibonacci[-2]]
            iterator += 1
        return fibonacci

    generated_fibonacci = generate_fibonacci_until(10)
    print('fibonacci:', generated_fibonacci)
    # fibonacci: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]


if __name__ == '__main__':
    python_fibonacci()
