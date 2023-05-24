def python_ternary_operator():
    print('Ternary Operator in Python\n')

    your_username = 'admin'
    can_go_to_admin_page = 'You can go to admin page' if your_username == 'admin' else 'Go away!'
    print(f'your username: "{your_username}", {can_go_to_admin_page}\n')
    # your username: "admin", You can go to admin page

    your_username = 'roger'
    can_go_to_admin_page = 'You can go to admin page' if your_username == 'admin' else 'Go away!'
    print(f'your username: "{your_username}", {can_go_to_admin_page}')
    # your username: "roger", Go away!


if __name__ == '__main__':
    python_ternary_operator()
