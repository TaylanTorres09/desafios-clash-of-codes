# Given a number you must multiply it by itself and all numbers below it and return the total sum of each multiplication.

# Example 1:
# Input = 5
# 5*5+5*4+5*3+5*2+5*1=75
# return 75

# Example 2:
# Input = 3
# 3*3+3*2+3*1=18
# return 18

import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

n = int(input())
s = 0
for i in range(n+1):
    s+=i*n
print(s)
