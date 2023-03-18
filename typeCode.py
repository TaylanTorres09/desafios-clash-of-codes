# Figure out which naming style is the variable.

# VARIABLE NAMING CONVENTIONS

# snake_case: Words are delimited by an underscore: "variable_one", "variable_two".
# PascalCase: Words are delimited by capital letters: "VariableOne", "VariableTwo".
# camelCase: Words are delimited by capital letters (except the initial word): "variableOne", "variableTwo".

# Note: Only one of the above three naming conventions will be used.

message = input()

if '_' in message:
    print('snake_case')
elif message[0] == message[0].upper():
    print('PascalCase')
else:
    print('camelCase')
