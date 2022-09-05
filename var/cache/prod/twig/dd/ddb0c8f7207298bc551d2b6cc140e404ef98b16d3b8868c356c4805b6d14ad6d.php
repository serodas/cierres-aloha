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

/* AppBundle:Cajero:autorizardenominaciones.html.twig */
class __TwigTemplate_63a53812fc38f038349e67c7e3a58ed5d3e32a95fc4c4525f143acfb05703b35 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Cajero:autorizardenominaciones.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  Autorizar Denominaciones ";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "          <div class=\"fiscales col-sm-4\" id='mensaje'></div>
          <div class=\"clearfix\"></div>
            <table id=\"fiscales\" class=\"table table-bordered\">
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
        $this->loadTemplate("AppBundle:Cajero:modalAutorizar.html.twig", "AppBundle:Cajero:autorizardenominaciones.html.twig", 20)->display($context);
        // line 21
        echo "    ";
        $this->loadTemplate("AppBundle:Cajero:modalRemove.html.twig", "AppBundle:Cajero:autorizardenominaciones.html.twig", 21)->display($context);
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:autorizardenominaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  77 => 21,  75 => 20,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Cajero:autorizardenominaciones.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/autorizardenominaciones.html.twig");
    }
}
