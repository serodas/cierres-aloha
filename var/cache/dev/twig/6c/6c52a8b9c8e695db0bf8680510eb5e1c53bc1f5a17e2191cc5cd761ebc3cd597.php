<?php

/* KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig */
class __TwigTemplate_cfb664f46a09f80d0abf229b4aaece6da7a08d14572091b3b3813385db21cfa1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig"));

        // line 20
        echo "
";
        // line 21
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 21, $this->source); })()) > 1)) {
            // line 22
            echo "    <ul class=\"pagination\">
        ";
            // line 23
            if (array_key_exists("previous", $context)) {
                // line 24
                echo "                 <li class=\"arrow\">
                     <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 25, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 25, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 25, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 25, $this->source); })())))), "html", null, true);
                echo "\">&laquo; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                 </li>
        ";
            } else {
                // line 28
                echo "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new Twig_Error_Runtime('Variable "startPage" does not exist.', 35, $this->source); })()) > 1)) {
                // line 36
                echo "            <li>
                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 37, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 37, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 37, $this->source); })()) => 1))), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 39
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new Twig_Error_Runtime('Variable "startPage" does not exist.', 39, $this->source); })()) == 3)) {
                    // line 40
                    echo "                <li>
                    <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 41, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 41, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 41, $this->source); })()) => 2))), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 43
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new Twig_Error_Runtime('Variable "startPage" does not exist.', 43, $this->source); })()) != 2)) {
                    // line 44
                    echo "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 48
                echo "        ";
            }
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 51
                echo "            ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 51, $this->source); })()))) {
                    // line 52
                    echo "                <li>
                    <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 53, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 53, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 53, $this->source); })()) => $context["page"]))), "html", null, true);
                    echo "\">
                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                } else {
                    // line 58
                    echo "                <li class=\"current\">
                    <a>";
                    // line 59
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 62
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
        ";
            // line 65
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 65, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new Twig_Error_Runtime('Variable "endPage" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "            ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 66, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new Twig_Error_Runtime('Variable "endPage" does not exist.', 66, $this->source); })()) + 1))) {
                    // line 67
                    echo "                ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 67, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new Twig_Error_Runtime('Variable "endPage" does not exist.', 67, $this->source); })()) + 2))) {
                        // line 68
                        echo "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 72
                        echo "                    <li>
                        <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 73, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 73, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 73, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 73, $this->source); })()) - 1)))), "html", null, true);
                        echo "\">
                            ";
                        // line 74
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 74, $this->source); })()) - 1), "html", null, true);
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 78
                    echo "            ";
                }
                // line 79
                echo "            <li>
                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 80, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 80, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 80, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 80, $this->source); })())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 80, $this->source); })()), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if (array_key_exists("next", $context)) {
                // line 85
                echo "            <li class=\"arrow\">
                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 86, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 86, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 86, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 86, $this->source); })())))), "html", null, true);
                echo "\">
                    ";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 91
                echo "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 97
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 97,  203 => 93,  199 => 91,  192 => 87,  188 => 86,  185 => 85,  183 => 84,  180 => 83,  172 => 80,  169 => 79,  166 => 78,  159 => 74,  155 => 73,  152 => 72,  146 => 68,  143 => 67,  140 => 66,  138 => 65,  135 => 64,  128 => 62,  122 => 59,  119 => 58,  112 => 54,  108 => 53,  105 => 52,  102 => 51,  98 => 50,  95 => 49,  92 => 48,  86 => 44,  84 => 43,  79 => 41,  76 => 40,  74 => 39,  69 => 37,  66 => 36,  64 => 35,  61 => 34,  54 => 30,  50 => 28,  42 => 25,  39 => 24,  37 => 23,  34 => 22,  32 => 21,  29 => 20,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Foundation 5 Sliding pagination control implementation.
 *
 * View that can be used with the pagination module 
 * from the Foundation 5 CSS Toolkit
 * http://foundation.zurb.com/docs/components/pagination.html
 *
 * @author Vincent Loy <vincent.loy1@gmail.com>
 *
 * This view have been ported from twitter bootstrap v3 pagination control implementation
 * from :
 * @author Pablo Díez <pablodip@gmail.com>
 * @author Jan Sorgalla <jsorgalla@gmail.com>
 * @author Artem Ponomarenko <imenem@inbox.ru>
 * @author Artem Zabelin <artjomzabelin@gmail.com>
 */
#}

{% if pageCount > 1 %}
    <ul class=\"pagination\">
        {% if previous is defined %}
                 <li class=\"arrow\">
                     <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo; {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
                 </li>
        {% else %}
            <li class=\"arrow unavailable\">
                <a>
                    &laquo; {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
                </a>
            </li>
        {% endif %}

        {% if startPage > 1 %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
            </li>
            {% if startPage == 3 %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                </li>
            {% elseif startPage != 2 %}
                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            {% endif %}
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">
                        {{ page }}
                    </a>
                </li>
            {% else %}
                <li class=\"current\">
                    <a>{{ page }}</a>
                </li>
            {% endif %}

        {% endfor %}

        {% if pageCount > endPage %}
            {% if pageCount > (endPage + 1) %}
                {% if pageCount > (endPage + 2) %}
                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                {% else %}
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">
                            {{ pageCount -1 }}
                        </a>
                    </li>
                {% endif %}
            {% endif %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
            </li>
        {% endif %}

        {% if next is defined %}
            <li class=\"arrow\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                    {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }} &nbsp;&raquo;
                </a>
            </li>
        {% else %}
            <li class=\"arrow unavailable\">
                <a>
                    {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }} &nbsp;&raquo;
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}
", "KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig", "/var/www/cierresaloha/public_html/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/foundation_v5_pagination.html.twig");
    }
}
