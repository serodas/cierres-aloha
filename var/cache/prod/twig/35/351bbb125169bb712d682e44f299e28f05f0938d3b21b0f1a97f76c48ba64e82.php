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

/* AppBundle:Cajero:cierrescondiferencia.html.twig */
class __TwigTemplate_39ef557aa5f94c7012db7454d5e30a1d3ad000b3a3957f5dce89b0a2762f75c5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Cajero:cierrescondiferencia.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Cierres con Diferencia";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "       <form name=\"Frmcierrescondiferencias\" id=\"Frmcierrescondiferencias\" action=\"\" method=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Desde</label>
                <input type=\"text\" id=\"desde\" name=\"desde\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Hasta</label>
                <input type=\"text\" id=\"hasta\" name=\"hasta\" required=\"required\" class=\"js-datepicker form-control\">
            </div>
            <div class='form-group'>
                <label for=\"tipo\" class=\"required\">Tipo</label>
                <select name=\"tipo\" id=\"tipo\" class=\"form-control\">
                    <option value='0'>---</option>
                    <option value='1'>Faltantes</option>
                    <option value='2'>Sobrantes</option>
                </select>
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-cierrescondiferencia\" name=\"btn-cierrescondiferencia\" class=\"form-submit btn btn-primary btn-sm\">Buscar</button>
            </div>
        </form>    
    <div class=\"clearfix\"></div>
    </br>
        <div id=\"datatable-cierrescondiferencia\">
            <table id=\"cierrescondiferencia\" class=\"table table-bordered\">
                <thead>
                    <tr> 
                        <th>Fecha</th>                   
                        <th>Caja</th>
                        <th>Nombre Usuario</th>
                        <th>Documento</th>
                        <th>Diferencia</th>
                        <th>Motivo</th>
                        <th>Observacion</th>
                        <th>Fecha Creacion</th>
                        <th>Fecha Edicion</th>
                        <th>Usuario Edicion</th>
                    </tr>
                </thead>
            </table>
        </div>   
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:cierrescondiferencia.html.twig";
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
        return new Source("", "AppBundle:Cajero:cierrescondiferencia.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/cierrescondiferencia.html.twig");
    }
}
