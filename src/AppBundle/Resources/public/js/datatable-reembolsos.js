(function() {
    $(document).ready(function() {
        $('#datatable-reembolsos').hide();
        $("#btn-reembolsos").on("click", function() {
            $('#datatable-reembolsos').show();
            $('#Frmreembolsos').hide();
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();
            console.log(desde + hasta);
            var table = $('#reembolsos').DataTable({
                "searchDelay": 1000,
                "language": {
                    "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Buscando reembolsos...',
                    "sLengthMenu": "Mostrar _MENU_ reembolsos",
                    "sZeroRecords": "No se encontraron reembolsos",
                    "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No hay reembolsos filtradas</h4></span>",
                    "sInfo": "Mostrando reembolsos del _START_ al _END_ de un total de _TOTAL_ reembolsos",
                    "sInfoEmpty": "Mostrando reembolsos del 0 al 0 de un total de 0 reembolsos",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ reembolsos)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando reembolsos..",
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
                    'url': '/api/reembolsos/' + desde + '/' + hasta,
                    'type': 'GET',
                },
                "columns": [
                    { 'data': 'fecha' },
                    { 'data': 'cajero' },
                    { 'data': 'punto' },
                    { 'data': 'cuenta' },
                    { 'data': 'producto' },
                    { 'data': 'descripcion' },
                    { 'data': 'total' },
                    { 'data': 'sysdate' }
                ],
                dom: 'Bfrtip',
                buttons: [
                    'excel'
                ]
            });
        });
    });
})();