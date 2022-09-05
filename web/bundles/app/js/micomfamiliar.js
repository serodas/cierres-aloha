(function() {
    $(document).ready(function(){

        $("#btn-micomfamiliar").on("click", function(){
            var documento = $('#documento').val();
            var json = { 'documento' : documento };
            var url = '/api/micomfamiliar';
            $("#time-icon").removeClass("hidden");
            $("#search-icon").addClass("hidden");
          
            $.ajax({
                type: "GET",
                url: url,
                data: json,
                beforeSend:function(){
                    $('.entradas-micomfamiliar').find('tbody').empty();
                    $('#entradas-micomfamiliar').addClass('oculto');
                    $('#mensaje').addClass('oculto');
                },
                success: function(data) {
                    console.log(data.length);
                    if(data.length > 0){
                        var content = tableEntradasMicomfamiliar(data);
                        if(content != ''){
                            $('#entradas-micomfamiliar').removeClass('oculto');
                            $('.entradas-micomfamiliar').find('tbody').append(content);
                        }
                    }else{
                        $('#mensaje').removeClass('oculto');
                        $('#mensaje').html('NO SE ENCONTRARON ENTRADAS EN LINEA PARA EL DOCUMENTO: ' + documento);
                    }
                    $("#time-icon").addClass("hidden");
                    $("#search-icon").removeClass("hidden");
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    })
})();

function tableEntradasMicomfamiliar(array){
    var contenido = '';
    $.each(array, function(key, linea) {
            contenido += '<tr><td>' + linea.MRCODCONS + '</td>';
            contenido += '<td>' + linea.DISPONIBLE + '</td>';
            contenido += '<td>' + linea.CARROS + '</td>';
            contenido += '<td>' + linea.MOTOS + '</td>';
            contenido += '<td>' + linea.FECHA_VISITA + '</td>';
            contenido += '<td>' + linea.FECHA_FACTURA + '</td>';
            contenido += '<td>' + linea.FACTURA + '</td>';
            contenido += "<td><button data-consecutivo='" + linea.MRCODCONS + "' class='btn btn-success btn-sm' onclick='onClickBtnDescargar(this);'><i class='fa fa-download' aria-hidden='true'></i></button></td></tr>";
    });

    return contenido;
}

function onClickBtnDescargar(elemento){
    var consecutivo = $(elemento).data('consecutivo');
    $.ajax({
        type: "GET",
        url: '/api/micomfamiliar/' + consecutivo,
        success: function(data) {
            var objbuilder = '';
            objbuilder += ('<object width="100%" height="100%" data="data:application/pdf;base64,');
            objbuilder += (data.data);
            objbuilder += ('" type="application/pdf" class="internal">');
            objbuilder += ('<embed src="data:application/pdf;base64,');
            objbuilder += (data.data);
            objbuilder += ('" type="application/pdf"  />');
            objbuilder += ('</object>');

            var win = window.open("#","_blank");
            var title = "Codigos de barra QR";
            win.document.write('<html><title>'+ title +'</title><body style="margin-top: 0px; margin-left: 0px; margin-right: 0px; margin-bottom: 0px;">');
            win.document.write(objbuilder);
            win.document.write('</body></html>');
            layer = jQuery(win.document);
        },
        error: function(data) {
            console.log(data);
        }
    });
}