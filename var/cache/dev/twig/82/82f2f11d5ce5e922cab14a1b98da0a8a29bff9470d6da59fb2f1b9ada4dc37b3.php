<?php

/* AppBundle:Cajero:modalEditar.html.twig */
class __TwigTemplate_c561bb97915aff016bdb21ce97d2293a698ac98e254c9972ca2d20906249f325 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:modalEditar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:modalEditar.html.twig"));

        // line 1
        echo "<!-- Modal para el boton modificar denominaciones -->
<div class=\"modal fade\" id=\"modalEditar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalLabel\">Modificar Denominaciones</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- formulario modificar denominaciones-->
                <form id=\"formEdit\" class=\"cierre\" action=\"\">
                    <div class='form-group'>
                        <label for=\"idModal\" class=\"required\">Id</label>
                        <input type=\"text\" id=\"idModal\" name=\"idModal\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"idFecha\" class=\"required\">Fecha</label>
                        <input type=\"text\" id=\"idFecha\" name=\"idFecha\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"cajero\" class=\"required\">Cajero</label>
                        <input type=\"text\" id=\"cajero\" name=\"cajero\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"punto\" class=\"required\">Punto</label>
                        <select id=\"punto\" name=\"punto\" class=\"form-control\">
                        </select>
                    </div>
                    <div class='form-group'> 
                        <label for=\"ventregado\" class=\"required\">Valor Entregado en Efectivo</label>
                        <input type=\"number\" id=\"ventregado\" name=\"ventregado\" required=\"required\" class=\"form-control\">
                    </div>
                </form>    
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"no\" class=\"limpiar btn btn-secondary\" data-dismiss=\"modal\">No</button>
                    <button type=\"button\" id=\"si\" class=\"btn btn-primary\">Si</button>
                </div>
            </div>
        </div>
    </div>
</div>    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:modalEditar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Modal para el boton modificar denominaciones -->
<div class=\"modal fade\" id=\"modalEditar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalLabel\">Modificar Denominaciones</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- formulario modificar denominaciones-->
                <form id=\"formEdit\" class=\"cierre\" action=\"\">
                    <div class='form-group'>
                        <label for=\"idModal\" class=\"required\">Id</label>
                        <input type=\"text\" id=\"idModal\" name=\"idModal\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"idFecha\" class=\"required\">Fecha</label>
                        <input type=\"text\" id=\"idFecha\" name=\"idFecha\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"cajero\" class=\"required\">Cajero</label>
                        <input type=\"text\" id=\"cajero\" name=\"cajero\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"punto\" class=\"required\">Punto</label>
                        <select id=\"punto\" name=\"punto\" class=\"form-control\">
                        </select>
                    </div>
                    <div class='form-group'> 
                        <label for=\"ventregado\" class=\"required\">Valor Entregado en Efectivo</label>
                        <input type=\"number\" id=\"ventregado\" name=\"ventregado\" required=\"required\" class=\"form-control\">
                    </div>
                </form>    
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"no\" class=\"limpiar btn btn-secondary\" data-dismiss=\"modal\">No</button>
                    <button type=\"button\" id=\"si\" class=\"btn btn-primary\">Si</button>
                </div>
            </div>
        </div>
    </div>
</div>    ", "AppBundle:Cajero:modalEditar.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/modalEditar.html.twig");
    }
}
