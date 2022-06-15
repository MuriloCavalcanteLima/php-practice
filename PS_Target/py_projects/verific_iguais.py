# 7. Receber dois numeros, identificar o maior e notificar se forem iguais

#inputs
numero1 = int(input('digite o valor 1'))
numero2 = int(input('digite o valor 2'))

#logica
if numero1 > numero2 :
	print('o maior numero entre os numeros inseridos é o ' + str(numero1)),
else:
	print('o maior numero entre os numeros inseridos é o ' + str(numero2)),

if numero1 == numero2 :
	print('números iguais')
