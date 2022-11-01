# **RetoBackend


## Pasos de abordaje:

* * *
### Iniciar proyecto en laravel

1. Iniciar proyecto de Laravel en docker
2. Instalar TailWindCss
3. Levantar servicios

...Se continuara con laravel despues de trabajar con la base de datos

***

### Bases de datos realcionales

1. Visualización de información a trabajar
2. Detectar primarykey y datos relevantes
3. Diseñar tablas en base de datos(en esta ocasión solo era una pero se analizo obtener más apartir de la primer tabla)
4. Diseñar migraciones en proyecto de laravel
5. Como no contaremos con un Id, se asignara mediante un modelo la primarykey que se utilizara
6. Se realizan migraciones
7. Se importan datos de https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx
8. Se valida información importada

***

### Codigo en Laravel

1. Se crea la vista principal para poder seleccionar el codigo postal a buscar, en esta vista se creó el campo input para escoger el codigo postal 
2. Se utiliza model view controller para el manejo de las funciones y rutas
3. Se crean los controladores a utilizar, el buscador [BuscarController] y la api [ApiController]
4. En el BuscadorController se realizara la validación del valor obtenido en la vista principal y se obtendra el codigo postal para ser enviado a la api
5. En la ApiController se realizara la busqueda de la información del codigo postal seleccionado mediante eloquents 
6. Se obtendra la información de la base de datos y se colocara en arrays para su conversion en json
7. Se brindara una salida de la información mediante el return mencionando que es una json para su formato adecuado

***

## Destacables

* Se utiliza Eloquents para las consultas a la base de datos por lo que al solo importar los modelos, se realizan consultas con menos codigo
y más faciles de entender
* Se realiza interface para selecionar codigo postal de manera más intuitiva y facil para un usario
* Se deja la autenticación del usuario, para futuras actualizaciones o extenciones en el codigo
* En general se realiza reto con pocas lineas de codigo
* Se realizan comentarios generales dentro del codigo para mayor entendiemiento del mismo**

