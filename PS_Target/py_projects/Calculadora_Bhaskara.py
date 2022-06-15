# Calculadora Bhaskara

#importando biblioteca de operadores  martemaicos

import math

print('Bem-Vindo...')

#inputs (coeficientes da operação)

a = float(input('insira o valor do coeficiente a , lembre-se ele deve ser diferente de 0'))
b = float(input('insira o valor do coeficiente b '))
c = float(input('insira o coeficiente c'))

#filtra valor A invalido
if a == 0:
    print('Não é uma equação de segundo grau')
else:

    # Formulando a equação:
    
    delta = (b**2)-4*a*c
    raiz_delta = math.sqrt(float(delta))

    #filtra deltas negativos
    if delta < 0:
        print('Não existe Raíz')
    elif delta > 0:
        print('existem duas raízes válidas.' )
    
        x1 = (-b + float(raiz_delta))/(2*a)

        x2 = (-b - float(raiz_delta))/(2*a)

        raiz1= float(x1)
        raiz2=float(x2)

        print('O valor da primeira raiz valida para x é ' + str(raiz1) + '. o valor da segunda raíz posível é ' + str(raiz2) + '.')
    elif delta == 0:
        print('raíz única')
        # a raiz de delta é anulada pois delta não existe
        x1 = -b/(2*a)

        raiz1= float(x1)

        print('o valor da raíz única é ' + str(x1) + '.')