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

/* AppBundle:Principal:body.html.twig */
class __TwigTemplate_8ed044eb5996477041603ef9ddb1f5dea392d1bd8566b7ec0a3564f802944df5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Principal:body.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Principal:body.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Principal:body.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"wrapper\">
    <!-- Main Header -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>F</b>A</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\">Facturacion&nbsp;Aloha</span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">

                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "nombre", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">

                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\" class=\"btn btn-default btn-flat\">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        ";
        // line 45
        echo "                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar Menu -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">Menú principal</li>
                ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAJEROALOHA")) {
            // line 59
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cierreparcialdecaja");
            echo "\"><i class=\"fa fa-cog\"></i> <span>Cierre Parcial de Caja</span></a></li>
                <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultadecajas");
            echo "\"><i class=\"fa fa-cog\"></i> <span>Consulta Cajas</span></a></li>
                ";
        }
        // line 62
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FISCALALOHA")) {
            // line 63
            echo "                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Operaciones</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("autorizardenominaciones");
            echo "\"></i> <span>Autorizar Denominaciones</span></a></li>
                        <li><a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultacuentas");
            echo "\"><span>Consulta Cuentas</span></a></li>
                        <li><a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarcuentas");
            echo "\"><span>Modificar Cuentas</span></a></li>
                        <li><a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultadevouchers");
            echo "\"><span>Gestion Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Tesoreria</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frmreporte");
            echo "\"><span>Parque Recreacional</span></a></li>
                        <li><a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frmreporte-noefectivas");
            echo "\"><span>Reporte Tarjetas</span></a></li>
                        <li><a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frm-cafeteriacentro");
            echo "\"><span>Cafeteria Centro</span></a></li>
                        <li><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cierrescondiferencias");
            echo "\"><span>Descuadres Cajeros</span></a></li>
                        <li><a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formreportesubsidioenespecie");
            echo "\"><span>Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                ";
        }
        // line 83
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANALISTAINVENTARIO")) {
            // line 84
            echo "                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Restaurantes</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidos");
            echo "\"><span>Pmix</span></a></li>
                        <li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidosconsolidado");
            echo "\"><span>Consolidado</span></a></li>
                        <li><a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reembolsos");
            echo "\"><span>Reembolsos</span></a></li>
                        <li><a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interfaceinventario");
            echo "\"><span>Interface Inventario</span></a></li>
                        <li><a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interfaceproductos");
            echo "\"><span>Interface Productos</span></a></li>
                    </ul>
