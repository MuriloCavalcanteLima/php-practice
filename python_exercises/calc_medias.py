#8. calcular media entre duas notas se elas forem validas (>0 e <10)

#inputs
nota1 = int(input('digite a nota 1'))
nota2 = int(input('digite a nota 2'))

#logica:

media = int((nota1 + nota2)/2) 
if (nota1 and nota2 <= 10)  or (nota1 and nota2 >= 0):
       
        print(' a média é: ' + str(media) + '.')
else:
	print('valores invalidos')
