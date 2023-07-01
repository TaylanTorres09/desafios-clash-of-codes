# It is the end of a Clash Royal match, and to win, you have to summon a fireball and hit the enemy tower so it gets destroyed! A level one fireball deals 200 damage. Each level higher adds 20 to the damage. Figure out if you can win just in time!

# P.S.: if the enemy tower has 0 health, you win!

health = int(input())
level = int(input())
dano = health - (200 + 20*level - 20)
print(f'hehehehaw {dano}' if dano <= 0 else f'rawr {dano}')
