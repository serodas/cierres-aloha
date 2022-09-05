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

/* AppBundle:Venta:cuentas.html.twig */
class __TwigTemplate_c8704d31ccbfa27b55da4f4e8be02691fb6ed9baa0649719d0a6a0052671594e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Venta:cuentas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Reporte Cuentas";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "       <form name=\"facturas\" id=\"facturas\" action=\"\" method=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Fecha</label>
                <input type=\"text\" id=\"date\" name=\"date\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-cuentas\" name=\"btn-cuentas\" class=\"form-submit btn btn-primary btn-sm\">Buscar</button>
            </div>
        </form>       
    <div class=\"clearfix\"></div>
    </br>
        <div id=\"datatable-cuentas\">
            <table id=\"cuentas\" class=\"table table-bordered\">
                <thead>
                    <tr> 
                        <th> Id </th>
                        <th> Punto </th>
                        <th> Fecha </th>
                        <th> Empleado </th>                   
                        <th> Check </th>
                        <th> Forma Pago </th>
                        <th> Valor </th>
                    </tr>
                </thead>
            </table>
        </div>    
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Venta:cuentas.html.twig";
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
        return new Source("", "AppBundle:Venta:cuentas.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/cuentas.html.twig");
    }
}