\t\t        </li>
                ";
        }
        // line 95
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUDITOR")) {
            // line 96
            echo "                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Consulta</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultacuentas");
            echo "\"><span>Cuentas Aloha</span></a></li>
                        <li><a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidos");
            echo "\"><span>Reporte Pmix</span></a></li>
                        <li><a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cierrescondiferencias");
            echo "\"><span>Descuadres Cajeros</span></a></li>
                        <li><a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidosconsolidado");
            echo "\"><span>Consolidado Productos</span></a></li>
                        <li><a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reembolsos");
            echo "\"><span>Reembolsos</span></a></li>
                        <li><a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formreportesubsidioenespecie");
            echo "\"><span>Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                ";
        }
        // line 108
        echo "            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 119
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">

        </div>
        <!-- Default to the left -->
        <strong>Facturacion Aloha&copy; ";
        // line 136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Comfamiliar Risaralda</strong>. Todos los derechos reservados
    </footer>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 120
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 121
            echo "                    Felicitaciones !! ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "nombre", [], "any", false, false, false, 121), "html", null, true);
            echo " eres Administrador
                ";
        }
        // line 122
        echo "    
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Principal:body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 122,  322 => 121,  319 => 120,  309 => 119,  295 => 136,  281 => 124,  279 => 119,  266 => 108,  259 => 104,  255 => 103,  251 => 102,  247 => 101,  243 => 100,  239 => 99,  234 => 96,  231 => 95,  224 => 91,  220 => 90,  216 => 89,  212 => 88,  208 => 87,  203 => 84,  200 => 83,  193 => 79,  189 => 78,  185 => 77,  181 => 76,  177 => 75,  168 => 69,  164 => 68,  160 => 67,  156 => 66,  151 => 63,  148 => 62,  143 => 60,  138 => 59,  136 => 58,  121 => 45,  111 => 37,  101 => 30,  75 => 7,  68 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} {% block body %}
<div class=\"wrapper\">
    <!-- Main Header -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"{{ url('homepage') }}\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>F</b>A</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\">Facturacion&nbsp;Aloha</span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">

                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">{{app.user.nombre}}</span>
                        </a>
                        <ul class=\"dropdown-menu\">

                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-right\">
                                    <a href=\"{{ url('logout') }}\" class=\"btn btn-default btn-flat\">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        {# <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>#}
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar Menu -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">Menú principal</li>
                {% if is_granted('ROLE_CAJEROALOHA')%}
                <li><a href=\"{{path(\"cierreparcialdecaja\")}}\"><i class=\"fa fa-cog\"></i> <span>Cierre Parcial de Caja</span></a></li>
                <li><a href=\"{{path(\"consultadecajas\")}}\"><i class=\"fa fa-cog\"></i> <span>Consulta Cajas</span></a></li>
                {% endif %}
                {% if is_granted('ROLE_FISCALALOHA')%}
                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Operaciones</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path(\"autorizardenominaciones\")}}\"></i> <span>Autorizar Denominaciones</span></a></li>
                        <li><a href=\"{{path(\"consultacuentas\")}}\"><span>Consulta Cuentas</span></a></li>
                        <li><a href=\"{{path(\"modificarcuentas\")}}\"><span>Modificar Cuentas</span></a></li>
                        <li><a href=\"{{path(\"consultadevouchers\")}}\"><span>Gestion Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Tesoreria</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path(\"frmreporte\")}}\"><span>Parque Recreacional</span></a></li>
                        <li><a href=\"{{path(\"frmreporte-noefectivas\")}}\"><span>Reporte Tarjetas</span></a></li>
                        <li><a href=\"{{path(\"frm-cafeteriacentro\")}}\"><span>Cafeteria Centro</span></a></li>
                        <li><a href=\"{{path(\"cierrescondiferencias\")}}\"><span>Descuadres Cajeros</span></a></li>
                        <li><a href=\"{{path(\"formreportesubsidioenespecie\")}}\"><span>Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                {% endif %}
                {% if is_granted('ROLE_ANALISTAINVENTARIO')%}
                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Restaurantes</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path(\"productosvendidos\")}}\"><span>Pmix</span></a></li>
                        <li><a href=\"{{path(\"productosvendidosconsolidado\")}}\"><span>Consolidado</span></a></li>
                        <li><a href=\"{{path(\"reembolsos\")}}\"><span>Reembolsos</span></a></li>
                        <li><a href=\"{{path(\"interfaceinventario\")}}\"><span>Interface Inventario</span></a></li>
                        <li><a href=\"{{path(\"interfaceproductos\")}}\"><span>Interface Productos</span></a></li>
                    </ul>
\t\t        </li>
                {% endif %}
                {% if is_granted('ROLE_AUDITOR')%}
                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Consulta</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{path(\"consultacuentas\")}}\"><span>Cuentas Aloha</span></a></li>
                        <li><a href=\"{{path(\"productosvendidos\")}}\"><span>Reporte Pmix</span></a></li>
                        <li><a href=\"{{path(\"cierrescondiferencias\")}}\"><span>Descuadres Cajeros</span></a></li>
                        <li><a href=\"{{path(\"productosvendidosconsolidado\")}}\"><span>Consolidado Productos</span></a></li>
                        <li><a href=\"{{path(\"reembolsos\")}}\"><span>Reembolsos</span></a></li>
                        <li><a href=\"{{path(\"formreportesubsidioenespecie\")}}\"><span>Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                {% endif %}
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class=\"content\">
            {% block content %}
                {% if is_granted('ROLE_ADMIN') %}
                    Felicitaciones !! {{app.user.nombre}} eres Administrador
                {% endif %}    
            {% endblock %}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">

        </div>
        <!-- Default to the left -->
        <strong>Facturacion Aloha&copy; {{ \"now\"|date(\"Y\") }} Comfamiliar Risaralda</strong>. Todos los derechos reservados
    </footer>
</div>
{% endblock %}", "AppBundle:Principal:body.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Principal/body.html.twig");
    }
}
