def python_spread_operator():
    print('spread operator in python\n')

    fruits_in_my_refrigerator = ['apple', 'mango', 'orange']
    fruits_I_bought_from_supermarket = ['melon', 'banana']
    my_fruits = [*fruits_in_my_refrigerator, *fruits_I_bought_from_supermarket]
    print('my fruits:', my_fruits)
    # my fruits: ['apple', 'mango', 'orange', 'melon', 'banana']

    my_order = {
        'item': 'apple',
        'quantity': '5kg',
        'total_amount_to_pay': 7.9
    }

    paid_order = {
        'is_paid': True
    }

    my_paid_order = {
        **my_order,
        **paid_order
    }

    print('my paid order:', my_paid_order)
    # my paid order: {'item': 'apple', 'quantity': '5kg', 'total_amount_to_pay': 7.9, 'is_paid': True}


if __name__ == '__main__':
    python_spread_operator()
