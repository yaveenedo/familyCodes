import json


# list filter in python

products = [
    {'id': 'id_1', 'price': 30},
    {'id': 'id_2', 'price': 233},
    {'id': 'id_3', 'price': 5},
    {'id': 'id_4', 'price': 499}
]

cheap_product_only = list(filter(lambda product: product['price'] <= 100, products))
cheap_product_only_formatted = json.dumps(cheap_product_only, indent=4)
print('output:', cheap_product_only_formatted)
# output: [
#     {
#         "id": "id_1",
#         "price": 30
#     },
#     {
#         "id": "id_3",
#         "price": 5
#     }
# ]
