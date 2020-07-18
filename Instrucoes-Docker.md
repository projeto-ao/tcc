### Instalando Docker e preparação básica do projeto

**1 -** Baixar e instalar o Docker e o Node.js <br/>
**2 -** Clonar o repositório em uma pasta qualquer com **git clone https://github.com/projeto-ao/projeto-ao.git** <br/>
**3 -** Copiar o arquivo **.env.example-docker** e renomear como **.env**, mantendo ele na raiz do projeto <br/>
**4 -** Abrir o terminal na pasta raiz do projeto <br/>
**5 -** Iniciar o Docker <br/>
**6 -** No terminal executar o docker-compose com o comando **docker-compose up -d** <br/>
**7 -** Entrar no terminal do php com **docker-compose exec php bash** <br/>
**8 -** Dentro do terminal do php executar o comando **cd ..** para entrar na pasta /var/www <br/>
**9 -** Instalar o composer com o comando **composer install** <br/>
**10 -** Criar uma chave laravel com o comando **php artisan key:generate** <br/>
**11 -** Executar as migrações com **php artisan migrate** <br/>
**12 -** Sair do terminal do php com o comando **exit** <br/>
**13 -** Instalar as dependências de frontend com o comando **npm install** e em seguida **npm run dev** <br/>
**14 -** Para executar o projeto, consulte a seção **Executando** <br/>

## Executando

**1 -** Abrir o terminal na pasta raiz do projeto <br/>
**2 -** Caso não haja nenhuma mudança local não salva, baixar as atualizações do projeto com **git pull** <br/>
**3 -** Iniciar o Docker e executar com **docker-compose up -d** <br/>
**4 -** Executar o projeto a partir do navegador com a url **localhost/** <br/>

