<?php

/* AppBundle:Cajero:modalAutorizar.html.twig */
class __TwigTemplate_0ffb0c4bcd99a64b340ec381f2edc0c07f1ef86ca4f5aa966d850927a089c09e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:modalAutorizar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:modalAutorizar.html.twig"));

        // line 1
        echo "<!-- Modal para el boton autorizar -->
<div class=\"modal fade\" id=\"modalAutorizar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalLabel\">Autorizar Denominaciones</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id='frmAutorizar' class=\"autorizar\" action=\"\">
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:modalAutorizar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Modal para el boton autorizar -->
<div class=\"modal fade\" id=\"modalAutorizar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalLabel\">Autorizar Denominaciones</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id='frmAutorizar' class=\"autorizar\" action=\"\">
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
", "AppBundle:Cajero:modalAutorizar.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/modalAutorizar.html.twig");
    }
}
