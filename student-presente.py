# You are given a list of n students' names that are in the current classroom
# and s the list of all the students that belong to that classroom and are expected to be present.

# You need to output the students who are absent, which are not in the classroom. If no one is absent output none.

n = input().split(' ')
s = input().split(' ')

resp = ''
for i in s:
    if i not in n:
        resp += i + ' '
if len(resp) > 0:
    print(resp.strip())
else:
    print("none")
