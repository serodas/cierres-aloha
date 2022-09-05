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

/* AppBundle:Cajero:modalRemove.html.twig */
class __TwigTemplate_fc8abd24944b005a7db12d162a501c58b39cf1682f7bc7c152900a2c0feb127b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Modal para el boton autorizar -->
<div class=\"modal fade\" id=\"modalRemove\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalLabel\">Inactivar Denominaciones</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id='frmRemove' class=\"remove\" action=\"\">
                     <div class='form-group'>
                        <label for=\"idAuth\" class=\"required\">Id</label>
                        <input type=\"text\" id=\"idAuth\" name=\"idAuth\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"observacion\" class=\"required\">Observacion</label>
                        <textarea class=\"form-control\" id=\"observacion\" name=\"observacion\" ></textarea>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"limpiar btn btn-secondary\" data-dismiss=\"modal\">No</button>
                <button type=\"button\" id=\"si\" class=\"btn btn-primary\">Si</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:modalRemove.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Cajero:modalRemove.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/modalRemove.html.twig");
    }
}
