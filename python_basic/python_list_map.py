import json


def python_list_map():
    print('list map in python\n')

    products = [
        {'id': 'id_1', 'price': 30},
        {'id': 'id_2', 'price': 233},
        {'id': 'id_3', 'price': 5},
        {'id': 'id_4', 'price': 499}
    ]

    labeled_products = list(map(lambda product: {**product, 'label': 'expensive' if product['price'] > 100 else 'cheap'}, products))
    labeled_products_formatted = json.dumps(labeled_products, indent=4)
    print('output:', labeled_products_formatted)
    # output: [
    #     {
    #         "id": "id_1",
    #         "label": "cheap",
    #         "price": 30
    #     },
    #     {
    #         "id": "id_2",
    #         "label": "expensive",
    #         "price": 233
    #     },
    #     {
    #         "id": "id_3",
    #         "label": "cheap",
    #         "price": 5
    #     },
    #     {
    #         "id": "id_4",
    #         "label": "expensive",
    #         "price": 499
    #     }
    # ]


if __name__ == '__main__':
    python_list_map()
