(function() {
    $(document).ready(function() {

        var table = $('#fiscales').DataTable({
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
                'url': '/api/cuadres',
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
                    "class": "details-control",
                    "orderable": false,
                    'data': null
                }
            ],
            createdRow: function(row, ficha, index) {
                var row = $(row);
                var td = $(row).children().eq(-1).html("");
                var url = '/cajero/tirilla/'
                var botonAutorizar = $("<a data-toggle='modal' href='#modalAutorizar' class='autorizar'><i class='btn btn-link glyphicon glyphicon-check'></i></a>");
                var botonPrint = $("<a href='" + url + ficha.id + "'><i class='btn btn-link glyphicon glyphicon-print'></i></a>");
                var botonRemove = $("<a data-toggle='modal' href='#modalRemove' class='remove'><i class='btn btn-link glyphicon glyphicon-remove'></i></a>");

                botonPrint.on("click", function() {
                    var widthVentana = 663;
                    var heightVentana = 525;
                    var left = (screen.width - widthVentana) / 2;
                    var top = (screen.height - heightVentana) / 2;
                    var ventanaImpresion = window.open(this, '_blank', 'top=' + top + ',left=' + left + ',width=' + widthVentana + ',height=' + heightVentana + ',toolbar=no,directories=no,status=no,menubar=no, scrollbars=no,resizable=no');
                    ventanaImpresion.focus();
                    ventanaImpresion.print(); //DOES NOT WORK
                    return false;
                });

                botonAutorizar.on("click", function() {
                    $('#modalAutorizar').on("show.bs.modal", function(event) {
                        var modal = $(this);
                        modal.find('.modal-body #idAuth').val(ficha.id);
                        modal.find('.modal-footer #si').on("click", function() {
                            var form = $('form.autorizar').serialize();
                            var key = modal.find('.modal-body #idAuth').val();

                            $.ajax({
                                data: form,
                                type: 'post',
                                url: '/api/autorizaciones/' + key,
                                success: function(data, textStatus, jqXHR) {
                                    console.log(data);
                                    $('.modal').modal('hide');
                                    table.ajax.reload();
                                    if (data.status == 'success') {
                                        $(".fiscales").removeClass("alert alert-danger").addClass("alert alert-success");
                                    } else {
                                        $(".fiscales").removeClass("alert alert-success").addClass("alert alert-danger");
                                    }
                                    $("#mensaje").html(data.mensaje);
                                },
                                error: function(data) {
                                    console.log("Error de Conexion con el Servidor");
                                }
                            });
                        });
                    });
                    var originalModal = $('#modalAutorizar').clone();
                    $("#modalAutorizar").on('hidden.bs.modal', function() {
                        $(this).remove();
                        var myClone = originalModal.clone();
                        $('body').append(myClone);
                    });
                });

                botonRemove.on("click", function() {
                    $('#modalRemove').on("show.bs.modal", function(event) {
                        var modal = $(this);
                        modal.find('.modal-body #idAuth').val(ficha.id);
                        modal.find('.modal-footer #si').on("click", function() {
                            var form = $('form.remove').serialize();
                            var key = modal.find('.modal-body #idAuth').val();
                            console.log(key);
                            console.log(form);
                            $.ajax({
                                data: form,
                                type: 'post',
                                url: '/api/inactivaciones/' + key,
                                success: function(data, textStatus, jqXHR) {
                                    console.log(data);
                                    $('.modal').modal('hide');
                                    table.ajax.reload();
                                    if (data.status == 'success') {
                                        $(".fiscales").removeClass("alert alert-danger").addClass("alert alert-success");
                                    } else {
                                        $(".fiscales").removeClass("alert alert-success").addClass("alert alert-danger");
                                    }
                                    $("#mensaje").html(data.mensaje);
                                },
                                error: function(data) {
                                    console.log("Error de Conexion con el Servidor");
                                }
                            });
                        });
                    });
                    var originalModal = $('#modalRemove').clone();
                    $("#modalRemove").on('hidden.bs.modal', function() {
                        $(this).remove();
                        var myClone = originalModal.clone();
                        $('body').append(myClone);
                    });
                });
                td.append(botonAutorizar);
                td.append(botonPrint);
                td.append(botonRemove);
            }
        });
    });
})();