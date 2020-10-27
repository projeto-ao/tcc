# Projeto AO
Trabalho de conclusão de curso, realizado na ETEC Dep. Salim Sedeh, Leme-SP no ano de 2020.  
Desenvolvido por Gustavo Henrique Pinto (@ghp2201) e Thayná Alves de Sousa (@thaynaAS).  

## O que é AO?
AO significa mundos na língua Maori, o que representa muito bem a ideia dessa rede social. Ela é voltada em prol do meio ambiente, onde você se conectará com outras pessoas com a mesma ideia de preservação ambiental, nos conectando a um novo mundo.  

## Ambientes de execução e desenvolvimento
O projeto AO pode ser executado em qualquer plataforma que cumpra com as dependências do framework Laravel 7.x, porém é fortemente recomendado que seu uso seja feito a partir do ambiente **Docker** afim de se evitar quaisquer problemas.  

A equipe de desenvolvimento não se responsabiliza por quaisquer erros ocasionados em outras plataformas de execução e desenvolvimento senão o **Docker**.  

## Instalação e configuração do projeto
1. Baixar e instalar o **[Docker][1]**  
2. Clonar esse repositório no diretório desejado  
3. Copiar e colar o arquivo _.env.example_ na pasta raiz  
4. renomear o arquivo _.env.example_ como _.env_  
5. Abrir o terminal na pasta raiz do projeto  
6. Iniciar o Docker  
7. No terminal executar o docker-compose com o comando `docker-compose up -d`  
8. Entrar no terminal do php com `docker-compose exec php bash`  
9. Dentro do terminal do php executar o comando `cd ..`
10. Instalar o composer com o comando `composer install`  
11. Criar uma chave Laravel com o comando `php artisan key:generate`  
12. Executar as migrações com `php artisan migrate`  
13. Sair do terminal do php com o comando `exit`  

## Executando
1. Abrir o terminal na pasta raiz do projeto  
2. Iniciar o Docker com o comando `docker-compose up -d`  
3. Executar o projeto a partir do navegador com a url _localhost/_  


[1]: https://www.docker.com/get-started
