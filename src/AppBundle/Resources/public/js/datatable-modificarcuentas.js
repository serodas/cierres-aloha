(function() {
    $(document).ready(function() {
        $('#datatable-modificarcuentas').hide();
        $("#btn-modificarcuentas").on("click", function() {
            $('#datatable-modificarcuentas').show();
            $('#modificarfacturas').hide();
            var date = $("#date").val();
            var table = $('#modificarcuentas').DataTable({
                "searchDelay": 1000,
                "language": {
                    "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Buscando cuentas...',
                    "sLengthMenu": "Mostrar _MENU_ cuentas",
                    "sZeroRecords": "No se encontraron cuentas",
                    "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No hay cuentas filtradas</h4></span>",
                    "sInfo": "Mostrando cuentas del _START_ al _END_ de un total de _TOTAL_ cuentas",
                    "sInfoEmpty": "Mostrando cuentas del 0 al 0 de un total de 0 cuentas",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ cuentas)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando cuentas..",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },
                "responsive": true,
                "processing": true,
                "ajax": {
                    'url': '/api/consultacuentas/' + date,
                    'type': 'GET',
                    "dataSrc": ""
                },
                "columns": [
                    { 'data': 'id' },
                    { 'data': 'terminal' },
                    { 'data': 'fecha' },
                    { 'data': 'empleado' },
                    { 'data': 'cuenta' },
                    { 'data': 'fpago' },
                    { 'data': 'valor' },
                    {
                        "class": "details-control",
                        "orderable": false,
                        'data': null,
                        "render": function(data, type, full, meta) {
                            var data = ' data-id="' + full.id + '"';
                            var a = '<a "' + data + '" href="#modalEditar" class="verdetalle edit" onclick="onClickEditarFormasPagos(this);"><i class="btn btn-link glyphicon glyphicon-edit"></i></a>';
                            return a;
                           
                        }
                    }
                ]
            });
        });
    });
})();

function onClickEditarFormasPagos(elemento){
    $('#modalEditar').modal('show');
    $('#si').attr('disabled',false);
    $('#mjError').html('');
    $('#observacion').val('');
    $.ajax({
        type: 'get',
        url: '/api/formasdepago/' + $(elemento).data("id"),
        success: function(data, textStatus, jqXHR) {
            
            if(data.valores.length > 0 ){
                crearFilaConFormaPago(data.valores,data.tblFpagos);
             }
            
        },
        error: function(data) {
            console.log("Error de Conexion con el Servidor");
        }
    });
}


function crearFilaConFormaPago(registroArray,formasdepagoArray){
    $(".tbodyFormasPago").empty();
   
    var html ='';
    var total= 0;
  
   
    $.each(registroArray, function(key, registro) {
        html += "<tr>";
        html += "<td style='display: none;'><input type='text' name='tblgndsale["+ key +"][idsec]' value='"+ registro.id +"' class='form-control' /></td>";
        html +="<th><select id='fpago-"+ key +"' name='tblgndsale["+ key +"][typeid]' class='fpagos form-control' onchange='isValidFormasDePago(this);'>";
        html += crearOptionsConFormasDePagoAndSelected(formasdepagoArray,registro.typeid.id);
        html += "</select></th>";
        html += "<td><input type='number' name='tblgndsale["+ key +"][amount]' value='"+ registro.amount +"' class='totales form-control' onkeyup='actualizarTotalNuevo();' /></td>";
        html += "</tr>";

        total += registro.amount;
      
    
    });

    $(".tbodyFormasPago").append(html);
    
    $('#totalReal').val(total);
    $('#totalNuevo').val(total);
   
  
}

function crearOptionsConFormasDePagoAndSelected(formasdepagoArray,selected){
    var options ='';
    var select ='';
    $.each(formasdepagoArray, function(key, registro) {
        if(registro.id == selected){
            select = "selected";
        }else{
            select ='';
        }
        options += "<option "+ select +" value='"+ registro.id +"'>"+ registro.name +"</option>";
    });

    return options;
}

function confirmarEdicionFormasDePagos(){
    var form = $('form.editarFormasPagos').serialize();

    $.ajax({
        data: form,
        type: 'post',
        url: '/api/edicionesventas',
        success: function(data, textStatus, jqXHR) {
            $('.modal').modal('hide');
            $('#modificarcuentas').DataTable().ajax.reload();
            if (data.status == 'success') {
                $(".cuentas").removeClass("alert alert-danger").addClass("alert alert-success");
            } else {
                $(".cuentas").removeClass("alert alert-success").addClass("alert alert-danger");
            }
            $("#mensaje").html(data.mensaje);
        },
        error: function(data) {
            console.log("Error de Conexion con el Servidor");
        }
    });
}

function actualizarTotalNuevo(){
    var totalNuevo = 0;
    $("#frmEditar").find('.totales').each(function() {
        totalNuevo += parseInt($(this).val());
    });

    $('#totalNuevo').val(totalNuevo);
    isValidTotalFacturaForm();
    isValidFormasDePago('#fpago-0');
}

function isValidTotalFacturaForm(){
    var totalReal = $('#totalReal').val();
    var totalNuevo = $('#totalNuevo').val();
 
    if(totalReal == totalNuevo){
        $('#si').attr('disabled',false);
        $('#mjError').html('');
        return true;
    }else{
        $('#si').attr('disabled',true);
        $('#mjError').html('Total de la Factura no valido');
        return false;
    }
}

function isValidFormasDePago(elemento){
    var fpago = $(elemento).val();
    var contador = 0;
    var totaIsValid = isValidTotalFacturaForm();
    console.log("El total de la fa es valido: " + totaIsValid);

    $("#frmEditar").find('.fpagos').each(function() {
        if($(this).val() == fpago){
            contador++;
        }
    });
     
    if(contador > 1){
        $('#si').attr('disabled',true);
        $('#mjError').html('Formas de pago repetidas');
        return false;
    }else{
        if(totaIsValid){
            $('#si').attr('disabled',false);
            $('#mjError').html('');
            return true;
        }else{
            $('#si').attr('disabled',true);
            $('#mjError').html('Total de la Factura no valido');
            return false;
        }
    }
}