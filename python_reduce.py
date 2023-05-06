# reduce in python

from functools import reduce

products = [
    {'id': 'id_1', 'price': 30},
    {'id': 'id_2', 'price': 233},
    {'id': 'id_3', 'price': 5},
    {'id': 'id_4', 'price': 499}
]


def group_products(products_group, current_product):
    if current_product['price'] > 100:
        return {**products_group, 'expensive': [*products_group['expensive'], current_product]}
    return {**products_group, 'cheap': [*products_group['cheap'], current_product]}


grouped_products = reduce(group_products, products, {"expensive": [], "cheap": []})

grouped_products = reduce(lambda products_group, current_product: {**products_group, 'expensive': [*products_group['expensive'], current_product]} if current_product['price'] > 100 else {**products_group, 'cheap': [*products_group['cheap'], current_product]}, products, {"expensive": [], "cheap": []})

print('output:', grouped_products)
# output: {
#     'expensive': [
#         {'id': 'id_2', 'price': 233},
#         {'id': 'id_4', 'price': 499}
#     ],
#     'cheap': [
#         {'id': 'id_1', 'price': 30},
#         {'id': 'id_3', 'price': 5}
#     ]
# }
