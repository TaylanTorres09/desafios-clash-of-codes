# Brainf**k is a programming language designed to be extremely lightweight. Your task is to create an interpreter for
# Mini Brainf**k which features just three commands:

# + Adds one to the value
# - Takes one from the value
# . Outputs the character representation of the ASCII value

# Note that any characters that are not commands are ignored, allowing easy notation.

c = input()

plus = 0
resp = ''
for i in c:
    if i == '+':
        plus += 1
    elif i == '-':
        plus -= 1
    elif i == '.':
        resp+=chr(plus)

print(resp)
