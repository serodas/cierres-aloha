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
class __TwigTemplate_65bc68df2da9f07f8a799c5f0c8deda5a7bd57a25f3d0cece3a1ce75c5636f7e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_bootstrap.min_1.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_font-awesome.min_2.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_ionicons.min_3.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_AdminLTE.min_4.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_skin-blue.min_5.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_bootstrap-datepicker.min_6.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_dataTables.bootstrap.min_7.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_responsive.dataTables.min_8.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_8") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_buttons.dataTables.min_9.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_9") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_part_10_index_1.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_10") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_part_10_tirilla_2.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "4235305"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_jquery.min_1.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_bootstrap.min_2.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_adminlte.min_3.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_bootstrap-datepicker.min_4.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_bootstrap-datepicker.es.min_5.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_jquery.dataTables.min_6.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_dataTables.bootstrap.min_7.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_dataTables.responsive.min_8.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_8") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_dataTables.buttons.min_9.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_9") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_buttons.html5.min_10.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_10") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_jszip.min_11.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_11") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_common_1.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_12") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-cajeros_2.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_13") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-cierrescondiferencia_3.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_14") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-consultadevouchers_4.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_15") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-cuentas_5.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_16") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-fiscales_6.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_17") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-modificarcuentas_7.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_18") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-productosvendidos_8.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_19") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-reembolsos_9.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_20") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_fecha_10.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_21") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_fontawesome-all.min_11.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_22") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_reporteconsolidado_12.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "52b52aa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new RuntimeError('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 66
        echo " 
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_clasesbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clasesbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clasesbody"));

        echo "skin-blue sidebar-mini";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  473 => 48,  454 => 47,  435 => 6,  423 => 66,  417 => 65,  414 => 64,  407 => 65,  404 => 64,  398 => 65,  395 => 64,  389 => 65,  386 => 64,  380 => 65,  377 => 64,  371 => 65,  368 => 64,  362 => 65,  359 => 64,  353 => 65,  350 => 64,  344 => 65,  341 => 64,  335 => 65,  332 => 64,  326 => 65,  323 => 64,  317 => 65,  314 => 64,  308 => 65,  305 => 64,  299 => 65,  296 => 64,  290 => 65,  287 => 64,  281 => 65,  278 => 64,  272 => 65,  269 => 64,  263 => 65,  260 => 64,  254 => 65,  251 => 64,  245 => 65,  242 => 64,  236 => 65,  233 => 64,  227 => 65,  224 => 64,  218 => 65,  215 => 64,  209 => 65,  206 => 64,  202 => 49,  200 => 48,  196 => 47,  173 => 26,  167 => 24,  164 => 23,  157 => 24,  154 => 23,  148 => 24,  145 => 23,  139 => 24,  136 => 23,  130 => 24,  127 => 23,  121 => 24,  118 => 23,  112 => 24,  109 => 23,  103 => 24,  100 => 23,  94 => 24,  91 => 23,  85 => 24,  82 => 23,  76 => 24,  73 => 23,  67 => 24,  64 => 23,  60 => 10,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">

 <title>{% block title %}Bienvenido{% endblock %}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

  {% stylesheets
  'bundles/app/lib/bootstrap/dist/css/bootstrap.min.css'
  'bundles/app/lib/font-awesome/css/font-awesome.min.css'
  'bundles/app/lib/Ionicons/css/ionicons.min.css'
  'bundles/app/lib/AdminLTE/dist/css/AdminLTE.min.css'
  'bundles/app/lib/AdminLTE/dist/css/skins/skin-blue.min.css'
  'bundles/app/lib/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'
  'bundles/app/lib/datatables.net-bs/css/dataTables.bootstrap.min.css'
  'bundles/app/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css'
  'bundles/app/lib/datatables.net-buttons-dt/css/buttons.dataTables.min.css'
  'bundles/app/css/*'
  filter='uglifycss' filter='cssrewrite' output='css/index.css'
  %}
  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
  {% endstylesheets %}
</head>
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
<body class=\"hold-transition {% block clasesbody %}skin-blue sidebar-mini{% endblock %}\">
{% block body %}{% endblock %}
{% javascripts
'@AppBundle/Resources/public/lib/jquery/dist/jquery.min.js'
'@AppBundle/Resources/public/lib/bootstrap/dist/js/bootstrap.min.js'
'@AppBundle/Resources/public/lib/AdminLTE/dist/js/adminlte.min.js'
'@AppBundle/Resources/public/lib/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
'@AppBundle/Resources/public/lib/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js'
'@AppBundle/Resources/public/lib/datatables.net/js/jquery.dataTables.min.js'
'@AppBundle/Resources/public/lib/datatables.net-bs/js/dataTables.bootstrap.min.js'
'@AppBundle/Resources/public/lib/datatables.net-responsive/js/dataTables.responsive.min.js'
'@AppBundle/Resources/public/lib/datatables.net-buttons/js/dataTables.buttons.min.js'
'@AppBundle/Resources/public/lib/datatables.net-buttons/js/buttons.html5.min.js'
'@AppBundle/Resources/public/lib/jszip/dist/jszip.min.js'            
'@AppBundle/Resources/public/js/*'
filter='uglifyjs2' output='js/index.js'
 %}
<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"{{ asset_url }}\"></script>
{% endjavascripts %} 
</body>
</html>", "base.html.twig", "/var/www/cierresaloha/public_html/app/Resources/views/base.html.twig");
    }
}
