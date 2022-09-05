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

/* AppBundle:Cajero:cierretotaldecaja.html.twig */
class __TwigTemplate_08bd9e2358f26a85a1029f7741b6e479b936b8bbbccbff05683e4af1ce066374 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AppBundle:Principal:body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Cajero:cierretotaldecaja.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Cierre Total";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <div class=\"row\">
    <form name=\"\" id=\"cierreCaja\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cierreparcialdecaja");
        echo "\" method=\"POST\" role=\"form\" >
      <div class=\"col-lg-6\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 8), "flashbag", [], "method", false, false, false, 8), "get", [0 => "status"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "          <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "          <h4>Cierre de caja</h4>
          <div class='form-group'>
              <label for=\"fecha\" class=\"required\">Fecha</label>
              <input type=\"text\" id=\"fecha\" name=\"fecha\" required=\"required\" class=\"js-datepicker form-control\">
          </div>
          <div class='form-group'>
              <label for=\"terminal\" class=\"required\">Terminal</label>
              <select id=\"terminal\" name=\"terminal\" required=\"required\" class=\"form-control\">
                <option value=\"\"> Seleccione...</option>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["terminales"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "name", [], "any", false, false, false, 20) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "name", [], "any", false, false, false, 20)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["terminal"]) {
            // line 21
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["terminal"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["terminal"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terminal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "              </select>
          </div>
          <div class='form-group'>
              <label for=\"valorEfectivo\" class=\"required\">Valor Entregado en Efectivo</label>
              <input type=\"number\" id=\"valorEfectivo\" name=\"valorEfectivo\" required=\"required\" class=\"form-control\" />
          </div>
      </div>
      <div class=\"col-lg-12\">
        <div class='form-group'>
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\" style=\"width:190px;\">Forma de Pago</th>
                <th scope=\"col\">Cantidad</th>
                <th scope=\"col\" >Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope=\"row\">
                    <select id=\"tdebito\" name=\"tarjetas[0][formapago]\" required=\"required\" class=\"form-control\">
                      <option value=\"3\">Tarjeta Debito</option>
                    </select>
                </th>
                <td>
                  <input type=\"number\" id=\"cantidadTDebito\" name=\"tarjetas[0][cantidad]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
                <td>
                  <input type=\"number\" id=\"totalTDebito\" name=\"tarjetas[0][total]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
              </tr>
              <tr>
                <th scope=\"row\">
                    <select id=\"tcredito\" name=\"tarjetas[1][formapago]\" required=\"required\" class=\"form-control\">
                      <option value=\"4\">Tarjeta Credito</option>
                    </select>
                </th>
                <td>
                  <input type=\"number\" id=\"cantidadTCredito\" name=\"tarjetas[1][cantidad]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
                <td>
                  <input type=\"number\" id=\"totalTCredito\" name=\"tarjetas[1][total]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
              </tr>
              <tr>
                <th scope=\"row\">
                  <select id=\"comfaplus\" name=\"tarjetas[2][formapago]\" required=\"required\" class=\"form-control\">
                    <option value=\"16\">Tarjeta ComfaPlus</option>
                  </select>
                </th>
                <td>
                  <input type=\"number\" id=\"cantidadTComfaPlus\" name=\"tarjetas[2][cantidad]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
                <td>
                  <input type=\"number\" id=\"totalTComfaPlus\" name=\"tarjetas[2][total]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
              </tr>
              <tr>
                <th scope=\"row\">
                  <select id=\"subsidioespecie\" name=\"tarjetas[3][formapago]\" required=\"required\" class=\"form-control\" />
                    <option value=\"18\">Subsidio Especie</option>
                  </select>
                </th>
                <td>
                  <input type=\"number\" id=\"cantidadSubsidioEspecie\" name=\"tarjetas[3][cantidad]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
                <td>
                  <input type=\"number\" id=\"totalSubsidioEspecie\" name=\"tarjetas[3][total]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
              </tr>
              <tr>
                <th scope=\"row\">
                  <select id=\"creditonomina\" name=\"tarjetas[4][formapago]\" required=\"required\" class=\"form-control\" />
                    <option value=\"5\">Crédito Nómina</option>
                  </select>
                </th>
                <td>
                  <input type=\"number\" id=\"cantidadCreditoNomina\" name=\"tarjetas[4][cantidad]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
                <td>
                  <input type=\"number\" id=\"totalCreditoNomina\" name=\"tarjetas[4][total]\" value=\"0\" required=\"required\" class=\"form-control\" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-lg-12\">
        <input type=\"submit\" id=\"btonCierreCaja\" name=\"btonCierreCaja\" class=\"form-submit btn btn-primary\" >
      </div>
    </form>
  </div>    
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:cierretotaldecaja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  94 => 21,  90 => 20,  79 => 11,  70 => 9,  66 => 8,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Cajero:cierretotaldecaja.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/cierretotaldecaja.html.twig");
    }
}
