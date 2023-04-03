# An integer N , which is double the 1s that exist in the 8 binary digits given in input.

import sys
import math

byte = input()
c = 0
for i in byte:
    if i == '1':
        c+=1

print(c*2)
