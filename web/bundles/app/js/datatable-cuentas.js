(function() {
    $(document).ready(function() {
        $('#datatable-cuentas').hide();
        $("#btn-cuentas").on("click", function() {
            $('#datatable-cuentas').show();
            $('#facturas').hide();
            var date = $("#date").val();
            var table = $('#cuentas').DataTable({
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
                    { 'data': 'valor' }
                ],
                dom: 'Bfrtip',
                buttons: [
                    'excel'
                ]
            });
        });
    });
})();