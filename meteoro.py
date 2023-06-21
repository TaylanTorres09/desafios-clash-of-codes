# you must output number of meteors that hit the bridge.
# if meteor didn't hit bridge output oof
# if meteor fall in water output oof

# Meteor is O
# Bridge is =
# Water is ~

import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

n = int(input())
for i in range(n):
    line = input()
    m = 0
    for i in line:
        if i == 'O' and line[line.index(i) + 1] != "~":
            m+=1
    if m != 0:
        print(m)
    else:  
        print("oof")
