# Question
# Given a string representing the item you are currently looking at item while dumpster diving, you must output whether
# to YEET or to YOINK the item depending on if it is in your wishlist or not.

# To "YEET" something means to throw it (discard) and to "YOINK" something means to grab it (keep).

wishlist = input()
n = int(input()) 
for i in range(n):
    item = input()
    if item in wishlist:
        print("YOINK")
    else:
        print("YEET")
