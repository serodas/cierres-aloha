<?php

/* AppBundle:Cajero:tirilla.html.twig */
class __TwigTemplate_6d73ff26556050f72f09900487139cc88b5229fc81634b5252aad3514909dfc2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Cajero:tirilla.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:tirilla.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:tirilla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Cierre Parcial";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<page>
    <div id=\"divVoucher\">
        <table>
            <tbody>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <b>
                          Cierre Parcial
                        </b>
                    </td>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        COMFAMILIAR RISARALDA
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Fecha:
                    </td>
                    <td>
                        ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tirilla"]) || array_key_exists("tirilla", $context) ? $context["tirilla"] : (function () { throw new Twig_Error_Runtime('Variable "tirilla" does not exist.', 34, $this->source); })()), "fecha", array()), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                       Nombre:
                    </td>
                    <td>
                       ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tirilla"]) || array_key_exists("tirilla", $context) ? $context["tirilla"] : (function () { throw new Twig_Error_Runtime('Variable "tirilla" does not exist.', 42, $this->source); })()), "usuario", array()), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        Punto:
                    </td>
                    <td>
                      ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tirilla"]) || array_key_exists("tirilla", $context) ? $context["tirilla"] : (function () { throw new Twig_Error_Runtime('Variable "tirilla" does not exist.', 50, $this->source); })()), "punto", array()), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        Efectivo:
                    </td>
                    <td>
                       ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tirilla"]) || array_key_exists("tirilla", $context) ? $context["tirilla"] : (function () { throw new Twig_Error_Runtime('Variable "tirilla" does not exist.', 58, $this->source); })()), "ventregado", array()), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Cajero:
                    </td>
                    <td>
                       ___________________________________________
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Recibido:
                    </td>
                    <td>
                        ___________________________________________
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">En caso de faltantes autorizo me sea descontado dicho valor por nomina</td>
                <tr>
                    <td colspan=\"2\">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</page>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:tirilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  126 => 50,  115 => 42,  104 => 34,  72 => 4,  63 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %} Cierre Parcial{% endblock %}
{% block body %}
<page>
    <div id=\"divVoucher\">
        <table>
            <tbody>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <b>
                          Cierre Parcial
                        </b>
                    </td>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        COMFAMILIAR RISARALDA
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Fecha:
                    </td>
                    <td>
                        {{ tirilla.fecha}}
                    </td>
                </tr>
                <tr>
                    <td>
                       Nombre:
                    </td>
                    <td>
                       {{tirilla.usuario}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Punto:
                    </td>
                    <td>
                      {{tirilla.punto}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Efectivo:
                    </td>
                    <td>
                       {{tirilla.ventregado}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Cajero:
                    </td>
                    <td>
                       ___________________________________________
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Recibido:
                    </td>
                    <td>
                        ___________________________________________
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">En caso de faltantes autorizo me sea descontado dicho valor por nomina</td>
                <tr>
                    <td colspan=\"2\">
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</page>
{% endblock %}", "AppBundle:Cajero:tirilla.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/tirilla.html.twig");
    }
}
