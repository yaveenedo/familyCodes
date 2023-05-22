# list filter in python

products = [
    {'id': 'id_1', 'price': 30},
    {'id': 'id_2', 'price': 233},
    {'id': 'id_3', 'price': 5},
    {'id': 'id_4', 'price': 499}
]

labeled_products = list(filter(lambda product: product['price'] <= 100, products))
print('output:', labeled_products)
# output: [
    # {'id': 'id_1', 'price': 30},
    # {'id': 'id_3', 'price': 5},
# ]
