import json


def python_list_map():
    print('List Map in Python\n')

    numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254]
    numbersLabeled = list(map(lambda number: {number: 'even' if number % 2 == 0 else 'odd'}, numbers))
    print('labeled numbers:', json.dumps(numbersLabeled), '\n\n')
    # labeled numbers: [{"12": "even"}, {"34": "even"}, {"27": "odd"}, {"23": "odd"}, {"65": "odd"}, {"93": "odd"}, {"36": "even"}, {"87": "odd"}, {"4": "even"}, {"254": "even"}]

    # ======================================================================================================================================================

    print('List of Dictionary Map in Python\n')

    products = [
        {'id': 'id_1', 'price': 30},
        {'id': 'id_2', 'price': 233},
        {'id': 'id_3', 'price': 5},
        {'id': 'id_4', 'price': 499}
    ]

    labeled_products = list(map(lambda product: {**product, 'label': 'expensive' if product['price'] > 100 else 'cheap'}, products))
    labeled_products_formatted = json.dumps(labeled_products, indent=4)
    print('labeled products:', labeled_products_formatted)
    # labeled products: [
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
