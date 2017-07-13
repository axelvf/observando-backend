# observando - backend

En este repositorio se encuentra el código fuente del backend del sitio [observando.net](https://observando.net) creado por Axel Marazzi.
Hoy su única función es obtener la información desde el newsletter de Mailchimp y parsear la respuesta devolviendo un JSON que luego es consumido por el frontend para mostrar en tiempo real los último 10 newsletters evitando tener que actualizarlo manualmente cada vez que se publica uno nuevo. 

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

## FAQ
Por consultas, reporte de errores o sugerencias podes [crear un issue](https://github.com/axelvf/observando-backend/issues)
