```python
# Imprime informações na tela
print('Brasil ganhou 5 títulos mundiais')

# Para ver documentação e ajuda em geral
help()

# É possível passar mais de um valor no print()
# O sep indica qual o separador entre esses parâmetros
print('Brasil', 'ganhou', '5', 'títulos mundiais', sep=' ')
print('Brasil', 'ganhou', '5', 'títulos mundiais', sep='-')

# End é a indicação do que fazer no final da função print()
# O padrão do end é o \n (pular linha)
print('Brasil', 'ganhou', '5', 'títulos mundiais', end='')
print('Brasil', 'ganhou', '5', 'títulos mundiais', end='\n')
print('Brasil', 'ganhou', '5', 'títulos mundiais', end='\n\n')

# Definindo uma variável
pais = 'Itália'
quantidade = 4

# Verificando qual o tipo da variável
type(pais) # str (String)
type(quantidade) # int (Inteiro)

# Imprimindo frase com variáveis
print(pais, 'ganhou', quantidade, 'títulos mundiais')

pais = 'Alemanha'
print(pais, 'ganhou', quantidade, 'títulos mundiais')
```
