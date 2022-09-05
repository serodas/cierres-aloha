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

/* AppBundle:Reportes:reportereservas.html.twig */
class __TwigTemplate_1b2b9ca5721fb6e67be39c9a336b1aaa25c197c6273cf18ab86a21acad5a187a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Reportes:reportereservas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Parque Recreacional";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"col-lg-6\">
        <h2 style=\"font-size:14px;\">GENERAR REPORTE RESERVAS ENTRADAS,PARQUEADERO Y RESTAURANTES</h2>
        <div class=\"clearfix\"></div>
       <form name=\"form-reservas\" id=\"form-reservas\" action=\"\"  class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Fecha</label>
                <input type=\"text\" id=\"fecha-reserva\" name=\"fecha-reserva\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-reservas\" name=\"btn-reservas\" class=\"form-submit btn btn-primary btn-sm\">
                     <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i>Generar
                </button>
            </div>
        </form>
    </div>
    <div class=\"clearfix\">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <canvas id=\"chart-entradas-reservas\"></canvas>
        </div>
        <div class=\"col-lg-6\">
             <canvas id=\"chart-parqueadero-reservas\"></canvas>
        </div>
        <div class=\"col-lg-8\">
             <canvas id=\"chart-restaurantes-reservas\"></canvas>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Reportes:reportereservas.html.twig";
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
        return new Source("", "AppBundle:Reportes:reportereservas.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Reportes/reportereservas.html.twig");
    }
}
