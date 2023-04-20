# The objective is to count the number of buzz, bizz and bingo numbers from 1 to n inclusive.
# A number is considered buzz if it is a multiple of 7, bizz if the last digit is 7 (e.g. 7, 17) and bingo if it is both buzz and bizz.
# If the number is bingo, only increment bingo amount.

import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

n = int(input())
buzz=0
bizz=0
bingo=0

for i in range(1, n+1):
    if i % 7 == 0 and str(i).endswith('7'):
        bingo+=1
    elif i % 7 == 0:
        buzz += 1
    elif str(i).endswith('7'):
        bizz+=1

print(buzz)
print(bizz)
print(bingo)
