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

/* AppBundle:Reportes:reportesubsidioenespecie.html.twig */
class __TwigTemplate_5c6f447728eca20c2d2a13f74189a9cea8cd2e8fab0f104545dbf8b005769ebd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Reportes:reportesubsidioenespecie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Subsidio en Especie";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"col-lg-4\">
       <h2 style=\"font-size:14px;\">GENERAR REPORTE DE SUBSIDIO EN ESPECIE</h2>
       <form name=\"subsidio-especie\" id=\"form-subsidio-especie\" action=\"\" role=\"form\">
            <div class='form-group'>
                <label for=\"desde\" class=\"required\">Desde:</label>
                <input type=\"text\" id=\"desde\" name=\"desde\" required=\"required\" class=\"js-datepicker-inventario form-control\">
            </div>
            <div class='form-group'>
                <label for=\"hasta\" class=\"required\">Hasta:</label>
                <input type=\"hasta\" id=\"hasta\" name=\"hasta\" required=\"required\" class=\"js-datepicker-inventario form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-subsidio-especie\" name=\"btn-subsidio-especie\" class=\"form-submit btn btn-primary btn-sm\">
                    <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i> Generar
                </button>
            </div>
        </form>
        </br>
        <div class=\"reporteSubsidioEspecie\" id='mensaje'></div>  
    </div>
    <div class=\"clearfix\"></div>

    </br>

    <div id=\"datatable-subsidio-especie\">
        ";
        // line 33
        echo "        <table id=\"table-subsidio-especie\" class=\"table table-bordered\">
            <thead>
                <tr> 
                    <th>Voucher</th> 
                    <th>Fecha</th>                  
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Total</th>
                    <th>Descuento</th>
                    <th>Porcentaje</th>
                    <th>Categoria</th>
                    <th>Genero</th>
                    <th>Fecha Nacimiento</th>
                    <th>Cuenta ALO</th>
                    <th>Cajero</th>
                </tr>
            </thead>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Reportes:reportesubsidioenespecie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Reportes:reportesubsidioenespecie.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Reportes/reportesubsidioenespecie.html.twig");
    }
}
