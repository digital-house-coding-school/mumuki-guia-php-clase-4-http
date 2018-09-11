Ahora el usuario entra en `http://digitalcommerce.com/buscador.php?busqueda=XXX` donde XXX es el término buscado por el usuario :mag:.

El problema es que a veces, y solo a veces, el usuario elije ordenar los resultados por algún criterio. En ese caso la URL se ve así: 
`http://digitalcommerce.com/buscador.php?busqueda=XXX&ordenar=YYY` donde YYY podría ser por ejemplo "fecha" o "puntuacion".

Tu función búsqueda debe retornar un **string** que diga "El termino buscado es XXX" aunque si existe el campo de ordenamiento debería decir "El termino buscado es XXX ordenado por YYY".

Recomendamos utilizar la función [isset](http://php.net/manual/es/function.isset.php) para validar si el campo de ordenamiento existe.

¡Éxitos!