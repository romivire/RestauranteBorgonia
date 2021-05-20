## Restaurante La Borgonia

### Link deploy heroku: http://proyecto-heroku-iaw-romivire.herokuapp.com

### Descripción:
La aplicacion desarrollada le permite a un restaurante administrar su menu y sus reservas, brindando un sistema para que los clientes puedan realizar sus reservas asi como tambien modificarlas mediante el identificador de la misma. Ademas, permite que el cliente pueda pre-visualizar el menu del lugar.

Una de las entidades son los platos, los cuales tienen un identificador, un nombre, una categoria (Carne,Pescado,Pasta,Postre,Ensalada), un precio, una indicacion de si se trata de un plato vegetariano y una imagen correspondiente. 

Otra de las entidades son las reservas, las cuales tienen un identificador, una fecha, una hora (dentro de un rango preestablecido), una cantidad de personas y una opcional observacion.

Por ultimo, la entidad restaurante es unica y posee un identificador, un nombre, una direccion y una capacidad de personas. 

### Usuarios:
Los unicos usuarios registrados seran: 
-El Administrador (con rol 'Admin') que puede hacer el ABM de reservas y de platos, pero ademas, puede modificar datos de los usuarios y del restaurante.
-El Editor (con rol 'Editor') que puede realizar ABM de reservas y platos.

Los usuarios restantes seran clientes y pueden realizar consulta, alta y modificacion de reservas mediante su correspondiente ID, asi como tambien pueden visualizar el menu del restaurante

Admin:
  * user: admin@gmail.com
  * pwd: Admin1234

Editor:
  * user: editor@gmail.com
  * pwd: Editor1234

### Prueba de API
La API le permite a los clientes (usuarios no logueados) ver la informacion referida a un ID de reserva y modificarla. Ademas, les permite visualizar todos los platos del lugar. El archivo Postman se encuentra en la carpeta 'postman'. Es una API sin restriccion de acceso.

#### Request 'GET Platos'
Permite obtener todos los platos
Ruta para obtener datos de los platos => http://proyecto-heroku-iaw-romivire.herokuapp.com/api/platos

#### Request 'GET Reserva'
Permite obtener una reserva a partir de un ID
Ruta para obtener datos de la reserva (Ejemplo con ID=1) => http://proyecto-heroku-iaw-romivire.herokuapp.com/api/reservas/1

#### Request 'POST Reserva'
Permite modificar los datos de una reserva a partir de un ID
Ruta para enviar datos de la reserva (Ejemplo con ID=1) => http://proyecto-heroku-iaw-romivire.herokuapp.com/api/reservas/1
Parámetros para hacer dicho request con el metodo POST: fecha - hora - cantidad personas - observacion

Ejemplo
* "fecha" = 2020-02-27
* "hora" = 19:00:00
* "cantidad personas" = 6
* "observacion" = Esto es un simulacro

Al ejecutar el request, en caso de que sea un request exitoso, retorna los datos de la reserva actualizada.

### Librerias externas:
* Laravel Breeze
* Laravel Permission
* FontAwesome

