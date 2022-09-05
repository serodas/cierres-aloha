(function() {
    $(document).ready(function() {

        $("#btn-consolidado").on("click", function() {
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();
            loadDataTable(desde, hasta);
        });

        function loadDataTable(desde, hasta) {
            $("#time-icon").removeClass("hidden");
            $("#download-icon").addClass("hidden");

            var table = $('#consolidado').DataTable({
                "initComplete": function(settings, json) {
                    $("#time-icon").addClass("hidden");
                    $("#download-icon").removeClass("hidden");
                    $("#productos").addClass("hidden");
                },
                "searchDelay": 1000,
                "language": {
                    "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Cargando ...',
                    "sLengthMenu": "Mostrar _MENU_ recetas",
                    "sZeroRecords": "No se encontraron recetas",
                    "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No hay recetas filtradas</h4></span>",
                    "sInfo": "Mostrando recetas del _START_ al _END_ de un total de _TOTAL_ recetas",
                    "sInfoEmpty": "Mostrando recetas del 0 al 0 de un total de 0 recetas",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ recetas)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando ...",
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
                "pagingType": "full_numbers",
                "pageLength": 25,
                "responsive": true,
                "processing": true,
                "ajax": {
                    'url': '/api/productosvendidosconsolidado/' + desde + '/' + hasta,
                    'type': 'GET'
                },
                "columns": [
                    { 'data': 'fecha' },
                    { 'data': 'punto' },
                    { 'data': 'producto' },
                    { 'data': 'descripcion' },
                    { 'data': 'cantidad' },
                    { 'data': 'total' },
                    {
                        "orderable": false,
                        "searchable": false,
                        "data": null,
                        "render": function(data, type, full, meta) {
                            var data = ' data-dob="' + full.fecha + '"';
                            data += ' data-terminal="' + full.hijos + '"';
                            data += ' data-producto="' + full.producto + '"';
                            if (full.hijos != 0) {
                                return '<a "' + data + '" href="#" class="verdetalle btn btn-success btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> <span class="hidden-xs">Ver detalle</a></span>';
                            } else {
                                return '';
                            }
                        },
                    }
                ],
                "drawCallback": function(settings) {
                    $(".verdetalle").click(function() {
                        $.ajax({
                            type: "GET",
                            url: "/api/gethijos",
                            data: {
                                dob: $(this).data("dob"),
                                terminal: $(this).data("terminal"),
                                producto: $(this).data("producto")
                            },
                            timeout: 20000,
                            error: function() {
                                console.error('Error al cargar información de los productos.');
                            },
                            beforeSend: function() {

                            },
                            success: function(data) {
                                var content = "<table class='table table-bordered'>";
                                content += '<tr><td><h5>Modificador</h5></td><td><h5>Producto</h5></td><td><h5>Descripcion</h5></td><td><h5>Cantidad</h5></td></tr>';
                                $.each(data, function(key, registro) {
                                    for (var i = 0; i < registro.length; i++) {
                                        content += '<tr><td>' + registro[i].modificador + '</td>';
                                        content += '<td>' + registro[i].producto + '</td>';
                                        content += '<td>' + registro[i].descripcion + '</td>';
                                        content += '<td>' + registro[i].cantidad + '</td></tr>';
                                    }
                                });
                                content += "</table>"
                                $("#divtabledetalle").empty();
                                $('#divtabledetalle').append(content);
                                console.log(content);
                            }
                        });
                        $('#modalDetalle').modal('show');
                    });
                }
            });
        }

        $('#modalDetalle').on('hidden.bs.modal', function() {
            $("#divtabledetalle").empty();
        })
    });
})();