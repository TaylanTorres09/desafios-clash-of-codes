# Print a checklist of the given numbers where every odd number is ticked.

import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

count = int(input())
for i in input().split():
    n = int(i)
    if n%2 == 0:
        print(f'[ ] {n}')
    else:
        print(f"[x] {n}")
