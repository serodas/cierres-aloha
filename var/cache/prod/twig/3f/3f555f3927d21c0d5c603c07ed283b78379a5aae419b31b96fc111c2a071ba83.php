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

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_34965eace5ba027e7673a8fdf457aed08591b72ea3e6fba0c323f83b23f41292 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'clasesbody' => [$this, 'block_clasesbody'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Login:login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_clasesbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "login-page";
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"#\"><b>ALOHA</b> Facturacion</a>
    </div>
    <!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Ingrese sus datos de SEC para iniciar sesión</p>

        <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\" method=\"post\">
            <div class=\"form-group has-feedback\">
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Usuario\" required autofocus>
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\" required>
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Ingresar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


";
    }

    public function getTemplateName()
    {
        return "AppBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  56 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Login:login.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Login/login.html.twig");
    }
}
