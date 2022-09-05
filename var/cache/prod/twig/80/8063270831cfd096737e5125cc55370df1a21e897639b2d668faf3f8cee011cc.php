<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* AppBundle:Venta:reportedetalleproductosvendidos.html.twig */
class __TwigTemplate_60b7a3d3770da79f945efe31c599e7b519a8d575e78fc7539f90e8c8fb10636b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AppBundle:Principal:body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Venta:reportedetalleproductosvendidos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Reporte Productos";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "       <form name=\"productos\" id=\"productos\" action=\"\" method=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Desde</label>
                <input type=\"text\" id=\"desde\" name=\"desde\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Hasta</label>
                <input type=\"text\" id=\"hasta\" name=\"hasta\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-productos\" name=\"btn-productos\" class=\"form-submit btn btn-primary btn-sm\">
                <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i> Buscar</button>
            </div>
        </form>    
    <div class=\"clearfix\"></div>
    </br>
        <div id=\"datatable-productosvendidos\">
            <table id=\"productosvendidos\" class=\"table table-bordered\">
                <thead>
                    <tr> 
                        <th>Fecha</th>
                        <th>Cajero</th>                   
                        <th>Punto</th>
                        <th>Item</th>
                        <th>Descripcion</th>
                        <th>Impuesto</th>
                        <th>Cantidad </th>
                        <th>Total </th>
                    </tr>
                </thead>
            </table>
        </div>   
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Venta:reportedetalleproductosvendidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Venta:reportedetalleproductosvendidos.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/reportedetalleproductosvendidos.html.twig");
    }
}
