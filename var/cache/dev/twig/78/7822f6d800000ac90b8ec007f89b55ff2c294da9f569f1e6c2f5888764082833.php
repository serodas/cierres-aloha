<?php

/* base.html.twig */
class __TwigTemplate_b4464f31ab9e5da18bf931b02a2d83557e4c40769b3841072c962d0e4daa832f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'clasesbody' => array($this, 'block_clasesbody'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_font-awesome.min_2.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_ionicons.min_3.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_AdminLTE.min_4.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_skin-blue.min_5.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_bootstrap-datepicker.min_6.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_dataTables.bootstrap.min_7.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_responsive.dataTables.min_8.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_8") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_buttons.dataTables.min_9.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_9") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_part_10_index_1.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
            // asset "4235305_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305_10") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index_part_10_tirilla_2.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "4235305"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4235305") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/index.css");
            // line 23
            echo "  <!-- filter='uglifycss' filter='cssrewrite' output='css/index.css' -->
  <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_bootstrap.min_2.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_adminlte.min_3.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_bootstrap-datepicker.min_4.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_bootstrap-datepicker.es.min_5.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_jquery.dataTables.min_6.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_dataTables.bootstrap.min_7.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_dataTables.responsive.min_8.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_8") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_dataTables.buttons.min_9.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_9") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_buttons.html5.min_10.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_10") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_jszip.min_11.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_11") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_common_1.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_12") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-cajeros_2.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_13") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-cuentas_3.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_14") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-fiscales_4.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_15") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-modificarcuentas_5.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_16") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_datatable-productosvendidos_6.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "52b52aa_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa_17") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index_part_12_fecha_7.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "52b52aa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_52b52aa") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/index.js");
            // line 64
            echo "<!-- filter='uglifyjs2' output='js/index.js' --> 
<script src=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->source); })()), "html", null, true);
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
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_clasesbody($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "clasesbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "clasesbody"));

        echo "skin-blue sidebar-mini";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
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
        return array (  412 => 48,  394 => 47,  376 => 6,  364 => 66,  358 => 65,  355 => 64,  348 => 65,  345 => 64,  339 => 65,  336 => 64,  330 => 65,  327 => 64,  321 => 65,  318 => 64,  312 => 65,  309 => 64,  303 => 65,  300 => 64,  294 => 65,  291 => 64,  285 => 65,  282 => 64,  276 => 65,  273 => 64,  267 => 65,  264 => 64,  258 => 65,  255 => 64,  249 => 65,  246 => 64,  240 => 65,  237 => 64,  231 => 65,  228 => 64,  222 => 65,  219 => 64,  213 => 65,  210 => 64,  204 => 65,  201 => 64,  195 => 65,  192 => 64,  188 => 49,  186 => 48,  182 => 47,  159 => 26,  153 => 24,  150 => 23,  143 => 24,  140 => 23,  134 => 24,  131 => 23,  125 => 24,  122 => 23,  116 => 24,  113 => 23,  107 => 24,  104 => 23,  98 => 24,  95 => 23,  89 => 24,  86 => 23,  80 => 24,  77 => 23,  71 => 24,  68 => 23,  62 => 24,  59 => 23,  53 => 24,  50 => 23,  46 => 10,  39 => 6,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
