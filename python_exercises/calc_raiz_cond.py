# 3. Ler numero, se positivo imprimir a raiz quadrada, se negativo, imprimir o numero ao quadrado

#importando bibliotecas

import math

#input
numero = int(input('digite um valor numerico'))

#logica
if int(numero) > int(0) : 
    numero_raiz = math.sqrt(numero)
    print('a raiz quadrada do valor inserido é ' + str(numero_raiz) + '.')
else: # elif int(numero) < 0 :

	print( ' ' + str(numero) + 'ao quadrado é ' + str(numero ** 2) + '.')