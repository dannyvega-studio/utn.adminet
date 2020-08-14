# utn.adminet
Proyecto realizado como trabajo en equipo para la materia de desarrollo web, creando un sistema de administración usando una BD

Esta aplicacion web genera reportes en pdf de la informacion guardada

Link: https://dannyvega-studio.github.io/utn.adminet/

al iniciar encontramos el login.php en el cual ingresamos el usuario asignado por default (usuario: admin / contraseña:password)

![](screenshot/01-login.png)

luego se muestra la pagina de inicio la cual solo contiene un carrusel ilustrativo de informacion de la empresa C&S.

![](screenshot/02-inicio.png)

la seccion de PANEL donde encontramos las diferentes categorias que se pueden administrar (EMPLEADOS, CONTRATOS, SERVICIOS, EMPRESAS ,ETC)

![](screenshot/03-panel.png)

despues de acceder a cualquier segmento del panel se muestra la siguiente ventana que posee un cuadro de bienvenida y una tabla con la informacion que contiene actualmente la BD

![](screenshot/04-panel-ventanas.png)

al dar click en el boton NUEVO nos aparece el siguiente formulario, en el cual el usuario ingresa la informacion, cabe mencionar que por validaciones de campo el usuario no puede dejar campos en blanco y/o que no cumplan con el tipo de dato y/o el formato (ejemplo el correo, rfc, telefono)

OJO: este mismo diseño se aplica en el formulario de EDITAR, con la diferencia de que en este los campos ya se encuentran llenos con la informaicon, solo es modificar algun error de captura.

![](screenshot/05-registro.png)

![](screenshot/06-validaciones.png)

Una vez todos los datos son correctos se muestra un mensaje de registro exitoso y nos regresa a la ventana de la seccion donde se mostrara que ha añadido la informacion a la tabla.

![](screenshot/07-validacion-ok.png)

![](screenshot/08-formulario.png)

en la seccion de REPORTES, nos genera un pdf al dar click en su correspondiente boton, con la informacion de la BD correspondiente a ese segmento.

![](screenshot/09-reportes.png)

![](screenshot/10-descarga-reporte.png)

en cuanto a la seccion de MANUALES que encontramos en la barra de navegacion, este se depsliega mostrando los diferentes manuales con los que cuenta, al dar click en ellos se nos abriran en una ventana nueva.

![](screenshot/11-manuales.png)

![](screenshot/12-manuales-formatos.png)
