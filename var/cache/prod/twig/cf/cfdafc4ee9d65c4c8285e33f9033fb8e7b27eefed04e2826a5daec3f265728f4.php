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
class __TwigTemplate_846423837917ad147ad8f492c58c4dc9f7b9ab5252d15a42fda372c59a6f351e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Principal:body.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30), "nombre", [], "any", false, false, false, 30), "html", null, true);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultacuentas");
            echo "\"><span>Consulta Cuentas</span></a></li>
                        <li><a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultadevouchers");
            echo "\"><span>Gestion Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Tesoreria</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frmreporte");
            echo "\"><span>Reporte Efectivo</span></a></li>
                        <li><a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frmreporte-noefectivas");
            echo "\"><span>Reporte Tarjetas</span></a></li>
                        <li><a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cierrescondiferencias");
            echo "\"><span>Descuadres Cajeros</span></a></li>
                        <li><a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formreportesubsidioenespecie");
            echo "\"><span>Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                ";
        }
        // line 80
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANALISTAINVENTARIO")) {
            // line 81
            echo "                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Restaurantes</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidos");
            echo "\"><span>Pmix</span></a></li>
                        <li><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidosconsolidado");
            echo "\"><span>Consolidado</span></a></li>
                        <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interfaceinventario");
            echo "\"><span>Interface Inventario</span></a></li>
                        <li><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interfaceproductos");
            echo "\"><span>Interface Productos</span></a></li>
                        <li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formreporte-reservas");
            echo "\"><span>Reporte Reservas</span></a></li>
                        <li><a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formreporte-micomfamiliar");
            echo "\"><span>Reporte Micomfamiliar</span></a></li>
                    </ul>
\t\t        </li>
                ";
        }
        // line 93
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUDITOR")) {
            // line 94
            echo "                <li class=\"treeview active\">
                    <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Consulta</span></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultacuentas");
            echo "\"><span>Cuentas Aloha</span></a></li>
                        <li><a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidos");
            echo "\"><span>Reporte Pmix</span></a></li>
                        <li><a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cierrescondiferencias");
            echo "\"><span>Descuadres Cajeros</span></a></li>
                        <li><a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosvendidosconsolidado");
            echo "\"><span>Consolidado Productos</span></a></li>
                        <li><a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reembolsos");
            echo "\"><span>Reembolsos</span></a></li>
                        <li><a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formreportesubsidioenespecie");
            echo "\"><span>Subsidio Especie</span></a></li>
                    </ul>
\t\t        </li>
                ";
        }
        // line 106
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TESOREROALOHA")) {
            // line 107
            echo "                    <li class=\"treeview active\">
                        <a href=\"#\"><i class=\"fa fa-cog\"></i> <span>Tesoreria</span></a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("autorizardenominaciones");
            echo "\"></i> <span>Autorizar Denominaciones</span></a></li>
                            <li><a href=\"";
            // line 111
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultacuentas");
            echo "\"><span>Consulta Cuentas</span></a></li>
                            <li><a href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarcuentas");
            echo "\"><span>Modificar Cuentas</span></a></li>
                            <li><a href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frmreporte");
            echo "\"><span>Reporte Efectivo</span></a></li>
                            <li><a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frmreporte-noefectivas");
            echo "\"><span>Reporte Tarjetas</span></a></li>
                            <li><a href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cierrescondiferencias");
            echo "\"><span>Descuadres Cajeros</span></a></li>
                            <li><a href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formreportesubsidioenespecie");
            echo "\"><span>Subsidio Especie</span></a></li>
                            <li><a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultadevouchers");
            echo "\"><span>Gestion Subsidio Especie</span></a></li>
                            <li><a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reembolsos");
            echo "\"><span>Reembolsos</span></a></li>
                        </ul>
                    </li>
                ";
        }
        // line 122
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
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 138
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
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Comfamiliar Risaralda</strong>. Todos los derechos reservados
    </footer>
</div>
";
    }

    // line 133
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 135
            echo "                    Felicitaciones !! ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 135), "nombre", [], "any", false, false, false, 135), "html", null, true);
            echo " eres Administrador
                ";
        }
        // line 136
        echo "    
            ";
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
        return array (  337 => 136,  331 => 135,  328 => 134,  324 => 133,  316 => 150,  302 => 138,  300 => 133,  287 => 122,  280 => 118,  276 => 117,  272 => 116,  268 => 115,  264 => 114,  260 => 113,  256 => 112,  252 => 111,  248 => 110,  243 => 107,  240 => 106,  233 => 102,  229 => 101,  225 => 100,  221 => 99,  217 => 98,  213 => 97,  208 => 94,  205 => 93,  198 => 89,  194 => 88,  190 => 87,  186 => 86,  182 => 85,  178 => 84,  173 => 81,  170 => 80,  163 => 76,  159 => 75,  155 => 74,  151 => 73,  142 => 67,  138 => 66,  133 => 63,  130 => 62,  125 => 60,  120 => 59,  118 => 58,  103 => 45,  93 => 37,  83 => 30,  57 => 7,  50 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Principal:body.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Principal/body.html.twig");
    }
}
