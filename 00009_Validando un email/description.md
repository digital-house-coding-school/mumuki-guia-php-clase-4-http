El formulario que nos llega viaja por POST tiene un 

``` html
<input type="text" name="email">
```

Tu tarea es completar la función `validarEmail` que se comporte del siguiente modo:

1. Si el campo esta vacío debe retornar el texto "El campo esta vacio"
2. Si el campo esta completo pero no es un email debe retornar el texto "El campo no es un email"
3. Si el campo cumple ambas condiciones, debe retornar el texto "Correcto"

Podrías utilizar la función [filter_var](http://php.net/manual/es/function.filter-var.php) para validar que el email sea correcto

