# Como hacer las peticiones en un form

```php
<form action="<?php echo BASE_PATH; ?>ruta/sub-ruta" method="POST">
    <input type="text" name="valor-1"><br>
    <input type="text" name="valor-2"><br>
    <input type="hidden" name="action" value="accion">
    <button type="submit">Boton</button>
</form>
```
Los campos deben estar de esta forma

* Ruta: ahi se pondra la ruta de una entidad
```php
<form action="<?php echo BASE_PATH; ?>ruta/sub-ruta" method="POST">
```

* Campos: los campos input con su name
```php
<input type="text" name="valor-1"><br>
<input type="text" name="valor-2"><br>
```

* la etiqueta input con el tipo hidden para dar la accion de la peticion

<hr>

# Como recibe los datos de la sesion una vez logeado con la peticion login

```php
$_SESSION['token']
```

Devuelve el token de la cuenta

```php
$_SESSION['profile']
```

Devuelve los datos de la cuenta

<hr>

# Peticiones

## Autenticacion

Ruta: <RUTA_BASE>/api/auth

### Accion: login

```html
<input type="hidden" name="action" value="login">
```

### Campos

* name
* passsword

### Resultado

Luego de la peticion te manda al home, importante usar esta linea en cada vista que se ocupe una sesion

```php
session_start();
```