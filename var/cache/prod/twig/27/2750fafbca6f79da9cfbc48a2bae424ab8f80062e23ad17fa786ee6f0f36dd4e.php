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

/* AppBundle:Venta:interfaceproductos.html.twig */
class __TwigTemplate_69791f3eef98d7808e1705c7d3e7d4042b5530a0e6f28bd1a2ffb95b5d00f3bf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Venta:interfaceproductos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Interface Productos";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"col-lg-4\">
       <form name=\"interfaceProductos\" id=\"interfaceProductos\" action=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"username\">Sincronizar Productos JDE - Chaplin</label>
                ";
        // line 10
        echo "                <input type=\"hidden\" id=\"username\" name=\"username\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
            </div>
            <div class=\"clearfix\"></div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-interfaceProductos\" name=\"btn-interfaceProductos\" class=\"form-submit btn btn-primary btn-sm\">
                    <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i>Generar
                </button>
            </div>
        </form>
        </br>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"col-sm-4\" id='mensaje'></div>
    <div class=\"table-responsive-sm\" id=\"divtabledetalle\" ></div>     

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Venta:interfaceproductos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Venta:interfaceproductos.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/interfaceproductos.html.twig");
    }
}
