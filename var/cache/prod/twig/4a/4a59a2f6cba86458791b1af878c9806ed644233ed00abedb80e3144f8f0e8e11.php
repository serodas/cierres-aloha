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

/* base.html.twig */
class __TwigTemplate_f722c62554e305a82f22e2edc605e15b4ff7492e5e8a7eff5e59d60c83d2d256 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'clasesbody' => [$this, 'block_clasesbody'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">

 <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

  ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4235305_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_bootstrap.min_1.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_font-awesome.min_2.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_ionicons.min_3.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_AdminLTE.min_4.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_skin-blue.min_5.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_bootstrap-datepicker.min_6.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_dataTables.bootstrap.min_7.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_responsive.dataTables.min_8.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_8") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index_buttons.dataTables.min_9.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "4235305"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
  ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class=\"hold-transition ";
        // line 47
        $this->displayBlock('clasesbody', $context, $blocks);
        echo "\">
";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52b52aa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_jquery.min_1.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_bootstrap.min_2.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_adminlte.min_3.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_bootstrap-datepicker.min_4.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_bootstrap-datepicker.es.min_5.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_jquery.dataTables.min_6.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_dataTables.bootstrap.min_7.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_dataTables.responsive.min_8.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_8") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_dataTables.buttons.min_9.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_9") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_buttons.html5.min_10.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_10") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_jszip.min_11.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_11") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_Chart_1.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_12") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_common_2.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_13") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-cajeros_3.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_14") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-cierrescondiferencia_4.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_15") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-consultadevouchers_5.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_16") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-cuentas_6.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_17") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-fiscales_7.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_18") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-modificarcuentas_8.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_19") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-productosvendidos_9.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_20") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-reembolsos_10.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_21") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_datatable-subsidioespecie_11.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_22") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_fecha_12.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_23") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_fontawesome-all.min_13.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_24") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_micomfamiliar_14.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_25") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_reporteconsolidado_15.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_26") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index_part_12_reservas_16.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "52b52aa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 66
        echo " 
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenido";
    }

    // line 47
    public function block_clasesbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "skin-blue sidebar-mini";
    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 48,  448 => 47,  441 => 6,  435 => 66,  429 => 65,  426 => 64,  419 => 65,  416 => 64,  410 => 65,  407 => 64,  401 => 65,  398 => 64,  392 => 65,  389 => 64,  383 => 65,  380 => 64,  374 => 65,  371 => 64,  365 => 65,  362 => 64,  356 => 65,  353 => 64,  347 => 65,  344 => 64,  338 => 65,  335 => 64,  329 => 65,  326 => 64,  320 => 65,  317 => 64,  311 => 65,  308 => 64,  302 => 65,  299 => 64,  293 => 65,  290 => 64,  284 => 65,  281 => 64,  275 => 65,  272 => 64,  266 => 65,  263 => 64,  257 => 65,  254 => 64,  248 => 65,  245 => 64,  239 => 65,  236 => 64,  230 => 65,  227 => 64,  221 => 65,  218 => 64,  212 => 65,  209 => 64,  203 => 65,  200 => 64,  194 => 65,  191 => 64,  185 => 65,  182 => 64,  178 => 49,  176 => 48,  172 => 47,  149 => 26,  143 => 24,  140 => 23,  133 => 24,  130 => 23,  124 => 24,  121 => 23,  115 => 24,  112 => 23,  106 => 24,  103 => 23,  97 => 24,  94 => 23,  88 => 24,  85 => 23,  79 => 24,  76 => 23,  70 => 24,  67 => 23,  61 => 24,  58 => 23,  54 => 10,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/cierresaloha/public_html/app/Resources/views/base.html.twig");
    }
}
