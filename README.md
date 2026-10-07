# Sistema Simples de Autenticação de Usuários

---

Este é um projeto simples de sistema de autenticação e controle de acesso desenvolvido em **PHP** integrado com **MySQL**. O sistema permite que um usuário realize login através de formulário web, valida as credenciais em um banco de dados e gerencia a sessão do usuário (permitindo ou bloqueando o acesso a páginas restritas e possibilitando a saída do sistema).

## Fluxo e Processo do Algoritmo

O processo de autenticação e controle de acesso segue o fluxo estruturado abaixo:

1. **Apresentação do Formulário (`login.php`):**
   * O usuário acessa a página inicial e preenche as credenciais (e-mail e senha) através de um formulário enviado via método `POST`.

2. **Processamento e Validação (`processoLogin.php`):**
   * O script recebe os dados enviados pelo formulário.
   * Conecta ao banco de dados MySQL (`aulaphp`) e realiza uma busca na tabela `aluno` conferindo se existe um registro correspondente ao e-mail e senha digitados.
   * Se as credenciais forem válidas (1 registro encontrado), a variável global de sessão `$_SESSION["logado"]` recebe o valor `1` e o usuário é redirecionado para a área restrita.
   * Se forem inválidas, a variável de sessão recebe um valor indicativo de falha (`14`) e o usuário é redirecionado.

3. **Controle de Acesso (`logado.php`):**
   * Antes de exibir o conteúdo restrito, o script verifica se a sessão `$_SESSION["logado"]` é igual a `1`.
   * **Se logado:** Exibe a mensagem de sucesso e o link de logout.
   * **Se não logado:** Redireciona imediatamente de volta para a tela de login (`login.php`).

4. **Encerramento da Sessão (`logout.php`):**
   * Destrói a sessão ativa através de `session_destroy()` e redireciona o usuário para a página de login.

## Tecnologias Utilizadas

* **PHP:** Linguagem de programação para manipulação de sessões, redirecionamentos e validação lógica.
* **MySQL / mysqli:** Banco de dados relacional e driver de conexão do PHP.
* **HTML5:** Estruturação dos formulários e interfaces de usuário.

## Estrutura do Projeto

```
.
├── login.php           # Formulário de entrada para e-mail e senha
├── processoLogin.php   # Script de conexão ao banco e verificação de credenciais
├── logado.php          # Página restrita que checa o estado da sessão do usuário
├── logout.php          # Script responsável por encerrar a sessão
└── README.md           # Documentação do projeto
```

---
Sugestões são bem vindas!
Todos os direitos reservados &copy; 2026
