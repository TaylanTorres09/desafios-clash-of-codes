# in a world where people get powers by eating magical fruits you will be given nfruits types.
# there are 3 types of fruits:
# logia
# paramecia
# zoan
# a logia fruit is valued for 100 beli
# a paramecia is valued for 75 beli
# a zoan is only valued for 25 beli
# output the sum of all the fruits value in beli


import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

n = int(input())
s = 0
for i in range(n):
    fruits = input()
    if 'logia' == fruits:
        s += 100
    elif 'paramecia' == fruits:
        s += 75
    else:
        s += 25

print(f'{s} beli')
