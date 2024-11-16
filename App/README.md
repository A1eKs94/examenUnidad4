# Como hacer las peticiones en un form

```php
<form action="<?php echo BASE_PATH; ?>api" method="POST">
    <input type="text" name="valor-1"><br>
    <input type="text" name="valor-2"><br>
    <input type="hidden" name="action" value="accion">
    <button type="submit">Boton</button>
</form>
```
Los campos deben estar de esta forma

* Ruta: Todas las peticiones se haran en la misma ruta (BASE_PATH/api)
```php
<form action="<?php echo BASE_PATH; ?>api" method="POST">
```

* Campos: los campos input con su name
```php
<input type="text" name="valor-1"><br>
<input type="text" name="valor-2"><br>
```

* la etiqueta input con el tipo hidden para dar la accion de la peticion, en la seccion de Peticiones vienen todos los metodos que se pueden llamar en este campo

<hr>

# Como hacer las peticiones con funciones

```php
$datos = $controller->funcionBackend((object)["campo_1" => "dato_1", "campo_2" => "dato_2"])
```

*$datos: variable que almacena los datos de la respuesta en json
*$controller: funcion principal para los controladores. NOTA: OCUPA IMPORTAR EL ARCHIVO 'Controller.php' QUE ESTA DENTRO DE LA CARPETA 'App'
*funcionBackend: Funcion para llamar a un metodo del backend, estaran enlistadas en la seccion de "Peticiones"

Dentro del argumento de cada peticion backend necesita un parametro que es el "$request", este es un objeto json y se hace como viene en el ejemplo de arriba.

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

Nota: Debe tener la funcion session_start();

<hr>

# Peticiones

## Autenticacion

### Peticion desde Form

### Accion: login

```html
<input type="hidden" name="action" value="login">
```

### Campos

* name
* passsword

### Resultado

Luego de la peticion te manda al home.

NOTA: Importante usar esta funcion en cada vista que se ocupe una sesion

```php
session_start();
```

## getUser

### Peticion desde una funcion

### funcion Backend: getUser($request)

### Campos

```php
$request = (object)[
    "id" => id,
    "token" => token
    ];
```

### Resultado

JSON de los datos del usuario

## updateUser

### Peticion desde un Form

### Accion: updateUser

```html
<input type="hidden" name="action" value="updateUser">
```

### Campos:
* redirect_url <-- NOTA: Este campo lo empezare a incluir en varias peticiones, es para redireccionar a una pagina, solo ocupas poner lo que viene despues de la BASE_PATH. Por ejemplo:

```html
<input type="hidden" name="redirect_url" value="productos/detalles">
```

* token
* name
* lastname
* email
* phone_number
* created_by
* password
* id

### Resultado

Redirecciona a la pagina que se haya ingresado en "redirect_url"
Si sucedio algun error se podra checar en estos dos datos de sesion

```php
$_SESSION['message']
$_SESSION['id_status']
```

## createUser

### Peticion desde un Form

### Accion: createUser

```html
<input type="hidden" name="action" value="createUser">
```

### Campos:
* name
* lastname
* email
* phone_number
* created_by
* password
* profile_photo_file
* redirect_url
* token

### Resultado

Redirecciona a la pagina que se haya ingresado en "redirect_url"
Si sucedio algun error se podra checar en estos dos datos de sesion

```php
$_SESSION['message']
$_SESSION['id_status']
```
### Seguire llenando este documento cuando ponga mas metodos.