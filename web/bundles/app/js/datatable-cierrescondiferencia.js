(function() {
    $(document).ready(function() {
        $('#datatable-cierrescondiferencia').hide();
        $("#btn-cierrescondiferencia").on("click", function() {
            $('#datatable-cierrescondiferencia').show();
            $('#Frmcierrescondiferencias').hide();
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();
            var tipoconcepto = $("#tipo").val();
            var table = $('#cierrescondiferencia').DataTable({
                "searchDelay": 1000,
                "language": {
                    "sProcessing": '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Buscando cierres...',
                    "sLengthMenu": "Mostrar _MENU_ cierres",
                    "sZeroRecords": "No se encontraron cierres",
                    "sEmptyTable": "<span class='text-danger'><h4 style='margin-top: 0px; margin-bottom: 0px'>No hay cierres filtradas</h4></span>",
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
                "pageLength": 25,
                "responsive": true,
                "processing": true,
                "ajax": {
                    'url': '/api/cierrescondiferencias/' + desde + '/' + hasta,
                    'type': 'GET',
                    'data': {
                        tipo: tipoconcepto
                    }
                },
                "columns": [
                    { 'data': 'fecha' },
                    { 'data': 'terminal' },
                    { 'data': 'cajero' },
                    { 'data': 'documento' },
                    { 'data': 'diferencia' },
                    { 'data': 'motivo' },
                    { 'data': 'observacion' },
                    { 'data': 'createdAt' },
                    { 'data': 'updatedAt' },
                    { 'data': 'userAudit' }
                ],
                dom: 'Bfrtip',
                buttons: [
                    'excel'
                ]
            });
        });
    });
})();