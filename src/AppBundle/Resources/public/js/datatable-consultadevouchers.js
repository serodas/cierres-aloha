(function() {
    $(document).ready(function() {

        $("#btn-vouchers").on("click", function() {
          
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();

            loadDataTableVoucherTblSubEspSinFacturas(desde,hasta);
            loadDataTableVoucherAlohaNoEncontradosYDuplicados(desde,hasta);
        });
    });
})();

function loadDataTableVoucherAlohaNoEncontradosYDuplicados(desde,hasta) {
    $('#datatable-vouchers').show();
    $("#time-icon").removeClass("hidden");
    $("#download-icon").addClass("hidden");

    var table = $('#vouchers').DataTable({
        "initComplete": function(settings, json) {
            $("#time-icon").addClass("hidden");
            $("#download-icon").removeClass("hidden");
            $("#Frmvouchers").addClass("hidden");
        },
        "searchDelay": 1000,
        "language": {
            "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Buscando vouchers...',
            "sLengthMenu": "Mostrar _MENU_ vouchers",
            "sZeroRecords": "No se encontraron vouchers",
            "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No se encontraron vouchers</h4></span>",
            "sInfo": "Mostrando vouchers del _START_ al _END_ de un total de _TOTAL_ vouchers",
            "sInfoEmpty": "Mostrando vouchers del 0 al 0 de un total de 0 vouchers",
            "sInfoFiltered": "(filtrado de un total de _MAX_ vouchers)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando vouchers..",
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
            'url': '/api/listarsubsidiosenespeciealoha',
            'type': 'GET',
            'data': {
                desde: desde,
                hasta: hasta
            }
        },
        "columns": [
            { 
                "visible": false,
                'data': 'id' 
            },
            { 'data': 'voucher' },
            { 'data': 'fecha' },
            { 'data': 'valor' },
            { 'data': 'cuenta' },
            { 'data': 'cajero' },
            { 'data': 'observacion' },
            {
                "orderable": false,
                "searchable": false,
                "data": null,
                "render": function(data, type, full, meta) {
                    var data = ' data-dob="' + full.fecha + '"';
                    data += ' data-valor="' + full.valor + '"';
                    data += ' data-cuenta="' + full.cuenta + '"';
                    data += ' data-auth="' + full.voucher + '"';
                    data += ' data-empleado="' + full.cajero + '"';
                    data += ' data-login="' + full.login + '"';
                    data += ' data-id="' + full.id + '"';
                  
                    return '<a "' + data + '" href="#" class="verdetalle btn btn-success btn-xs" onclick="getTbsubespByValorAndFecha(this);" ><i class="fa fa-check" aria-hidden="true"></i> <span class="hidden-xs">Corregir</a></span>';
                   
                }
            }
        ]
    });
}

function loadDataTableVoucherTblSubEspSinFacturas(desde,hasta) {
    $('#datatable-vouchers-tbsubesp').show();
    $("#time-icon").removeClass("hidden");
    $("#download-icon").addClass("hidden");
    
    var table = $('#vouchers-tbsubesp').DataTable({
        "initComplete": function(settings, json) {
            $("#time-icon").addClass("hidden");
            $("#download-icon").removeClass("hidden");
            $("#Frmvouchers").addClass("hidden");
        },
        "searchDelay": 1000,
        "language": {
            "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Buscando vouchers...',
            "sLengthMenu": "Mostrar _MENU_ vouchers",
            "sZeroRecords": "No se encontraron vouchers",
            "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No se encontraron vouchers</h4></span>",
            "sInfo": "Mostrando vouchers del _START_ al _END_ de un total de _TOTAL_ vouchers",
            "sInfoEmpty": "Mostrando vouchers del 0 al 0 de un total de 0 vouchers",
            "sInfoFiltered": "(filtrado de un total de _MAX_ vouchers)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando vouchers..",
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
            'url': '/api/listarsubsidiosenespeciebdmuf',
            'type': 'GET',
            'data': {
                desde: desde,
                hasta: hasta
            }
        },
        "columns": [
            { 'data': 'voucher' },
            { 'data': 'fecha' },
            { 'data': 'nombre' },
            { 'data': 'documento' },
            { 'data': 'descuento' },
            { 'data': 'categoria' },
            {
                "orderable": false,
                "searchable": false,
                "data": null,
                "render": function(data, type, full, meta) {
                    var data = ' data-id="' + full.voucher + '"';

                    return '<a "' + data + '" href="#" class="verdetalle btn btn-danger btn-xs" onclick="inactivarVoucherTbSubEsp(this);"><i class="fa fa-times" aria-hidden="true"></i> <span class="hidden-xs">Inactivar</a></span>';
                   
                }
            }
        ]
    });
}

