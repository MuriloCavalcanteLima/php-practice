#2. Ler numero, se positivo, calcular raiz, se negativo, retornar, numero invalido:

#importando bibliotecas

import math

#input

numero1 = int(input('digite o valor 1'))

#logica
	
if numero1 > 0:

    numero_raiz = math.sqrt(numero1)

    print('a raiz quadrada do valor inserido é ' + str(numero_raiz) + '.')

elif numero1 < 0 :
    print('valor inserido invalido')