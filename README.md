# 🎓 Classificação de Alunos em PHP

## 📌 Sobre o projeto

Projeto desenvolvido para a atividade de **Linguagens de Servidor**, do Senac.

O objetivo é demonstrar o uso de variáveis, estruturas condicionais (`if`, `elseif` e `else`) e do comando `echo` na linguagem PHP.

## 💻 Tecnologias utilizadas

- PHP
- HTML (saída exibida no navegador)
- XAMPP (servidor Apache)
- Visual Studio Code

## ⚙️ Funcionamento

O programa utiliza duas variáveis:

- `$nome`: armazena o nome do aluno.
- `$nota`: armazena a nota obtida.

A partir da nota, o programa determina a situação do aluno:

| Nota | Situação |
|---|---|
| Maior ou igual a 7 | Aprovado |
| Maior ou igual a 5 e menor que 7 | Recuperação |
| Menor que 5 | Reprovado |

O resultado é apresentado no navegador utilizando o comando `echo`.

## 🧪 Exemplo de execução

```text
Aluno: Ash Ketchum, nota: 10, situação: Aprovado
```

## 🚀 Como executar

1. Instale o XAMPP.
2. Coloque o arquivo `situacao_aluno.php` na pasta `htdocs` do XAMPP.
3. Inicie o Apache pelo painel do XAMPP.
4. Acesse `http://localhost/situacao_aluno.php` no navegador.

Para testar outras situações, altere o valor da variável `$nota`.

## 🎬 Vídeo demonstrativo

O vídeo apresenta o código PHP, explica suas principais estruturas e demonstra as situações de aprovação, recuperação e reprovação.

📹 [Assistir à apresentação](Atividade_Linguagens_de_Servidor_PHP.mp4)

## 📚 Contexto acadêmico

Atividade desenvolvida como parte dos estudos de programação do lado do servidor, com foco nos fundamentos da linguagem PHP.
