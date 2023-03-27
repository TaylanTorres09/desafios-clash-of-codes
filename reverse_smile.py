smiley = input()

count2points = 0
countparente = 0

for i in smiley:
    if i == ':':
        count2points += 1
    elif i == ')':
        countparente += 1

if countparente != count2points:
    print('Oh no!')
else:
    print(':)'*count2points)
