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

/* AppBundle:Cajero:modalEditar.html.twig */
class __TwigTemplate_02973924a3a5d142dd0df0b6568c05973fd404494f176afa385d6606c65349a2 extends \Twig\Template
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
        echo "<!-- Modal para el boton modificar denominaciones -->
<div class=\"modal fade\" id=\"modalEditar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalLabel\">Modificar Denominaciones</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- formulario modificar denominaciones-->
                <form id=\"formEdit\" class=\"cierre\" action=\"\">
                    <div class='form-group' style=\"display: none;\">
                        <label for=\"idModal\" class=\"required\">Id</label>
                        <input type=\"text\" id=\"idModal\" name=\"idModal\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"idFecha\" class=\"required\">Fecha</label>
                        <input type=\"text\" id=\"idFecha\" name=\"idFecha\" required=\"required\" class=\"form-control\" readOnly >
                    </div>
                    <div class='form-group'>
                        <label for=\"punto\" class=\"required\">Punto</label>
                        <select id=\"punto\" name=\"punto\" required=\"required\" class=\"form-control\">
                        </select>
                    </div>
                    <div class='form-group'> 
                        <label for=\"ventregado\" class=\"required\">Valor Entregado en Efectivo</label>
                        <input type=\"number\" id=\"ventregado\" name=\"ventregado\" required=\"required\" class=\"form-control\">
                    </div>
                    <div class='form-group'>
                        <table class=\"table\" id=\"tableTarjetas\">
                            <thead>
                                <tr>
                                <th scope=\"col\" style=\"display: none;\">Id</th>
                                <th scope=\"col\" style=\"width:190px;\">Forma de Pago</th>
                                <th scope=\"col\">Cantidad</th>
                                <th scope=\"col\" >Total</th>
                                </tr>
                            </thead>
                            <tbody class=\"tbodyTarjetas\">
                                <tr>
                                    <td style=\"display: none;\">
                                        <input type=\"text\" id=\"cierreTarjetaId\" name=\"tarjetas[0][id]\"  required=\"required\" class=\"form-control\" />
                                    </td>
                                    <th scope=\"row\">
                                        <select id=\"tdebito\" name=\"tarjetas[0][formapago]\" required=\"required\" class=\"form-control\">
                                            <option value=\"3\">Tarjeta Debito</option>
                                        </select>
                                    </th>
                                    <td>
                                        <input type=\"number\" id=\"cantidadTDebito\" name=\"tarjetas[0][cantidad]\"  required=\"required\" class=\"form-control\" />
                                    </td>
                                    <td>
                                        <input type=\"number\" id=\"totalTDebito\" name=\"tarjetas[0][total]\"  required=\"required\" class=\"form-control\" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>    
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"no\" class=\"limpiar btn btn-secondary\" data-dismiss=\"modal\">No</button>
                    <button type=\"button\" id=\"si\" class=\"btn btn-primary\" onclick=\"confirmarEdicion(this);\">Si</button>
                </div>
            </div>
        </div>
    </div>
</div>    ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Cajero:modalEditar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Cajero:modalEditar.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Cajero/modalEditar.html.twig");
    }
}
