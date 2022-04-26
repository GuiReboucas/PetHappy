## Ao Clonar o Repositório

<bold> Lembre de criar um `.env` copiar tudo do `.env.exemple` e configurar o `banco de dados` </bold>

<bold> Rode `composer install` no terminal do repositório local </bold>

<bold> Se der erro no `composer install` rode o `composer update` no terminal do repositório local </bold>

<bold> Se continuar com erro, procure o arquivo: `composer.json`, vá em `require` -> `"php": "^7.3"` , 
       coloque dentro das aspas `|^8.0` agora ele vai aceitar versões 8+.
       Ficará assim `"php": "^7.3|^8.0",`, 
       ai você vai rodar um   `composer install` e depois um `composer update` no terminal do repositório local.

</bold>
