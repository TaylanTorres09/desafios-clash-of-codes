# t is a subsequence of s if we can get from s to t by removing letters. We are not allowed to rearrange the letters.

# Given a string s and an integer k, print all subsequences of s with length k in lexicographical order. Do not print repetitions.

o=[]
def find_substrings(s,r,n):
    global o
    if n==0:
        o.append(s)
    else:
        for i,c in enumerate(r):
            p=s+c
            find_substrings(p,r[i+1:],n-1)

s = input()
k = int(input())
find_substrings("",s,k)

for i in sorted(set(o)):
    print(i)
