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

/* AppBundle:Venta:consultadevouchers.html.twig */
class __TwigTemplate_8e8ddc9473d154e5e6e003ac0e7981e1edd85272fb2f4ccf940ad2b026a1d523 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle:Principal:body.html.twig", "AppBundle:Venta:consultadevouchers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Consulta de Vouchers";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "       <form name=\"Frmvouchers\" id=\"Frmvouchers\" action=\"\" method=\"\" class=\"form-inline\" role=\"form\">
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Desde</label>
                <input type=\"text\" id=\"desde\" name=\"desde\" required=\"required\" class=\"js-datepicker-inventario form-control\">
            </div>
            <div class='form-group'>
                <label for=\"fecha\" class=\"required\">Hasta</label>
                <input type=\"text\" id=\"hasta\" name=\"hasta\" required=\"required\" class=\"js-datepicker-inventario form-control\">
            </div>
            <div class='form-group'>
                <button type=\"button\" id=\"btn-vouchers\" name=\"btn-vouchers\" class=\"form-submit btn btn-primary btn-sm\">
                 <i id=\"download-icon\" class=\"fa fa-download\" aria-hidden=\"true\"></i><i id=\"time-icon\" class=\"far fa-clock hidden fa-spin\"></i> Buscar</button>
            </div>
        </form>    
    <div class=\"clearfix\"></div>
    </br>
        <div id=\"datatable-vouchers\" class=\"oculto\">
            <div class=\"text-center\">
                <h2 style=\"font-size:12px\">COMPROBANTES FACTURADOS DE SUBSIDIO EN ESPECIE MAL DIGITADOS EN ALOHA</h2>
            </div>
            <table id=\"vouchers\" class=\"table table-bordered table-condensed\">
                <thead>
                    <tr> 
                        <th class=\"hidden\">Id</th>
                        <th>Voucher</th>  
                        <th>Fecha</th>                  
                        <th>Valor</th>
                        <th>Cuenta</th>
                        <th>Cajero</th>
                        <th>Observacion</th>
                        <th data-priority=\"1\"></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div id=\"datatable-vouchers-tbsubesp\" class=\"oculto\">
            <div class=\"text-center\">
                <h2 style=\"font-size:12px\">COMPROBANTES DE SUBSIDIO EN ESPECIE SIN UNA FACTURA ALOHA ASOCIADA</h2>
            </div>
            <table id=\"vouchers-tbsubesp\" class=\"table table-bordered table-condensed\">
                <thead>
                    <tr> 
                        <th>Voucher</th>
                        <th>Fecha</th>                   
                        <th>Nombre Cliente</th>
                        <th>Documento</th>
                        <th>Descuento</th>
                        <th>Categoria</th>
                        <th data-priority=\"1\"></th>
                    </tr>
                </thead>
            </table>
        </div>
      
    <!-- Modal -->
    <div id=\"modalDetalle\" class=\"modal fade bd-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Corregir Voucher</h3>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                 </div>
                <div class=\"modal-body\">
                   <form id=\"tbsubesp\" class=\"tbsubesp\" action=\"\">
                        <div class='form-group'>
                                <label for=\"auth\" class=\"required\">Voucher Incorrecto:</label>
                                <div class=\"input-group\">
                                    <input name=\"auth\" id=\"auth\" class=\"form-control\" readOnly/>
                                    <input name=\"idTndr\" id=\"idTndr\" class=\"form-control hidden\" readOnly/>
                                    <span class=\"glyphicon glyphicon-warning-sign form-control-feedback\"></span>
                                </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                               <label for=\"voucher\" class=\"required\">Seleccione Voucher Correcto:</label>
                                <select id=\"voucher\" name=\"voucher\" class=\"form-control  input-lg\" onchange=\"getCliente(this);\">
                                </select>
                            </div>
                            
                            <div class=\"col-xs-12 col-sm-6\">
                               <label for=\"descuento\" class=\"required\">Descuento:</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">\$</span>
                                    <input name=\"descuento\" id=\"descuento\" class=\"form-control  input-lg\" disabled=\"disabled\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <label for=\"Documento\" class=\"required\">Documento Identidad Cliente:</label>
                                <input name=\"documento\" id=\"documento\" class=\"form-control  input-lg\" type=\"text\" disabled=\"disabled\"/>
                            </div>
                            
                            <div class=\"col-xs-12 col-sm-6\">
                                <label for=\"nombre\" class=\"required\">Nombre Completo del Cliente:</label>
                                <input name=\"nombre\" id=\"nombre\" class=\"form-control  input-lg\" type=\"text\" disabled=\"disabled\"/>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <label for=\"empleado\" class=\"required\">Cajero Aloha:</label>
                                <input name=\"empleado\" id=\"empleado\" class=\"form-control\" type=\"text\" disabled=\"disabled\"/>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <label for=\"cajero\" class=\"required\">Cajero Datafono:</label>
                                <input name=\"cajero\" id=\"cajero\" class=\"form-control\" type=\"text\" disabled=\"disabled\"/>
                            </div>
                        </div>
                        <div class=\"oculto\">
                            <div class='form-group'>
                                <label for=\"cuenta\" class=\"required\">Cuenta:</label>
                                <div class=\"input-group\">
                                    <input name=\"cuenta\" id=\"cuenta\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for=\"fecha\" class=\"required\">Fecha:</label>
                                <div class=\"input-group\">
                                    <input name=\"fecha\" id=\"fecha\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for=\"nickname\" class=\"required\">nickname aloha:</label>
                                <div class=\"input-group\">
                                    <input name=\"nickname\" id=\"nickname\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>
                    </form>    
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"limpiar btn btn-secondary\" data-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" id=\"si\" class=\"btn btn-primary\" onclick=\"actualizarVouchertblGndTndr();\" >Actualizar</button>
                </div>
            </div>
        </div>
    </div>      
    <!-- Modal -->
    <div id=\"modalDetalleInactivar\" class=\"modal fade bd-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"modal-title\" id=\"exampleModalLabel\">Inactivar Voucher</h3>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                 </div>
                <div class=\"modal-body\">
                   <form id=\"inactivar-tbsubesp\" class=\"tbsubesp\" action=\"\">
                        <div class=\"oculto\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <label for=\"voucher\" class=\"required\">Voucher:</label>
                                <input name=\"id\" id=\"id\" type=\"number\" class=\"form-control\" />
                            </div>
                        </div>
                        <div class='observacion' id=\"observacion\">
                        </div>
                    </form>    
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"limpiar btn btn-secondary\" data-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" id=\"si\" class=\"btn btn-primary\" onclick=\"onClickInactivarVoucherTbSubEspAjax();\" >Actualizar</button>
                </div>
            </div>
        </div>
    </div>      
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Venta:consultadevouchers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Venta:consultadevouchers.html.twig", "/var/www/cierresaloha/public_html/src/AppBundle/Resources/views/Venta/consultadevouchers.html.twig");
    }
}
