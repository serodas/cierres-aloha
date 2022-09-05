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

/* AppBundle:Venta:modalEditar.html.twig */
class __TwigTemplate_4a6a58c305868c031d0d09981e93c74937d79a4a5f9594677c3b6d42bec3826a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Modal para el boton autorizar -->
<div class=\"modal fade\" id=\"modalEditar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalLabel\">Editar Formas de Pago</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id='frmEditar' class=\"editarFormasPagos\" action=\"\">
                    <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <label for=\"totalReal\">Total Real</label>
                                 <div class=\"input-group\">
                                    <span class=\"input-group-addon\">\$</span>
                                    <input type=\"text\" id=\"totalReal\" name=\"totalReal\"  class=\"form-control\" readOnly />
                                </div>
                            </div>
                            
                            <div class=\"col-xs-12 col-sm-6\">
                                <label for=\"totalNuevo\">Total Nuevo</label>
                                 <div class=\"input-group\">
                                    <span class=\"input-group-addon\">\$</span>
                                    <input type=\"text\" id=\"totalNuevo\" name=\"totalNuevo\"  class=\"form-control\" readOnly />
                                </div>
                            </div>
                    </div>
                    <div class='form-group'>
                         <label for=\"observacion\">Observacion</label>
                        <textarea class=\"form-control\" id=\"observacion\" name=\"observacion\" required=\"required\"></textarea>
                    </div>
                    <div class='form-group'>
                        <table class=\"table\" id=\"tableFormasPago\">
                            <thead>
                                <tr>
                                <th scope=\"col\" style=\"display: none;\">Id</th>
                                <th scope=\"col\" style=\"width:190px;\">Forma de Pago</th>
                                <th scope=\"col\">Valor</th>
                                </tr>
                            </thead>
                            <tbody class=\"tbodyFormasPago\">
                                <tr>
                                    <td style=\"display: none;\">
                                        <input type=\"text\" id=\"idsec\" name=\"tblgndsale[0][idsec]\"  required=\"required\" class=\"form-control\" />
                                    </td>
                                    <th scope=\"row\">
                                        <select id=\"typeid\" name=\"tblgndsale[0][typeid]\" required=\"required\" class=\"fpagos form-control\">
                                            <option value=\"3\">Tarjeta Debito</option>
                                        </select>
                                    </th>
                                    <td>
                                        <input type=\"number\" id=\"amount\" name=\"tblgndsale[0][amount]\"  required=\"required\" class=\"totales form-control\" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                     </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <div id='mjError' style='color:red'; ></div>
                <button type=\"button\" class=\"limpiar btn btn-secondary\" data-dismiss=\"modal\">No</button>
                <button type=\"button\" id=\"si\" class=\"btn btn-primary\" onclick=\"confirmarEdicionFormasDePagos();\">Actualizar</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Venta:modalEditar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Venta:modalEditar.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/modalEditar.html.twig");
    }
}
