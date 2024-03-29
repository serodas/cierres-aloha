(function() {
    $(document).ready(function() {

        $("#btn-productos").on("click", function() {
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();
            loadDataTable(desde, hasta);
        });

        function loadDataTable(desde, hasta) {
            $("#time-icon").removeClass("hidden");
            $("#download-icon").addClass("hidden");

            var table = $('#productosvendidos').DataTable({
                "initComplete": function(settings, json) {
                    $("#time-icon").addClass("hidden");
                    $("#download-icon").removeClass("hidden");
                    $("#productos").addClass("hidden");
                },
                "searchDelay": 1000,
                "language": {
                    "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Buscando ventas...',
                    "sLengthMenu": "Mostrar _MENU_ ventas",
                    "sZeroRecords": "No se encontraron ventas",
                    "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No hay ventas filtradas</h4></span>",
                    "sInfo": "Mostrando ventas del _START_ al _END_ de un total de _TOTAL_ ventas",
                    "sInfoEmpty": "Mostrando ventas del 0 al 0 de un total de 0 ventas",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ ventas)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando ventas..",
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
                    'url': '/api/productosvendidos/' + desde + '/' + hasta,
                    'type': 'GET',
                },
                "columns": [
                    { 'data': 'fecha' },
                    { 'data': 'cajero' },
                    { 'data': 'punto' },
                    { 'data': 'producto' },
                    {
                        'data': 'descripcion',
                        "defaultContent": ""
                    },
                    { 'data': 'impuesto' },
                    { 'data': 'cantidad' },
                    { 'data': 'total' },
                ],
                dom: 'Bfrtip',
                buttons: [
                    'excel'
                ],

            });
        }
    });
})();