<?php

/* AppBundle:Cajero:consultacaja.html.twig */
class __TwigTemplate_ac986d92a3316e25d341578ba72073d6146ded5f638981558324f9dffa04c5fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Cajero:consultacaja.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Principal:body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:consultacaja.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cajero:consultacaja.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "  Cierre total ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"col-lg-4\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "          <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
    <div class=\"clearfix\"></div>
    <div class=\"container-fluid\">        
        <div class=\"count\">
            <span class=\"label label-primary\">
                Entradas en total: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 14, $this->source); })()), "getTotalItemCount", array()), "html", null, true);
        echo "
            </span>
        </div>
            <br/>
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 18, $this->source); })()), "getTotalItemCount", array()) > 0)) {
            // line 19
            echo "                <div class=\"table-responsive\"> 
                    <table id=\"punto\" class=\"table table-bordered\">
                        <thead>
                        <tr> 
                            <th>";
            // line 23
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 23, $this->source); })()), "Id", "c.id");
            echo "</th>
                            <th>";
            // line 24
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 24, $this->source); })()), "Fecha", "c.fecha");
            echo "</th>
                            <th>";
            // line 25
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 25, $this->source); })()), "Punto", "p.descripcion");
            echo "</th>
                            <th>";
            // line 26
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 26, $this->source); })()), "Cajero", "c.usuario");
            echo "</th>
                            <th>";
            // line 27
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 27, $this->source); })()), "Efectivo", "c.ventregado");
            echo "</th>
                            <th>";
            // line 28
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 28, $this->source); })()), "Motivo", "m.descripcion");
            echo "</th>
                            <th> <a class=\"sortable\" href=\"#\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 33, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["caja"]) {
                // line 34
                echo "                        <tr ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2 == 1)) {
                    echo "class=\"color\"";
                }
                echo " >
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caja"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caja"], "fecha", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caja"], "descripcion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caja"], "usuario", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caja"], "ventregado", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["caja"], "motivo", array()), "html", null, true);
                echo "</td> 
                            <td> <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tirilla", array("id" => twig_get_attribute($this->env, $this->source, $context["caja"], "id", array()))), "html", null, true);
                echo "\" class=\"tirilla\">Imprimir</a> </td>       
                        </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caja'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </tbody>
                    </table>
                </div>    
            <div class=\"navigation\">
                ";
            // line 48
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 48, $this->source); })()));
            echo "
            </div>
            ";
        }
        // line 50
        echo " 
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:consultacaja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 50,  209 => 48,  203 => 44,  186 => 41,  182 => 40,  178 => 39,  174 => 38,  170 => 37,  166 => 36,  162 => 35,  155 => 34,  138 => 33,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  104 => 19,  102 => 18,  95 => 14,  88 => 9,  79 => 7,  75 => 6,  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:Principal:body.html.twig' %}

{% block title %}  Cierre total {% endblock %}
{% block content %}
    <div class=\"col-lg-4\">
        {% for message in app.session.flashbag().get('status') %}
          <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"container-fluid\">        
        <div class=\"count\">
            <span class=\"label label-primary\">
                Entradas en total: {{ pagination.getTotalItemCount }}
            </span>
        </div>
            <br/>
            {% if pagination.getTotalItemCount > 0 %}
                <div class=\"table-responsive\"> 
                    <table id=\"punto\" class=\"table table-bordered\">
                        <thead>
                        <tr> 
                            <th>{{ knp_pagination_sortable(pagination, 'Id', 'c.id') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Fecha', 'c.fecha') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Punto', 'p.descripcion') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Cajero', 'c.usuario') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Efectivo', 'c.ventregado') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Motivo', 'm.descripcion') }}</th>
                            <th> <a class=\"sortable\" href=\"#\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for caja in pagination %}
                        <tr {% if loop.index is odd %}class=\"color\"{% endif %} >
                            <td>{{ caja.id}}</td>
                            <td>{{ caja.fecha }}</td>
                            <td>{{ caja.descripcion }}</td>
                            <td>{{ caja.usuario}}</td>
                            <td>{{ caja.ventregado }}</td>
                            <td>{{ caja.motivo }}</td> 
                            <td> <a href=\"{{ path( \"tirilla\", {\"id\":caja.id} ) }}\" class=\"tirilla\">Imprimir</a> </td>       
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>    
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
            {% endif %} 
    </div>
{% endblock %}

", "AppBundle:Cajero:consultacaja.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/consultacaja.html.twig");
    }
}
