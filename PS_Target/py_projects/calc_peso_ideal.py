#Calcular de peso ideal com base na altura e sexo

print('bem-vindo(a), por favor use apenas letras maiúsculas e . para declarar numeros decimais')

#inputs
h = float(input('insira a altura (m)'))
sexo= str(input('insira M para masculino ou F para feminino'))

#logica
if sexo == 'M':
    print('Homem')
    peso_ideal = (72.7*h)-58
    
else:
    print('Mulher')
    peso_ideal= (62.1*h)-44,7
    
print(float(peso_ideal))