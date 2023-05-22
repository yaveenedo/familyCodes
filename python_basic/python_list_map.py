# list map in python

products = [
    {'id': 'id_1', 'price': 30},
    {'id': 'id_2', 'price': 233},
    {'id': 'id_3', 'price': 5},
    {'id': 'id_4', 'price': 499}
]

labeled_products = list(map(lambda product: {**product, 'label': 'expensive' if product['price'] > 100 else 'cheap'}, products))
print('output:', labeled_products)
# output: [
#     {'id': 'id_1', 'price': 30, 'label': 'cheap'},
#     {'id': 'id_2', 'price': 233, 'label': 'expensive'},
#     {'id': 'id_3', 'price': 5, 'label': 'cheap'},
#     {'id': 'id_4', 'price': 499, 'label': 'expensive'}
# ]
