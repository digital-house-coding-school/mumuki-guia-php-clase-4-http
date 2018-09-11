El formulario es **muy parecido** al anterior

``` html
<form method="POST" action="registracion.php">
  <input type="email" name="email" required>
  <input type="text" name="usuario">
</form>
```

Pero el nombre de usuario es optativo!

Tu trabajo es escribir una funcion `bienvenida` que tome la información del formulario y retorne un string que diga:

**Bienvenido USERNAME. Ha sido registrado con el email EMAIL** 

Si el usuario no ingresa **username** simplemente debe devolver

**Bienvenido EMAIL**

En estos textos USERNAME y EMAIL deben ser reemplazados con la información provista por el usuario.

Si no estas sabes como hacerlo, no dudes en hacer `var_dump($_POST);exit;` para ver el formato de como llega la información.

