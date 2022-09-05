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

/* AppBundle:Reportes:reportemicomfamiliar.html.twig */
class __TwigTemplate_48e081e1ddadbdf24e77b7c61e2e5b37044ffcdd0e6f2c301c6a047b29cfc82d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Reportes:reportemicomfamiliar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Entradas Micomfamiliar";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"col-lg-6\">
        <h2 style=\"font-size:14px;\">BUSCAR ENTRADA ADQUIRIDA DESDE MICOMFAMILIAR POR NUMERO DE DOCUMENTO DEL USUARIO</h2>
        <div class=\"clearfix\"></div>
       <form name=\"form-micomfamiliar\" id=\"form-micomfamiliar\" action=\"\"  class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"documento\" class=\"required\">Documento</label>
                <input type=\"number\" id=\"documento\" name=\"documento\" required=\"required\" class=\"form-control\">
                <div class=\"clearfix\">
                    <small>Por favor digitar el número de documento de identificación del usuario,SIN PUNTOS, SIN COMAS y SIN ESPACIOS.</small>
                </div>
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-micomfamiliar\" name=\"btn-micomfamiliar\" class=\"form-submit btn btn-primary btn-sm\">
                     <i id=\"search-icon\" class=\"fa fa-search\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i>Buscar
                </button>
            </div>
        </form>
    </div>
    <div class=\"clearfix\"></div>
    <div id=\"mensaje\" class=\"alert alert-danger oculto col-lg-6\" style=\"margin-top:10px;\"></div>
    <div id=\"table-micomfamiliar\">
        <table id=\"entradas-micomfamiliar\" class=\"table table-bordered oculto entradas-micomfamiliar\">
            <thead>
                <tr> 
                    <th>Consecutivo</th>                   
                    <th>Disponible</th>
                    <th>Carros</th>
                    <th>Motos</th>
                    <th>Fecha Visita</th>
                    <th>Fecha Factura</th>
                    <th>Factura</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div> 
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Reportes:reportemicomfamiliar.html.twig";
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
        return new Source("", "AppBundle:Reportes:reportemicomfamiliar.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Reportes/reportemicomfamiliar.html.twig");
    }
}
