![PHP 7 ready](https://freelance.axelvf.com.ar/badges/php7-supported.svg)

# observando - backend

En este repositorio se encuentra el código fuente del backend del sitio [observando.net](https://observando.net) creado por Axel Marazzi.
Hoy su única función es obtener la información desde el newsletter de Mailchimp y parsear la respuesta devolviendo un JSON que luego es consumido por el frontend para mostrar en tiempo real los último 10 newsletters evitando tener que actualizarlo manualmente cada vez que se publica uno nuevo. 

## Configuración
Se debe editar el valor de la variable $mailchimp_campaign que se encuentra dentro del archivo mailchimp.php ubicado en la carpeta web:
```php
$mailchimp_campaign='http://us14.campaign-archive2.com/home/?u=d914367325f70121f44ffcafb&id=1d2d0d3d76';
```
### Opcional
El valor de la variable $posts_limit se utiliza para filtrar la cantidad de post a mostrar en la respuesta. El predeterminado es 10.

## Deploy manual
Copie únicamente los archivos ubicados dentro de la carpeta web en su sitio web.

## Deploy utilizando Heroku

Instale [Heroku Toolbelt](https://toolbelt.heroku.com/).

```sh
$ git clone git@github.com:axelvf/observando-backend.git # or clone your own fork
$ cd observando-backend
$ heroku create
$ git push heroku master
$ heroku open
```

o

[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

## Demo
[https://observando-backend.herokuapp.com/](https://observando-backend.herokuapp.com/)

* [Mailchimp](https://observando-backend.herokuapp.com/mailchimp.php)

## Autor
Este backend fue creado de onda por [Axel Vasquez](https://axelvf.com.ar) como contribución al laburo que realiza mi tocayo semana a semana.

## Agradecimientos
[@valenzine](https://github.com/valenzine/observando-backend): Soporte sobre PHP 5. [Pull 1](https://github.com/axelvf/observando-backend/pull/1)

[@tatimonavalle](https://twitter.com/tatimonavalle): Utiliza este código dentro de su newsletter llamado [Elemental](http://elemental.email)

## FAQ
Por consultas, reporte de errores o sugerencias podes [crear un issue](https://github.com/axelvf/observando-backend/issues)