function getTbsubespByValorAndFecha(elemento){
    limpiarInputs();
    $('#modalDetalle').modal('show');
    $('#cuenta').val($(elemento).data("cuenta"));
    $('#auth').val($(elemento).data("auth"));
    $('#nickname').val($(elemento).data("login"));
    $('#empleado').val($(elemento).data("empleado"));
    $('#idTndr').val($(elemento).data("id"));
    $.ajax({
        type: "GET",
        url: "/api/gettbsubesp",
        data: {
            fecha: $(elemento).data("dob"),
            valor: $(elemento).data("valor").replace(/,/g, ""),
            login: $(elemento).data("login")
        },
        timeout: 20000,
        error: function() {
            console.error('Error');
        },
        beforeSend: function() {
            $("#voucher").html('<option value='+ "" +'>' +"---" +'</option>');
        },
        success: function(data) {
            $.each(data, function(key, registro) {
                crearOptionsSelectVoucher(registro);
            });
        }
    });
}

function inactivarVoucherTbSubEsp(elemento){
    $('#modalDetalleInactivar').modal('show');
    var observacion = "<h3>¿Esta seguro de Inactivar el voucher: " + $(elemento).data("id") + "? </h3>";
    $("#observacion").html(observacion);
    // console.log($(elemento).data("id"));
    $("#id").val($(elemento).data("id"));
   
}

function onClickInactivarVoucherTbSubEspAjax(){
    var formulario = {
        id: $('#id').val()
    };

    $.ajax({
        type: "POST",
        url: "/api/inactivartbsubesp",
        data: formulario,
        dataType: "json",
        timeout: 20000,
        error: function() {
            console.error('Error');
        },
        beforeSend: function() {

        },
        success: function(data) {
            console.log(data);
            $('.modal').modal('hide');
            if(data){
                $('#vouchers-tbsubesp').DataTable().ajax.reload();
                $('#vouchers').DataTable().ajax.reload();
            }
        }
    });
}

function crearOptionsSelectVoucher(array){
    $.each(array, function(key, linea) {
            $("#voucher").append('<option value=' + linea.voucher + '>' + linea.voucher +"-"+ linea.cliente.nombre  +'</option>');
    });
}

function getCliente(elemento){
    $.ajax({
        type: "GET",
        url: "/api/getclientetbsubesp",
        data: {
            voucher: $(elemento).val()
        },
        timeout: 20000,
        error: function() {
            console.error('Error');
        },
        beforeSend: function() {

        },
        success: function(data) {
            $.each(data, function(key, registro) {
               $('#documento').val(registro[0].documento);
               $('#nombre').val(registro[0].nombre);
               $('#descuento').val(registro[0].descuento);
               $('#fecha').val(registro[0].fecha);
               $('#cajero').val(registro[0].cajero);
            });
        }
    });
}

function limpiarInputs(){
    $('#documento').val('');
    $('#nombre').val('');
    $('#descuento').val('');
    $('#fecha').val('');
    $('#cajero').val('');
}

function actualizarVouchertblGndTndr(){
    var formulario = {
        cuenta: $('#cuenta').val(),
        voucher: $('#voucher').val(),
        fecha: $('#fecha').val(),
        auth: $('#auth').val(),
        nickname: $('#nickname').val(),
        descuento: $('#descuento').val(),
        id: $('#idTndr').val()
    };

    $.ajax({
        type: "POST",
        url: "/api/actualizartblGndTndr",
        data: formulario,
        dataType: "json",
        timeout: 20000,
        error: function() {
            console.error('Error');
        },
        beforeSend: function() {

        },
        success: function(data) {
            console.log(data);
            $('.modal').modal('hide');
            if(data){
                $('#vouchers-tbsubesp').DataTable().ajax.reload();
                $('#vouchers').DataTable().ajax.reload();
            }
        }
    });
}