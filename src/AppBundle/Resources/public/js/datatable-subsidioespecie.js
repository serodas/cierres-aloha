(function() {
    $(document).ready(function() {

        $("#btn-subsidio-especie").on("click", function() {
          
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();

            
            loadDataTableSubsidioEnEspecie(desde,hasta);
        });
    });
})();

function loadDataTableSubsidioEnEspecie(desde,hasta) {
   
    $("#time-icon").removeClass("hidden");
    $("#download-icon").addClass("hidden");

    var table = $('#table-subsidio-especie').DataTable({
        "initComplete": function(settings, json) {
            $("#time-icon").addClass("hidden");
            $("#download-icon").removeClass("hidden");
            $("#form-subsidio-especie").addClass("hidden");
            $('#table-subsidio-especie').show();
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
            'url': '/api/reportesubsidiosenespeciealoha',
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
            { 'data': 'total' },
            { 'data': 'descuento' },
            { 'data': 'porcentaje' },
            { 'data': 'categoria' },
            { 'data': 'genero' },
            { 'data': 'fechaNacimiento' },
            { 'data': 'cuenta' },
            { 'data': 'cajero' }
        ],
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    });
}

