print('*********************************')
print('Bem vindo no jogo de Adivinhação!')
print('*********************************')

# Definindo uma variável
numero_secreto = 43

# Input recebe o que vai ser impresso no cosole
# Input serve para o usuário digitar uma informação no console
# Quando digitado e após o enter, o input retorna o valor digitado
# O programa fica aguardando a entreta do usuário para prosseguir
# O Input é uma strig
chute_str = input('Digite o seu número: ')

print('Você digitou ', chute_str)

# Padrão de identação no Python é de 4 espaços (ou 1 Tab)
# Função int() transforma o valor string recebido pelo input em um inteiro
chute = int(chute_str)
if(numero_secreto == chute) :
    print('Você acertou')
else :
    print('Você errou')

print('Fim do jogo')
