### Instalando XAMPP e preparação básica do projeto

**1 -** Baixar e instalar **nessa ordem**: o XAMPP, o Composer e o Node.js<br/>
**2 -** Clonar o repositório na pasta xampp/htdocs/ com **git clone https://github.com/projeto-ao/projeto-ao.git** <br/>
**3 -** Copiar o arquivo **.env.example-xampp** e renomear como **.env**, mantendo ele na raiz do projeto <br/>
**4 -** Iniciar a interface do XAMPP e inciar os módulos **Apache** e **MySQL** <br/>
**5 -** Abrir o terminal na pasta raiz do projeto <br/>
**6 -** Instalar o composer com o comando **composer install** <br/>
**7 -** Criar uma chave laravel com o comando **php artisan key:generate** <br/>
**8 -** Criar um banco de dados nomeado **ao** no **localhost/phpmyadmin** <br/>
**9 -** Executar as migrações com **php artisan migrate** <br/>
**10 -** Instalar as dependências de frontend com o comando **npm install** e em seguida **npm run dev** <br/>
**11 -** Para executar o projeto, consulte a seção **Executando** <br/>

## Executando

**1 -** Abrir o terminal na pasta raiz do projeto <br/>
**2 -** Caso não haja nenhuma mudança local não salva, baixar as atualizações do projeto com **git pull** e fechar o terminal<br/>
**3 -** Iniciar a interface do XAMPP e inciar os módulos **Apache** e **MySQL** <br/>
**4 -** Executar o projeto a partir do navegador com a url **localhost/projeto-ao/** <br/>