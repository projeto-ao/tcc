# Projeto AO

Trabalho de conclusão de curso, realizado na ETEC Dep. Salim Sedeh, Leme-SP no ano de 2020. <br/>
Desenvolvido por Gustavo Henrique Pinto e Thayná Alves de Sousa. <br/>

## O que é AO?

AO significa mundos na língua Maori, o que representa muito bem a ideia dessa rede social. Ela é voltada em prol do meio ambiente, onde você se conectará com outras pessoas com a mesma ideia de preservação ambiental, nos conectando a um novo mundo. <br/>

## Instalando e Executando

**1 -** Baixar e instalar o **Git**, o **Docker** e o **Node.js** para windows <br/>
**2 -** Clonar a pasta do projeto com _"git clone"_ <br/>
**3 -** Copiar o arquivo .env.example e renomear ele apenas para .env (manter ele na pasta raiz do projeto) <br/>
**4 -** Seguir os passos de 1 a 5 da seção **Executando com Docker para windows** <br/>
**5 -** Seguir os passos de 1 a 7 da seção **Instalando o Composer e dependências** <br/>
**6 -** Para executar o projeto no navegador use a url 'localhost' <br/>

### Executando com Docker para windows

**1 -** Inicie o Docker para windows <br/>
**2 -** Abrir a pasta do projeto <br/>
**3 -** apertar _"Shift + Botão Direito do mouse"_ e escolher a opção _"Abrir a janela do PowerShell aqui"_ <br/>
**4 -** No terminal executar o docker com o comando _"docker-compose up -d"_ <br/>
**5 -** Ainda no terminal do powershell baixar as atualizações do projeto com _"git pull"_ <br/>
**6 -** Para executar o projeto no navegador use a url 'localhost' <br/>

### Instalando o Composer e dependências

**1 -** Entrar no terminal do php com _"docker-compose exec php bash"_ <br/>
**2 -** Dentro do terminal do php executar o comando _"cd .."_ para entrar na pasta /var/www <br/>
**3 -** Instalar o composer com o comando _"composer install"_, esse passo pode demorar <br/>
**4 -** Criar uma chave laravel com o comando _"php artisan key:generate"_ <br/>
**5 -** Executar as migrações com _"php artisan migrate"_, pode ser que não haja nenhuma migração <br/>
**6 -** Sair do terminal do php com o comando _"exit"_ <br/>
**7 -** Instalar as dependências de frontend com o comando _"npm install"_ e em seguida _"npm run dev"_ <br/>
**8 -** Pronto! o Composer e as dependências já estão instaladas e configuradas <br/>
