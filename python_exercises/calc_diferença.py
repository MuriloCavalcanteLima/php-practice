#6. retornar o maior numero e informar a diferença entre os numeros:

#inputs
numero1 = int(input('digite o valor 1'))
numero2 = int(input('digite o valor 2'))

#logica
if numero1 > numero2 :
	print('o maior numero entre os numeros inseridos é ' + str(numero1) + ' a diferença entre eles é de' + str(numero1 - numero2) + '.')
else:
	print('o maior numero entre os numeros inseridos é  ' + str(numero2) + ' a diferença entre eles é de ' + str(numero1 - numero2) + '.')
