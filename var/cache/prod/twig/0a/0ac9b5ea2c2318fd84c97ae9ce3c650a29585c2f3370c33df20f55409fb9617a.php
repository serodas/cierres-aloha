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

/* AppBundle:Venta:reembolsos.html.twig */
class __TwigTemplate_47cace80db937e60d73482821b27034fafe76b735b3def950e20f25fe58dbcb6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Venta:reembolsos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Reembolsos";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "       <form name=\"Frmreembolsos\" id=\"Frmreembolsos\" action=\"\" method=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Desde</label>
                <input type=\"text\" id=\"desde\" name=\"desde\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Hasta</label>
                <input type=\"text\" id=\"hasta\" name=\"hasta\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-reembolsos\" name=\"btn-reembolsos\" class=\"form-submit btn btn-primary btn-sm\">Buscar</button>
            </div>
        </form>    
    <div class=\"clearfix\"></div>
    </br>
        <div id=\"datatable-reembolsos\">
            <table id=\"reembolsos\" class=\"table table-bordered\">
                <thead>
                    <tr> 
                        <th>Fecha</th>
                        <th>Cajero</th>                   
                        <th>Punto</th>
                        <th>Check</th>
                        <th>Item</th>
                        <th>Descripcion</th>
                        <th>Valor </th>
                        <th>Fecha Sistema </th>
                    </tr>
                </thead>
            </table>
        </div>   
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Venta:reembolsos.html.twig";
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
        return new Source("", "AppBundle:Venta:reembolsos.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/reembolsos.html.twig");
    }
}
