<h1 align="center">
  Report Generator for Aloha POS Data
</h1>

<p align="center">
    This project is a report generator that connects to the SQL Server database of another application called Aloha POS from Soluciones Fourgen.
    Aloha POS is a point-of-sale system that does not have support.
    The report generator is developed in Symfony 3.4 and allows users to create and export customized reports based on the data from Aloha POS.
  <br />
  <br />
</p>

# Preview
![Preview](/reports_generator_aloha.gif)

# Installation
1. All the packages of the framework are installed and updated with [composer](https://getcomposer.org/)
 ```bash
     composer install
 ```

2. The Javascript components are updated with [Bower](https://bower.io/). and are hosted in the folder: **src/AppBundle/Resources/public/lib** nd can be published with the command  **php bin/console assets:install**

# Stack PHP
    * PHP 7.1
    * Symfony 3.4

# Stack Javascript
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