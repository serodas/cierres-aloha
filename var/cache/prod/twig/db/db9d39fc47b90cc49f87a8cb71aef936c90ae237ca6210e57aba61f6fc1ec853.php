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

/* AppBundle:Reportes:reporteefectivo.html.twig */
class __TwigTemplate_cea7ee0922a0f2607acb761fca43f0d076062ea711728f16deb17dd0670e97a5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Reportes:reporteefectivo.html.twig", 1);
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
        echo "    <div class=\"col-lg-4\">
        <h2>Reporte de Efectivo por Cajero</h2>
        <div class=\"reporteEfectivo\" id='mensaje'></div> 
        <div class=\"clearfix\"></div>
        <form name=\"efectivas\" id=\"efectivas\" action=\"\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Fecha</label>
                <input type=\"text\" id=\"fecha\" name=\"fecha\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <label for=\"Centro\" class=\"required\">Centro de Atención</label>
                <select id=\"centro_atencion\" name=\"centro_atencion\" required=\"required\" class=\"form-control\">
                    <option value=\"1\">Parque Recreacional</option>
                    <option value=\"2\">Cafeteria Centro</option>
                    <option value=\"3\">Cafeteria Dosquebradas</option>
                </select>
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-efectivas\" name=\"btn-efectivas\" class=\"form-submit btn btn-primary btn-sm\">
                    <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i>Generar
                </button>
                <button type=\"button\" id=\"btn-actualizar\" name=\"btn-actualizar\" class=\"form-submit btn btn-danger btn-sm\">
                    <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i>Actualizar
                </button>
            </div>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Reportes:reporteefectivo.html.twig";
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
        return new Source("", "AppBundle:Reportes:reporteefectivo.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Reportes/reporteefectivo.html.twig");
    }
}
