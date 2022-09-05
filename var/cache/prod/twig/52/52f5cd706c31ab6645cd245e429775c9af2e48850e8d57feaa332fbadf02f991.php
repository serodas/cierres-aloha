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

/* AppBundle:Cajero:consultadecajas.html.twig */
class __TwigTemplate_809882707ff6083bd094093a1b231fa58d6d7190d0098305d6dcb82cc675872b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Cajero:consultadecajas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  Consulta de cajas ";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"cajeros col-sm-4\" id='mensaje'></div>
        <div class='clearfix'></div>
            <table id=\"cajeros\" class=\"table table-bordered\">
                <thead>
                    <tr> 
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Punto</th>
                        <th>Cajero</th>
                        <th>Efectivo</th>
                        <th>Motivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>            
    ";
        // line 20
        $this->loadTemplate("AppBundle:Cajero:modalEditar.html.twig", "AppBundle:Cajero:consultadecajas.html.twig", 20)->display($context);
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:consultadecajas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  75 => 20,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Cajero:consultadecajas.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/consultadecajas.html.twig");
    }
}
