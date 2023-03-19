# In this Clash you have to recreate the emoji system of CodinGame.
# For example, if you type this in the chat you get:
# :slight_smile: --> :)
# :disappointed: --> :(

s = input()

if ':slight_smile:' in s:
    s = s.replace(':slight_smile:', ':)')
if ':disappointed:' in s:
    s = s.replace(':disappointed:', ':(')
if ':loud_laugh:' in s:
    s = s.replace(':loud_laugh:', 'XD')
if ':open_mouth:' in s:
    s = s.replace(':open_mouth:', ':o')
if ':stuck_out_tongue:' in s:
    s = s.replace(':stuck_out_tongue:', ':p')

print(s)
