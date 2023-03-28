# A bruh number of n is square of sum digits of n

n, s = input(), 0
for i in n:
    s+=int(i)
print(s**2)
