def python_ternary_operator():
    print('ternary operator in python\n')

    your_username = 'admin'
    print('your username:', your_username)
    can_go_to_admin_page = 'You can go to admin page' if your_username == 'admin' else 'Go away!'
    print(can_go_to_admin_page, '\n')

    your_username = 'roger'
    print('your username:', your_username)
    can_go_to_admin_page = 'You can go to admin page' if your_username == 'admin' else 'Go away!'
    print(can_go_to_admin_page)


if __name__ == '__main__':
    python_ternary_operator()
