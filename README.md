<h1 align="center"> zindex-dashboard-api </h1>
<p align="center"> Este projeto deverá rodar juntamente com o projeto zindex-dashboard-web </p>

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [PHP](https://www.php.net/downloads/), [Composer](https://getcomposer.org/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

- PHP >= 7.2.5
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

### 🎲 Rodando o zindex-dashboard-api

```bash
# Clone este repositório
$ git clone <https://github.com/fabriciobatalha/zindex-dashboard-api.git>

# Acesse a pasta do projeto no terminal/cmd
$ cd zindex-dashboard-api

# Instale as dependências
$ composer install

# Disponibilizando .env
$ cp .env.example .env

# Rode as migrations do banco de dados (Antes: informe as informações do banco de dados no .env)
$ php artisan migrate

# Execute a aplicação em modo de desenvolvimento
$ php artisan serve

# O servidor inciará na porta:8000 - acesse <http://localhost:8000>
```

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel](https://laravel.com/)
- [JWT](https://jwt.io/)
- [Eloquent ORM](https://laravel.com/docs/7.x/eloquent)
- [MySQL](https://www.mysql.com/)

### Autor
---

<a href="https://fabriciobatalha.dev/">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/31200112?s=400&u=ffd97c33178a838085dd7e8945ef9cd2233c84b1&v=4" width="100px;" alt=""/>
 <br />
 <sub><b> Fabrício S. Batalha </b></sub></a> <a href="https://fabriciobatalha.dev/" title="">🚀</a>


Feito com ❤️ por Fabrício S. Batalha 👋🏽 Entre em contato!

[![Linkedin Badge](https://img.shields.io/badge/-Fabrício-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/fabriciobatalha/)](https://www.linkedin.com/in/fabriciobatalha) 
[![Gmail Badge](https://img.shields.io/badge/-fabriciobatalha.dev@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:fabriciobatalha.dev@gmail.com)](mailto:fabriciobatalha.dev@gmail.com)
