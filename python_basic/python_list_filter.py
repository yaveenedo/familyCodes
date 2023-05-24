import json


def python_list_filter():
    print('List Filter in Python\n')

    numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254]

    even_numbers_only = list(filter(lambda number: number % 2 == 0, numbers))
    even_numbers_only_formatted = json.dumps(even_numbers_only)
    print('even numbers only:', even_numbers_only_formatted)
    # even numbers only: [12, 34, 36, 4, 254]

    odd_numbers_only = list(filter(lambda number: number % 2 != 0, numbers))
    odd_numbers_only_formatted = json.dumps(odd_numbers_only)
    print('odd numbers only:', odd_numbers_only_formatted, '\n\n')
    # odd numbers only: [27, 23, 65, 93, 87]

    # ======================================================================================================================================================

    print('List of Dictionary Filter in Python\n')

    products = [
        {'id': 'id_1', 'price': 30},
        {'id': 'id_2', 'price': 233},
        {'id': 'id_3', 'price': 5},
        {'id': 'id_4', 'price': 499}
    ]

    cheap_product_only = list(filter(lambda product: product['price'] <= 100, products))
    cheap_product_only_formatted = json.dumps(cheap_product_only, indent=4)
    print('cheap products only:', cheap_product_only_formatted)
    # cheap products only: [
    #     {
    #         "id": "id_1",
    #         "price": 30
    #     },
    #     {
    #         "id": "id_3",
    #         "price": 5
    #     }
    # ]


if __name__ == '__main__':
    python_list_filter()
