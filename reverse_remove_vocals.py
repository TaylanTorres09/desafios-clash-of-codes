s = input()

vogal = 'aeiou'

# Write an answer using print
# To debug: print("Debug messages...", file=sys.stderr, flush=True)
for i in s:
    if i in vogal or i in vogal.upper():
        s = s.replace(i, '')
print(s)
