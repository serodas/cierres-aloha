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

/* AppBundle:Reportes:reporteconsolidado.html.twig */
class __TwigTemplate_1fc9450e46d08aad324bcb020203955411c5d9955ebd6c42ee33496786aa4200 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Reportes:reporteconsolidado.html.twig", 1);
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
        echo "       <form name=\"productos\" id=\"productos\" action=\"\" method=\"post\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Desde</label>
                <input type=\"text\" id=\"desde\" name=\"desde\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Hasta</label>
                <input type=\"text\" id=\"hasta\" name=\"hasta\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-consolidado\" name=\"btn-consolidado\" class=\"form-submit btn btn-primary btn-sm\">
                <i id=\"download-icon\" class=\"fa fa-search\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i> Buscar</button>
            </div>
        </form>    
    <div class=\"clearfix\"></div>
    </br>   
<div class=\"container-fluid\">        
        <div class=\"table-responsive\">
            <table id=\"consolidado\" class=\"table table-bordered\">
                <thead>
                    <tr> 
                        <th>FECHA</th>
                        <th>PUNTO</th>
                        <th>PRODUCTO</th>
                        <th>DESCRIPCION</th>
                        <th>CANTIDAD</th>
                        <th>TOTAL</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>    
</div> 
<!-- Modal -->
<div id=\"modalDetalle\" class=\"modal fade bd-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <div id=\"divtabledetalle\" class=\"table-responsive-sm\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>

  </div>
</div>   
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Reportes:reporteconsolidado.html.twig";
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
        return new Source("", "AppBundle:Reportes:reporteconsolidado.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Reportes/reporteconsolidado.html.twig");
    }
}
