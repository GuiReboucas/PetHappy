## Ao Clonar o Repositório

<bold> Rode `composer install` na diretório do repositório local </bold>

<bold> Se der erro no `composer install` rode o `composer update` na diretório do repositório local </bold>

<bold> Se continuar com erro procure o arquivo `composer.json`, vá em `require` -> `"php": "^7.3"` , coloque o `|^8.0` agora ele vai aceitar versões 8+
    ficará assim `"php": "^7.3|^8.0"`, </bold>
