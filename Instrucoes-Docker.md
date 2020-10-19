# Docker

## Instalação e configuração do projeto

**1.** Baixar e instalar o **[Docker](https://www.docker.com/get-started)**<br/>
**2.** Clonar o repositório em uma pasta qualquer  
**3.** Copiar o arquivo **.env.example-docker** e renomear como **.env**, mantendo ele na raiz do projeto  
**4.** Abrir o terminal na pasta raiz do projeto  
**5.** Iniciar o Docker  
**6.** No terminal executar o docker-compose com o comando **docker-compose up -d**  
**7.** Entrar no terminal do php com **docker-compose exec php bash**  
**8.** Dentro do terminal do php executar o comando **cd ..** para entrar na pasta /var/www  
**9.** Instalar o composer com o comando **composer install**  
**10.** Criar uma chave laravel com o comando **php artisan key:generate**  
**11.** Executar as migrações com **php artisan migrate**  
**12.** Sair do terminal do php com o comando **exit**  
**13.** Para executar o projeto, consulte a seção **Executando**

## Executando

**1** Abrir o terminal na pasta raiz do projeto  
**2.** Caso não haja nenhuma mudança local não salva, baixar as atualizações do projeto com **git pull**  
**3.** Iniciar o Docker e executar com **docker-compose up -d**  
**4.** Executar o projeto a partir do navegador com a url **localhost/**  
