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

/* AppBundle:Venta:interfaceinventario.html.twig */
class __TwigTemplate_335a4ef306f68b64eb6ce6dbb01ce9f0685bbd440f372ade585a2da7082c482a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Venta:interfaceinventario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Interface Inventario";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"col-lg-4\">
       <form name=\"interfaceInventario\" id=\"interfaceInventario\" action=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Fecha</label>
                <input type=\"text\" id=\"fecha\" name=\"fecha\" required=\"required\" class=\"js-datepicker-inventario form-control\">
                <input type=\"hidden\" id=\"username\" name=\"username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-interfaceInventario\" name=\"btn-interfaceInventario\" class=\"form-submit btn btn-primary btn-sm\">
                    <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i>Generar
                </button>
            </div>
        </form>
        </br>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"col-sm-4\" id='mensaje'></div>

    <div class=\"table-responsive-sm\" id=\"divtabledetalle\" >
    
    </div>

    <div id=\"datatable-existencias\">
        <table id=\"existencias\" class=\"table table-bordered oculto existencias\">
            <thead>
                <tr> 
                    <th>Bodega</th>                   
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Existencias JDE</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>  

    <div id=\"datatable-articulo\">
        <table id=\"articulo\" class=\"table table-bordered oculto articulo\">
            <thead>
                <tr> 
                    <th>Bodega</th>                   
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div id=\"datatable-unidadMedida\">
        <table id=\"unidadMedida\" class=\"table table-bordered oculto unidadMedida\">
            <thead>
                <tr> 
                    <th>Bodega</th>                   
                    <th>Descripcion</th>
                    <th>unidadMedidaProducto</th>
                    <th>unidadMedidaMovimiento</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>   

    <div id=\"datatable-categoria\">
        <table id=\"categoria\" class=\"table table-bordered oculto categoria\">
            <thead>
                <tr> 
                    <th>Bodega</th>                   
                    <th>Descripcion</th>
                    <th>categoriaJDE</th>
                    <th>categoriaProducto</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>   

    <div id=\"datatable-bodegas\">
        <table id=\"bodegas\" class=\"table table-bordered oculto bodegas\">
            <thead>
                <tr> 
                    <th>Bodega</th>                   
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>   

    <div id=\"datatable-fechaContable\">
        <table id=\"fechaContable\" class=\"table table-bordered oculto fechaContable\">
            <thead>
                <tr> 
                    <th>Bodega</th>                   
                    <th>Descripcion</th>
                    <th>periodoActivo</th>
                    <th>fechaMovimiento</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>  

    <div id=\"datatable-validacionUnidadesMedida\">
        <table id=\"validacionUnidadesMedida\" class=\"table table-bordered oculto validacionUnidadesMedida\">
            <thead>
                <tr> 
                    <th>Bodega</th>                   
                    <th>IdKardex</th>                   
                    <th>IdProducto</th>
                    <th>IDFormula</th>
                    <th>IdUndMed</th>
                    <th>IdUndMedOrigen</th>
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
        return "AppBundle:Venta:interfaceinventario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Venta:interfaceinventario.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/interfaceinventario.html.twig");
    }
}
