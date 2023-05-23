import json
from functools import reduce


def python_list_reduce():
    print('list reduce in python\n')

    products = [
        {'id': 'id_1', 'price': 30},
        {'id': 'id_2', 'price': 233},
        {'id': 'id_3', 'price': 5},
        {'id': 'id_4', 'price': 499}
    ]

    grouped_products = reduce(lambda products_group, current_product: {**products_group, 'expensive': [*products_group['expensive'], current_product]} if current_product['price'] > 100 else {**products_group, 'cheap': [*products_group['cheap'], current_product]}, products, {"expensive": [], "cheap": []})
    grouped_products_formatted = json.dumps(grouped_products, indent=4)

    print('output:', grouped_products_formatted)
    # output: {
    #     "expensive": [
    #         {
    #             "id": "id_2",
    #             "price": 233
    #         },
    #         {
    #             "id": "id_4",
    #             "price": 499
    #         }
    #     ]
    #     "cheap": [
    #         {
    #             "id": "id_1",
    #             "price": 30
    #         },
    #         {
    #             "id": "id_3",
    #             "price": 5
    #         }
    #     ],
    # }


if __name__ == '__main__':
    python_list_reduce()
