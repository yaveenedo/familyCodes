import json


def python_list_find():
    # JavaScript-like Array.find() function
    def array_find(an_array, callback_function):
        data_found = None
        for an_object in an_array:
            is_data_found = callback_function(an_object)
            if is_data_found:
                data_found = an_object
                break
        return data_found

    print('List Find in Python\n')

    numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254]

    even_number_found = array_find(numbers, lambda number: number % 2 == 0)
    print(f'even number found: {even_number_found}')
    # even numbers only: 12
    
    odd_number_found = array_find(numbers, lambda number: number % 2 != 0)
    print(f'odd number found: {odd_number_found}\n\n')
    # odd numbers only: 27

    # ======================================================================================================================================================

    print('List of Dictionary Find in Python\n')

    products = [
        {
            'id': 'id_1',
            'name': 'name_1',
            'variant': {
                'is_free_shipping': False,
                'price': 290,
            }
        },
        {
            'id': 'id_2',
            'name': 'name_2',
            'variant': {
                'is_free_shipping': True,
                'price': 232,
            }
        },
        {
            'id': 'id_3',
            'name': 'name_3',
            'variant': {
                'is_free_shipping': False,
                    'price': 140,
            }
        },
        {
            'id': 'id_4',
            'name': 'name_4',
            'variant': {
                'is_free_shipping': True,
                'price': 499,
            }
        }
    ]

    product_found = array_find(products, lambda product: product['id'] == 'id_3')
    product_found_formatted = json.dumps(product_found)
    print(f'product found: {product_found_formatted}\n\n')
    # product found: {"id": "id_3", "name": "name_3", "variant": {"is_free_shipping": false, "price": 140}}

    product_found = array_find(products, lambda product: product['variant']['price'] >= 200 and product['variant']['is_free_shipping'] == True)
    product_found_formatted = json.dumps(product_found)
    print(f'product found: {product_found_formatted}')
    # product found: {"id": "id_2", "name": "name_2", "variant": {"is_free_shipping": true, "price": 232}}


if __name__ == '__main__':
    python_list_find()
