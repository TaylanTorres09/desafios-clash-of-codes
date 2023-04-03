# Your program must print the sum of the square of the numbers given as input.

import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

n = int(input())
s = 0
for i in input().split():
    xi = int(i)
    s += xi*xi

# Write an answer using print
# To debug: print("Debug messages...", file=sys.stderr, flush=True)

print(s)
