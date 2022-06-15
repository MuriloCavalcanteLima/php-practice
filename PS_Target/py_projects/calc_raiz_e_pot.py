# 4. Se o numero for positivo, calcular raiz e seu valor na segunda potência:

#importando bibliotecas

import math

#input
numero = int(input('digite um valor numerico'))
	
if numero > 0 : 
    print('' + str(numero) + ' ao quadrado é ' + str(numero ** 2) + '.'),
    numero_raiz = math.sqrt(numero)
    print('a raiz quadrada do valor inserido é ' + str(numero_raiz) + '.')
else:
    print('valor negativo invalido')