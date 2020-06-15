# Projeto AO

Trabalho de conclusão de curso, realizado na ETEC Dep. Salim Sedeh, Leme-SP.

Desenvolvido por Gustavo Henrique Pinto e Thayná Alves de Sousa.

## O que é AO?

AO significa mundos na língua Maori, o que representa muito bem a ideia dessa rede social. Ela é voltada em prol do meio ambiente, onde você se conectará com outras pessoas com a mesma ideia de preservação ambiental, conectando eu e você a um novo mundo.

## Documentações uteis

**Laravel:** https://laravel.com/docs/7.x <br/>
**Composer:** https://getcomposer.org/doc/ <br/>
**Docker:** https://docs.docker.com/ <br/>

## Instalação inicial

**1 -** Baixar e instalar o Git e o Docker para windows <br/>
**2 -** Clonar a pasta do projeto com "git clone"<br/>
**3 -** Copiar o arquivo .env.example e renomear ele apenas para .env (manter ele na pasta raiz do projeto) <br/>
**4 -** Seguir os passos de 1 a 5 da parte de **Executando com Docker para windows** <br/>
**5 -** Entrar no terminal do php com "docker-compose exec php bash" <br/>
**5.1 -** Dentro do terminal do php executar o comando "cd .." para entrar na pasta /var/www <br/>
**5.2 -** Instalar o composer com o comando "composer install", esse passo pode demorar <br/>
**5.3 -** Executar as migrações com "php artisan migrate", pode ser que não haja nenhuma migração <br/>
**5.4 -** Sair do terminal do php com o comando "exit" <br/>
**6 -** Para executar o projeto no navegador use a url 'localhost'. <br/>

## Executando com Docker para windows

**1 -** Inicie o Docker para windows <br/>
**2 -** Abrir a pasta do projeto <br/>
**3 -** apertar "Shift + Botão Direito do mouse" e escolher a opção "Abrir a janela do PowerShell aqui" <br/>
**4 -** No terminal executar o docker com o comando "docker-compose up -d" <br/>
**5 -** Ainda no terminal do powershell baixar as atualizações do projeto com "git pull" <br/>
**6 -** Para executar o projeto no navegador use a url 'localhost'. <br/>
