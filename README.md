## Restaurante La Borgonia

### Link deploy heroku: http://proyecto-heroku-iaw-romivire.herokuapp.com

### Descripción:
La aplicacion desarrollada le permite a un restaurante administrar su menu y sus reservas, brindando un sistema para que los clientes puedan realizar sus reservas asi como tambien modificarlas mediante el identificador de la misma. Ademas, permite que el cliente pueda pre-visualizar el menu del lugar.

Una de las entidades son los platos, los cuales tienen un identificador, un nombre, una categoria (Carne,Pescado,Pasta,Postre,Ensalada), un precio, una indicacion de si se trata de un plato vegetariano y una imagen correspondiente. 

Otra de las entidades son las reservas, las cuales tienen un identificador, una fecha, una hora (dentro de un rango preestablecido), una cantidad de personas y una opcional observacion.

Por ultimo, la entidad restaurante es unica y posee un identificador, un nombre, una direccion y una capacidad de personas. 

### Usuarios:
Los unicos usuarios registrados seran: 
-El Administrador (con rol 'Admin') que puede hacer el ABM de reservas y de platos, pero ademas, puede modificar datos del restaurante.
-El Editor (con rol 'Editor') que puede realizar ABM de reservas y platos.

Los usuarios restantes seran clientes y pueden realizar consulta, alta y modificacion de reservas mediante su correspondiente ID, asi como tambien pueden visualizar el menu del restaurante

Admin:
  * user: admin@gmail.com
  * pwd: Admin1234

Editor:
  * user: editor@gmail.com
  * pwd: Editor1234

### Librerias externas:
* Laravel Breeze
* Laravel Permission
* FontAwesome

