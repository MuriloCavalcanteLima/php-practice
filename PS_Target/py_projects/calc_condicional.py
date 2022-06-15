# 1. Receber valores de salario e prestação
#   Logica: Se salario*0,2 < prestacao: Empréstimo não concedido

#inputs
print('bem-vindo(a)')
salario = int(input('insira o valor do salário'))
prestacao = int(input('insira o valor da prestação'))

#logica
if salario*0.2 < prestacao:
    print('Empréstimo não concedido')
else:
    print('Empréstimo concedido')