(function() {
    $(document).ready(function() {

        var table = $('#cajeros').DataTable({
            "order": [
                [0, "desc"]
            ],
            "language": {
                "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Buscando cierres...',
                "sLengthMenu": "Mostrar _MENU_ cierres",
                "sZeroRecords": "No se encontraron cierres",
                "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No hay cierres filtrados</h4></span>",
                "sInfo": "Mostrando cierres del _START_ al _END_ de un total de _TOTAL_ cierres",
                "sInfoEmpty": "Mostrando cierres del 0 al 0 de un total de 0 cierres",
                "sInfoFiltered": "(filtrado de un total de _MAX_ cierres)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando cierres..",
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
                'url': '/api/cuadrecajero',
                'type': 'GET',
            },
            "columns": [
                { 'data': 'id' },
                { 'data': 'fecha' },
                { 'data': 'punto' },
                { 'data': 'cajero' },
                { 'data': 'efectivo' },
                { 'data': 'motivo' },
                {
                    "orderable": false,
                    "searchable": false,
                    "data": null,
                    "render": function(data, type, full, meta) {
                        var url = '/cajero/tirilla/';
                        var data = ' data-id="' + full.id + '"';
                        var a = '<a "' + data + '" href="#modalEditar" class="verdetalle edit" onclick="onClickEditarTirilla(this);"><i class="btn btn-link glyphicon glyphicon-edit"></i></a>';
                        a += "<a href='" + url + full.id + "' onclick='onClickImprimirTirilla(this);'><i class='btn btn-link glyphicon glyphicon-print'></i></a>";
                        return a;
                       
                    }
                }
            ]
            // createdRow: function(row, ficha, index) {
            //     var row = $(row);
            //     var td = $(row).children().eq(-1).html("");
            //     var url = '/cajero/tirilla/';
            //     var botonEditar = $("<a data-toggle='modal' href='#modalEditar' class='edit'><i class='btn btn-link glyphicon glyphicon-edit'></i></a>");
            //     var botonPrint = $("<a href='" + url + ficha.id + "'><i class='btn btn-link glyphicon glyphicon-print'></i></a>");

            //     botonPrint.on("click", function() {
            //         var widthVentana = 663;
            //         var heightVentana = 525;
            //         var left = (screen.width - widthVentana) / 2;
            //         var top = (screen.height - heightVentana) / 2;
            //         var ventanaImpresion = window.open(this, '_blank', 'top=' + top + ',left=' + left + ',width=' + widthVentana + ',height=' + heightVentana + ',toolbar=no,directories=no,status=no,menubar=no, scrollbars=no,resizable=no');
            //         ventanaImpresion.focus();
            //         ventanaImpresion.print();
            //         return false;
            //     });

            //     botonEditar.on("click", function() {
            //         $('#modalEditar').on("show.bs.modal", function(event) {
            //             var modal = $(this);
            //             modal.find('.modal-body #idModal').val(ficha.id);
            //             modal.find('.modal-body #idFecha').val(ficha.fecha);
            //             modal.find('.modal-body #cajero').val(ficha.cajero);
            //             modal.find('.modal-body #punto').val(ficha.punto);
            //             modal.find('.modal-body #ventregado').val(ficha.efectivo);

            //             $.ajax({
            //                 type: "GET",
            //                 url: '/api/punto/' + ficha.id,
            //                 success: function(data) {
            //                     $.each(data, function(key, registro) {
            //                         $("#punto").append('<option value=' + registro[0].id + '>' + registro[0].descripcion + '</option>');
            //                     });
            //                 },
            //                 error: function(data) {
            //                     console.log('error de conexion con el servidor');
            //                 }
            //             });

            //             modal.find('.modal-body #si').on("click", function() {
            //                 var form = $('form.cierre').serialize();
            //                 var key = modal.find('.modal-body #idModal').val();
            //                 console.log(key);
            //                 $.ajax({
            //                     data: form,
            //                     type: 'post',
            //                     url: '/api/ediciones/' + key,
            //                     success: function(data, textStatus, jqXHR) {
            //                         console.log(data);
            //                         $('.modal').modal('hide');
            //                         table.ajax.reload();
            //                         if (data.status == 'success') {
            //                             $(".cajeros").removeClass("alert alert-danger").addClass("alert alert-success");
            //                         } else {
            //                             $(".cajeros").removeClass("alert alert-success").addClass("alert alert-danger");
            //                         }
            //                         $("#mensaje").html(data.mensaje);
            //                     },
            //                     error: function(data) {
            //                         console.log("Error de Conexion con el Servidor");
            //                     }
            //                 });
            //             });
            //         });
            //         var originalModal = $('#modalEditar').clone();
            //         $("#modalEditar").on('hidden.bs.modal', function() {
            //             $(this).remove();
            //             var myClone = originalModal.clone();
            //             $('body').append(myClone);
            //         });
            //     });
            //     td.append(botonEditar);
            //     td.append(botonPrint);
            // }
        });
    });
})();

