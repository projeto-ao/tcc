# Projeto AO
Trabalho de conclusão de curso, realizado na ETEC Dep. Salim Sedeh, Leme-SP no ano de 2020.  
Desenvolvido por [Gustavo Henrique Pinto][2] e [Thayná Alves de Sousa][3].  

## O que é AO?
AO significa mundos na língua Maori, o que representa muito bem a ideia dessa rede social. Ela é voltada em prol do meio ambiente, onde você se conectará com outras pessoas com a mesma ideia de preservação ambiental, nos conectando a um novo mundo.  

## Ambientes de execução e desenvolvimento
O projeto AO pode ser executado em qualquer plataforma que cumpra com as dependências do framework Laravel 7.x, porém é fortemente recomendado que seu uso seja feito a partir do ambiente **Docker** afim de se evitar quaisquer problemas.  

A equipe de desenvolvimento não se responsabiliza por quaisquer erros ocasionados em outras plataformas de execução e desenvolvimento senão o **Docker**.  

## Instalação e configuração do projeto
1. Baixar e instalar o [Docker][1]  
2. Clonar esse repositório no diretório desejado  
3. Copiar e colar o arquivo _.env.example_ na pasta raiz do projeto  
4. renomear o arquivo copiado como _.env_
5. Iniciar o Docker  
6. Abrir o terminal na pasta raiz do projeto  
7. No terminal iniciar o ambiente Docker com o comando `docker-compose up -d`  
8. Entrar no PHP Bash com `docker-compose exec php bash`  
9. Dentro do PHP Bash executar os seguintes comandos  
    1. `cd ..` - Altera o diretório atual para _/var/www/_  
    2. `composer install` - Instala o Composer e suas dependências  
    3. `php artisan key:generate` - Cria uma chave Laravel  
    4. `php artisan migrate` - Executa as migrations e inicia o banco de dados  
    5. `exit` - Encerra o PHP Bash  
10. Executar o projeto a partir do navegador com a url _localhost/_ 

## Executando
1. Abrir o terminal na pasta raiz do projeto  
2. Iniciar o Docker com o comando `docker-compose up -d`  
3. Executar o projeto a partir do navegador com a url _localhost/_  


[1]: https://www.docker.com/get-started
[2]: https://github.com/gustapinto
[3]: https://github.com/thaynaas
