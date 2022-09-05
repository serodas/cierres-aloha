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

/* AppBundle:Venta:modificarcuentas.html.twig */
class __TwigTemplate_60b655ba474d188d72b311914af1f2fd3ac8fb6b00a9eb9ac0458142556a098d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Venta:modificarcuentas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Modificar Cuentas";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "       <form name=\"modificarfacturas\" id=\"modificarfacturas\" action=\"\" method=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Fecha</label>
                <input type=\"text\" id=\"date\" name=\"date\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-modificarcuentas\" name=\"btn-modificarcuentas\" class=\"form-submit btn btn-primary btn-sm\">Buscar</button>
            </div>
        </form> 
    <div class=\"cuentas col-sm-4\" id='mensaje'></div>       
    <div class=\"clearfix\"></div>
    </br>
        <div id=\"datatable-modificarcuentas\">
            <table id=\"modificarcuentas\" class=\"table table-bordered\">
                <thead>
                    <tr> 
                        <th> Id </th>
                        <th> Punto</th>
                        <th> Fecha </th>
                        <th> Empleado </th>                   
                        <th> Check </th>
                        <th> Forma Pago </th>
                        <th> Valor </th>
                        <th> Acciones </th>
                    </tr>
                </thead>
            </table>
        </div>  
    ";
        // line 33
        $this->loadTemplate("AppBundle:Venta:modalEditar.html.twig", "AppBundle:Venta:modificarcuentas.html.twig", 33)->display($context);
        echo "     
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Venta:modificarcuentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Venta:modificarcuentas.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/modificarcuentas.html.twig");
    }
}