function onClickImprimirTirilla(elemento){
    var widthVentana = 663;
    var heightVentana = 525;
    var left = (screen.width - widthVentana) / 2;
    var top = (screen.height - heightVentana) / 2;
    var ventanaImpresion = window.open(elemento, '_blank', 'top=' + top + ',left=' + left + ',width=' + widthVentana + ',height=' + heightVentana + ',toolbar=no,directories=no,status=no,menubar=no, scrollbars=no,resizable=no');
    ventanaImpresion.focus();
    ventanaImpresion.print();
}   
    
function onClickEditarTirilla(elemento){
    $('#modalEditar').modal('show');

    $.ajax({
        type: "GET",
        url: "/api/getcierrebyid",
        data: {
            id: $(elemento).data("id"),
        },
        timeout: 20000,
        error: function() {
            console.error('Error');
        },
        beforeSend: function() {

        },
        success: function(data) {
            $('#idModal').val(data.id);
            $('#idFecha').val(data.fecha);
            $('#ventregado').val(data.digitado);
            $("#punto").empty();
            $("#punto").append('<option value=' + data.terminal.id + '>' + data.terminal.name + '</option>');
          
            if(data.cierre_tarjeta.length > 0 ){
               crearFilaTarjeta(data.cierre_tarjeta);
            }
           
        }
    });
}

function crearFilaTarjeta(registroArray){
    var tarjetasDescripcionesArray = new Array(20);
    tarjetasDescripcionesArray[3] = "T.Debito";
    tarjetasDescripcionesArray[4] = "T.Credito";
    tarjetasDescripcionesArray[16] = "Comfaplus";
    tarjetasDescripcionesArray[18] = "Sub.Especie";
    tarjetasDescripcionesArray[5] = "C.Nomina";

    $(".tbodyTarjetas").empty();
   
    var html ='';
    $.each(registroArray, function(key, registro) {
        
        html += "<tr>";
        html += "<td style='display: none;'><input type='text' name='tarjetas["+ key +"][id]' value='"+ registro.id +"' class='form-control' /></td>";
        html +="<th><select name='tarjetas["+ key +"][formapago]' class='form-control' >";
        html += "<option value='"+ registro.forma_pago +"'>"+ tarjetasDescripcionesArray[registro.forma_pago]+"</option>";
        html += "</select></th>";
        html += "<td><input type='number' name='tarjetas["+ key +"][cantidad]' value='"+ registro.cantidad +"' class='form-control'/></td>";
        html += "<td><input type='number' name='tarjetas["+ key +"][total]' value='"+ registro.total +"' class='form-control'/></td>";
        html += "</tr>";
        
    });
    
    $(".tbodyTarjetas").append(html);
    
}

function confirmarEdicion(){
    var form = $('form.cierre').serialize();
    var key = $('#idModal').val();
    console.log(key);
    
    $.ajax({
        data: form,
        type: 'post',
        url: '/api/ediciones/' + key,
        success: function(data, textStatus, jqXHR) {
            console.log(data);
            $('.modal').modal('hide');
            $('#cajeros').DataTable().ajax.reload();
            if (data.status == 'success') {
                $(".cajeros").removeClass("alert alert-danger").addClass("alert alert-success");
            } else {
                $(".cajeros").removeClass("alert alert-success").addClass("alert alert-danger");
            }
            $("#mensaje").html(data.mensaje);
        },
        error: function(data) {
            console.log("Error de Conexion con el Servidor");
        }
    });
}