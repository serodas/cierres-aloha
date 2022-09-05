Proyecto Base para desarrollos en Symfony
===========

Descripción
---------------------
Este proyecto puede ser usado como base de proyectos creados con el framework PHP Symfony en la versión 3.x. Cuenta con la autenticación del **Bundle de SEC** y además se integro la libreria Javascript AdminLTE para tener un area Administrativa disponible. 

Objetivo
---------------------
Poder mantener una versión renovada del framework con los requisitos fundamentales para realizar desarrollos en la empresa.

Aspectos a tener en cuenta
---------------------

1. Todos los paquetes del framework se instalan y actualizan con [composer](https://getcomposer.org/).

2. Los componentes Javascript se actualizan con [Bower](https://bower.io/). y quedan alojados en la carpeta: **src/AppBundle/Resources/public/lib** y pueden ser publicados con el comando **php bin/console assets:install**

3. Los paquetes Javascript disponibles en este proyecto base son los siguientes:

    * AdminLTE
    * font-awesome
    * Ionicons
    * jquery
    * datatables.net-responsive
    * datatables.net 
    * datatables.net-bs
    * datatables.net-responsive-bs
    * bootstrap-daterangepicker
    * moment
    * x-editable
    * bootstrap-toggle
    * select2

4. En lo posible tratar de usar los componentes Javascript disponibles y si es del caso y se deba usar otro, buscar uno que tenga buen soporte y que pueda ser instalado con Bower.