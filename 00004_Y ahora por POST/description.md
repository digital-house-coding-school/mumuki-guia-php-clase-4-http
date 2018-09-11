El usuario completa un formulario en HTML con el siguiente formato:

``` html
<form method="POST" action="registracion.php">
  <input type="email" name="email" required>
  <input type="text" name="usuario" required>
</form>
```

Tu trabajo es escribir una funcion `bienvenida` que tome la información del formulario y retorne un string que diga:

**Bienvenido USERNAME. Ha sido registrado con el email EMAIL** 

En este texto USERNAME y EMAIL debe ser reemplazado con la información provista por el usuario.

