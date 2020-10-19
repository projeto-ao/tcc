# XAMPP

## Instalação e configuração do projeto

**1.** Baixar e instalar nessa ordem: <br/>
  > **1º** **[XAMPP](https://www.apachefriends.org/pt_br/index.html)**  
  > **2º** **[Composer](https://getcomposer.org/download/)**  
  > **3º** **[Node.js](https://nodejs.org/en/)**  

**2.** Clonar o repositório na pasta xampp/htdocs/  
**3.** Copiar o arquivo **.env.example-xampp** e renomear como **.env**, mantendo ele na raiz do projeto  
**4.** Iniciar a interface do XAMPP e inciar os módulos **Apache** e **MySQL**  
**5.** Abrir o terminal na pasta raiz do projeto  
**6.** Instalar o composer com o comando **composer install**  
**7.** Criar uma chave laravel com o comando **php artisan key:generate**  
**8.** Criar um banco de dados nomeado **ao** no **localhost/phpmyadmin**  
**9.** Executar as migrações com **php artisan migrate**  
**10.** Instalar as dependências de frontend com o comando **npm install** e em seguida **npm run dev**  
**11.** Para executar o projeto, consulte a seção **Executando**  

## Executando

**1.** Abrir o terminal na pasta raiz do projeto  
**2.** Caso não haja nenhuma mudança local não salva, baixar as atualizações do projeto com **git pull** e fechar o termina  
**3.** Iniciar a interface do XAMPP e inciar os módulos **Apache** e **MySQL**  
**4.** Executar o projeto a partir do navegador com a url **localhost/projeto-ao/**  
