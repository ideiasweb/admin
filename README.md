## Em desenvolvimento...

### Admin - Agencia Ideiasweb

##### Instalação


1 - Adicione o repositorio no seu arquivo `composer.json`

~~~~
"repositories": [
  {
    "type": "github",
    "url": "https://github.com/ideiasweb/admin"
  }
]
~~~~

2 - Execute o seguinte comando para adicionar o admin no projeto:

`composer require ideiasweb/admin`

3 - Publique os arquivos necessarios para funcionamento do admin:

* `php artisan vendor:publish --tag="ideiasweb/admin~config"`
* `php artisan vendor:publish --tag="ideiasweb/admin~assets"`

4 - Exclua as migrations que vem por padrao no laravel:

`rm -rf database/migrations/*`


5 - Rode o migration:

`php artisan migrate`

#

#### Pronto, bom proveito :)
