<br> 

<p align="center"><img src="README/logo.png"></p>

<br> 

<p align="center">Aplicação web projetada para <b>organizar o processo operacional</b> do laboratório da Microciclo quanto aos <b>controles do estoque</b> e das produções bacterianas, visando maior agilidade de resposta, confiabilidade e integração das atividades desempenhadas.</p>

<h4 align="center"> 
	🚧  Em desenvolvimento...  🚧
</h4>
<br>

## Índice
- [Índice](#índice)
  - [Cadastro e login com hierarquia](#cadastro-e-login-com-hierarquia)
  - [Manipulação de categorias e recipientes](#manipulação-de-categorias-e-recipientes)
- [Índice](#índice-1)
  - [Cadastro e login com hierarquia](#cadastro-e-login-com-hierarquia-1)
  - [Manipulação de categorias, recipientes e itens](#manipulação-de-categorias-recipientes-e-itens)
  - [Sistema de estoque](#sistema-de-estoque)
- [Instalações](#instalações)
  - [👨‍💻 Rodando a aplicação no ambiente de desenvolvimento](#-rodando-a-aplicação-no-ambiente-de-desenvolvimento)
  - [📊 Rodando a aplicação no servidor da UFRN](#-rodando-a-aplicação-no-servidor-da-ufrn)
- [Instalações](#instalações-1)
  - [👨‍💻 Rodando a aplicação no ambiente de desenvolvimento](#-rodando-a-aplicação-no-ambiente-de-desenvolvimento-1)
  - [📊 Rodando a aplicação no servidor da UFRN](#-rodando-a-aplicação-no-servidor-da-ufrn-1)

<br>

<h2>Features</h2>

- [x] Cadastro e login de usuário
- [x] Sistema de hierarquia com níveis de acesso entre os usuários
- [x] Manipulação de categorias e recipientes
- [ ] Manipulação de itens
- [ ] Controle de estoque
- [ ] Processos operacionais

<br>


### Cadastro e login com hierarquia
A hierarquia utilizada no projeto é a de **Colaboradores** e **Administradores**. As permissões de cada um desses é dividida da seguinte forma:

**Colaboradores**: possuem somente a permissão de leitura das informações do estoque.

**Administradores**: possuem a permissão de leitura, criação e alteração do estoque, além de terem a permissão de aprovar e rejeitar usuários e também promover colaboradores para administradores. 

<br>

O **sistema de cadastro** é o trivial utilizado nos sites: contém apenas o nome, sobrenome, email e senha.

Quando um novo usuário cria sua conta, o perfil dele é mantido como **'não aprovado'** até que um **Administrador** do sistema, em função privilegiada, **aprove sua conta**.

<hr>


### Manipulação de categorias e recipientes
No sistema, a maneira de registrar o estoque passa por um processo além de somente registrá-lo. Para dar baixa ou acrescentar um item ao estoque, é necessário que **anteriormente já tenha sido registrado o item**, contendo o **tipo de recipiente** (pote, tubo, pacote) e também a **categoria do item** (reagente, vidraria, bactérias), além de informações como medidas e volume.

**Somente o administrador** do sistema pode registrar recipientes e categorias, assim como os itens. 

Caso tais informações não tenham sido adicionadas previamente, o fórmulario de estoque ficará limitado somente aos dados que estão presentes no momento. Esse mesmo problema também pode acontecer no formulário de criação de item.

<hr>


<br> 

<p align="center"><img src="README/logo.png"></p>

<br> 

<p align="center">Aplicação web projetada para <b>organizar o processo operacional</b> do laboratório da Microciclo quanto aos <b>controles do estoque</b> e das produções bacterianas, visando maior agilidade de resposta, confiabilidade e integração das atividades desempenhadas.</p>

<h4 align="center"> 
	🚧  Em desenvolvimento...  🚧
</h4>
<br>

## Índice
- [Índice](#índice)
  - [Cadastro e login com hierarquia](#cadastro-e-login-com-hierarquia)
  - [Manipulação de categorias e recipientes](#manipulação-de-categorias-e-recipientes)
- [Índice](#índice-1)
  - [Cadastro e login com hierarquia](#cadastro-e-login-com-hierarquia-1)
  - [Manipulação de categorias, recipientes e itens](#manipulação-de-categorias-recipientes-e-itens)
  - [Sistema de estoque](#sistema-de-estoque)
- [Instalações](#instalações)
  - [👨‍💻 Rodando a aplicação no ambiente de desenvolvimento](#-rodando-a-aplicação-no-ambiente-de-desenvolvimento)
  - [📊 Rodando a aplicação no servidor da UFRN](#-rodando-a-aplicação-no-servidor-da-ufrn)
- [Instalações](#instalações-1)
  - [👨‍💻 Rodando a aplicação no ambiente de desenvolvimento](#-rodando-a-aplicação-no-ambiente-de-desenvolvimento-1)
  - [📊 Rodando a aplicação no servidor da UFRN](#-rodando-a-aplicação-no-servidor-da-ufrn-1)

<br>

<h2>Features</h2>

- [x] Cadastro e login de usuário
- [x] Sistema de hierarquia com níveis de acesso entre os usuários
- [x] Manipulação de categorias e recipientes
- [ ] Manipulação de itens
- [ ] Controle de estoque
- [ ] Processos operacionais

<br>


### Cadastro e login com hierarquia
A hierarquia utilizada no projeto é a de **Colaboradores** e **Administradores**. As permissões de cada um desses é dividida da seguinte forma:

**Colaboradores**: possuem somente a permissão de leitura das informações do estoque.

**Administradores**: possuem a permissão de leitura, criação e alteração do estoque, além de terem a permissão de aprovar e rejeitar usuários e também promover colaboradores para administradores. 

<br>

O **sistema de cadastro** é o trivial utilizado nos sites: contém apenas o nome, sobrenome, email e senha.

Quando um novo usuário cria sua conta, o perfil dele é mantido como **'não aprovado'** até que um **Administrador** do sistema, em função privilegiada, **aprove sua conta**.

<hr>


### Manipulação de categorias, recipientes e itens
No sistema, a maneira de registrar o estoque passa por um processo além de somente registrá-lo. Para dar baixa ou acrescentar um item ao estoque, é necessário que **anteriormente já tenha sido registrado o item**, contendo o **tipo de recipiente** (pote, tubo, pacote) e também a **categoria do item** (reagente, vidraria, bactérias), além de informações como medidas e volume.

**Somente o administrador** do sistema pode registrar recipientes e categorias, assim como os itens. 

Caso tais informações não tenham sido adicionadas previamente, o fórmulario de estoque ficará limitado somente aos dados que estão presentes no momento. Esse mesmo problema também pode acontecer no formulário de criação de item.

<hr>

### Sistema de estoque
Depois de registrado o item, o estoque já pode ser registrado e contabilizado à partir do botão "Adicionar estoque", sendo necessário escolher o item, a quantidade de itens e a validade deles. 

Para visualizar melhor as unidades de tal item, basta clicar nos três pontinhos da coluna de ações da tabela de estoque, logo em seguida aparecerá **todos os registros no momento**.

Para **registrar baixa**, basta clicar nos três pontinhos da página de detalhes do estoque e ir em "Registrar baixa". No formulário, d**everá ser colocado o número de itens que sofreram baixa, e não o número atual de itens.**

<hr>

<br>

## Instalações

### 👨‍💻 Rodando a aplicação no ambiente de desenvolvimento
Antes de começar, você vai precisar ter instalado em sua máquina a **versão 7.2 do PHP** para rodar este projeto.

Aqui não há nada fora do comum. Basicamente, você deve clonar o repositório e fazer os procedimentos padrões do Laravel para rodar a aplicação. **Não esquecendo de rodar as migrations**! 

```bash
# Clone este repositório
$ git clone https://github.com/Leonardo-Oliveira1/Gerenciamento-Microciclo.git

# Acesse a pasta do projeto no terminal/cmd
$ cd gerenciamento-microciclo

# Instale as dependências do Composer (essa instalação pode levar vários minutos)
$ composer install

# Instale as dependências do Node (essa instalação pode levar vários minutos)
$ npm install

$ Crie um banco de dados MySQL chamado de 'microciclo' e use a collation equivalente a 'utf8_general_ci'

$ Configure o seu arquivo .env.

# Crie uma chave para sua aplicação
$ php artisan key:generate

# Prontinho, pode rodar o projeto no seu computador
$ php artisan serve

```

Obs. ⚠️: o banco de dados vem vazio e você precisará criar registros nele. Também é necessário **alterar manualmente** o seu tipo de conta para **'Administrador(a)'** para ter acesso a todas as funções do sistema usando seu usuário.

<br>

### 📊 Rodando a aplicação no servidor da UFRN

Antes de tudo, vale lembrar que o projeto **se comporta de uma maneira completamente diferente** na hospedagem da UFRN para o desenvolvimento local. Outro detalhe é o uso do PHP 7.2 na hospedagem.

Para começar, você precisa upar os seus arquivos da forma que estão no desenvolvimento local para o servidor já que não é possível usar o terminal para executar comandos através do FTP. Porém, **todos os arquivos de dependências já estão alocados no servidor** e não é necessário o reupload deles, com exceção dos casos em que novas dependências são instaladas.

O **arquivo index** do projeto se encontra na pasta *public/index.php*. Ou no link: https://lbmg.cb.ufrn.br/Microciclo/dashboard/public/index.php

Como ainda não há nenhuma forma automatizada de fazer o commit dos arquivos para o servidor, em grande maioria das vezes você precisará **mudar os links manualmente das páginas**, tendo em vista que eles tomam a "pasta root" como https://lbmg.cb.ufrn.br/.

Sobre a conexão com o servidor, o arquivo .env, **por algum motivo, muda o host digitado na hora da compilaçao**. Por isso, é necessário que as informações de host, senha etc seja alterada diretamente na **seção de mysql do arquivo *config/database.php***: substitua toda a função do env por uma simples string para o username, host, port e password.

Feito todas essas etapas, a conexão com o servidor da UFRN e a conexão entre as páginas está feita no projeto.

<br>

## Instalações

### 👨‍💻 Rodando a aplicação no ambiente de desenvolvimento
Antes de começar, você vai precisar ter instalado em sua máquina a **versão 7.2 do PHP** para rodar este projeto.

Aqui não há nada fora do comum. Basicamente, você deve clonar o repositório e fazer os procedimentos padrões do Laravel para rodar a aplicação. **Não esquecendo de rodar as migrations**! 

```bash
# Clone este repositório
$ git clone https://github.com/Leonardo-Oliveira1/Gerenciamento-Microciclo.git

# Acesse a pasta do projeto no terminal/cmd
$ cd gerenciamento-microciclo

# Instale as dependências do Composer (essa instalação pode levar vários minutos)
$ composer install

# Instale as dependências do Node (essa instalação pode levar vários minutos)
$ npm install

$ Crie um banco de dados MySQL chamado de 'microciclo' e use a collation equivalente a 'utf8_general_ci'

$ Configure o seu arquivo .env.

# Crie uma chave para sua aplicação
$ php artisan key:generate

# Prontinho, pode rodar o projeto no seu computador
$ php artisan serve

```

Obs. ⚠️: o banco de dados vem vazio e você precisará criar registros nele. Também é necessário **alterar manualmente** o seu tipo de conta para **'Administrador(a)'** para ter acesso a todas as funções do sistema usando seu usuário.

<br>

### 📊 Rodando a aplicação no servidor da UFRN

Antes de tudo, vale lembrar que o projeto **se comporta de uma maneira completamente diferente** na hospedagem da UFRN para o desenvolvimento local. Outro detalhe é o uso do PHP 7.2 na hospedagem.

Para começar, você precisa upar os seus arquivos da forma que estão no desenvolvimento local para o servidor já que não é possível usar o terminal para executar comandos através do FTP. Porém, **todos os arquivos de dependências já estão alocados no servidor** e não é necessário o reupload deles, com exceção dos casos em que novas dependências são instaladas.

O **arquivo index** do projeto se encontra na pasta *public/index.php*. Ou no link: https://lbmg.cb.ufrn.br/Microciclo/dashboard/public/index.php

Como ainda não há nenhuma forma automatizada de fazer o commit dos arquivos para o servidor, em grande maioria das vezes você precisará **mudar os links manualmente das páginas**, tendo em vista que eles tomam a "pasta root" como https://lbmg.cb.ufrn.br/.

Sobre a conexão com o servidor, o arquivo .env, **por algum motivo, muda o host digitado na hora da compilaçao**. Por isso, é necessário que as informações de host, senha etc seja alterada diretamente na **seção de mysql do arquivo *config/database.php***: substitua toda a função do env por uma simples string para o username, host, port e password.

Feito todas essas etapas, a conexão com o servidor da UFRN e a conexão entre as páginas está feita no projeto.
