# You need to compute the sum of all even and odd positive Integers up to n (n included) separately.

n = int(input())

sum_even, sum_odd = 0, 0

for i in range(1, n+1):
    if i % 2 == 0:
        sum_even += i
    else:
        sum_odd += i

print(sum_odd)
print(sum_even)
