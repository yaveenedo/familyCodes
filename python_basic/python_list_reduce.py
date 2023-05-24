import json
from functools import reduce


def python_list_reduce():
    print('List Reduce in Python\n')

    today_money_spents = [4.99, 15, 9.99, 999.9, 2, 60]
    today_money_spents_total = reduce(lambda total_money_spent, current_money_spent: total_money_spent + current_money_spent, today_money_spents, 0)
    print(f'total money spent today: {today_money_spents_total} \n\n')
    # total money spent today: 1091.8799999999999

    # ======================================================================================================================================================

    print('List of Dictionary Reduce in Python\n')

    products = [
        {'id': 'id_1', 'price': 30},
        {'id': 'id_2', 'price': 233},
        {'id': 'id_3', 'price': 5},
        {'id': 'id_4', 'price': 499}
    ]

    grouped_products = reduce(lambda products_group, current_product: {**products_group, 'expensive': [*products_group['expensive'], current_product]} if current_product['price'] > 100 else {**products_group, 'cheap': [*products_group['cheap'], current_product]}, products, {"expensive": [], "cheap": []})
    grouped_products_formatted = json.dumps(grouped_products, indent=4)

    print('grouped products:', grouped_products_formatted)
    # grouped products: {
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
