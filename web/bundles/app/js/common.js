(function() {
    $(document).ready(function() {

        $('#btn-efectivas').on('click', function() {
            // var fecha = $('#fecha').val();
            // var url = '/reporte/efectivo/' + fecha;
            // window.open(url);
            var fecha = $('#fecha').val();
            var centro_atencion = $('#centro_atencion').val();

            $("#time-icon").removeClass("hidden");
            $("#download-icon").addClass("hidden");

            $.ajax({
                type: "GET",
                url: '/api/generarInformeEfectivoPdf?fecha=' + fecha + '&centro_atencion=' + centro_atencion,
                success: function(data) {
                    if(data.generated){
                        // $("#mensaje").removeClass('alert alert-danger');
                        // $("#mensaje").addClass('alert alert-success');
                        // $("#mensaje").html("Se ha Descargado Correctamente el Informe");

                        var objbuilder = '';
                        objbuilder += ('<object width="100%" height="100%" data="data:application/pdf;base64,');
                        objbuilder += (data.data);
                        objbuilder += ('" type="application/pdf" class="internal">');
                        objbuilder += ('<embed src="data:application/pdf;base64,');
                        objbuilder += (data.data);
                        objbuilder += ('" type="application/pdf"  />');
                        objbuilder += ('</object>');

                        var win = window.open("#","_blank");
                        win.document.write('<html><title>Reporte Efectivo</title><body style="margin-top: 0px; margin-left: 0px; margin-right: 0px; margin-bottom: 0px;">');
                        win.document.write(objbuilder);
                        win.document.write('</body></html>');
                        layer = jQuery(win.document);
                                        
                    }else{
                        $("#mensaje").removeClass('alert alert-success');
                        $("#mensaje").addClass('alert alert-danger');
                        $("#mensaje").html(data.data);
                    }

                    $("#time-icon").addClass("hidden");
                    $("#download-icon").removeClass("hidden");
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#btn-actualizar').on('click', function() {
            var fecha = $('#fecha').val();
            $.ajax({
                type: "GET",
                url: '/api/actualizaciones/' + fecha,
                success: function(data) {
                    console.log(data);
                    $("#mensaje").addClass('alert alert-success');
                    $("#mensaje").html(data.mensaje);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#btn-noefectivas').on('click', function() {
            var fecha = $('#fecha').val();
            var centro_atencion = $('#centro_atencion').val();

            $("#time-icon").removeClass("hidden");
            $("#download-icon").addClass("hidden");

            $.ajax({
                type: "GET",
                url: '/api/generarInformeTarjetasPdf?fecha=' + fecha + '&centro_atencion=' + centro_atencion,
                success: function(data) {
                    if(data.generated){
                        // $("#mensaje").removeClass('alert alert-danger');
                        // $("#mensaje").addClass('alert alert-success');
                        // $("#mensaje").html("Se ha Descargado Correctamente el Informe");

                        //Descargar
                        // var downloadLink = document.createElement("a");
                        // var fileName = data.nombre;

                        // downloadLink.href = data.data;
                        // downloadLink.download = fileName;
                        // downloadLink.click();

                        var objbuilder = '';
                        objbuilder += ('<object width="100%" height="100%" data="data:application/pdf;base64,');
                        objbuilder += (data.data);
                        objbuilder += ('" type="application/pdf" class="internal">');
                        objbuilder += ('<embed src="data:application/pdf;base64,');
                        objbuilder += (data.data);
                        objbuilder += ('" type="application/pdf"  />');
                        objbuilder += ('</object>');

                        var win = window.open("#","_blank");
                        var title = "Reporte Tarjetas";
                        win.document.write('<html><title>'+ title +'</title><body style="margin-top: 0px; margin-left: 0px; margin-right: 0px; margin-bottom: 0px;">');
                        win.document.write(objbuilder);
                        win.document.write('</body></html>');
                        layer = jQuery(win.document);
                                                

                       
                    }else{
                        $("#mensaje").removeClass('alert alert-success');
                        $("#mensaje").addClass('alert alert-danger');
                        $("#mensaje").html(data.data);
                    }

                    $("#time-icon").addClass("hidden");
                    $("#download-icon").removeClass("hidden");
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#btn-cafeteriacentro').on('click', function() {
            var fecha = $('#fecha').val();
            var url = '/reporte/cafeteriacentro/' + fecha;
            window.open(url);
        });

        $('#btn-interfaceInventario').on('click', function() {
            var fecha = $('#fecha').val();
            var username = $('#username').val();
            $("#time-icon").removeClass("hidden");
            $("#download-icon").addClass("hidden");
            limpiarTablesTbody();
            ocultarTablesTheads();
            $.ajax({
                type: "GET",
                url: 'https://interfacealoha.comfamiliar.com/api/inventario/generar_interfaz/' + fecha +'/' + username ,
                success: function(data) {
                    var mensaje = data.mensaje;
                    var contentTableValicacionesExistencias = '';
                    var contentTableValicacionesArticulo = '';
                    var contentTableValicacionesUnidadMedidaMovimiento = '';
                    var contentTableValicacionesCategoria = '';
                    var contentTableValidacionesBodegas = '';
                    var contentTableValidacionesFechaContable = '';
                    $("#mensaje").addClass('alert alert-danger');

                    if(!data.isValid){
                       if(data.detalleError == 'interfaces'){
                            $.each(data.interfaces, function(key, interface) {
                                contentTableValicacionesExistencias += tablaArrayValidacionesExistencias(interface.validaciones,  interface.bodega);
                                contentTableValicacionesArticulo += tablaArrayValidacionesArticulo(interface.validaciones,  interface.bodega);
                                contentTableValicacionesUnidadMedidaMovimiento += tablaArrayValidacionesUnidadMedidaMovimiento(interface.validaciones,  interface.bodega);
                                contentTableValicacionesCategoria += tablaArrayValidacionesCategoria(interface.validaciones,  interface.bodega);
                                contentTableValidacionesBodegas += tablaArrayValidacionesBodegas(interface.validaciones,  interface.bodega);
                                contentTableValidacionesFechaContable += tablaArrayValidacionesFechaContable(interface.validaciones,  interface.bodega);
                            });

                            imprimirTableValidacionesExistencias(contentTableValicacionesExistencias);
                            imprimirTableValidacionesArticulo(contentTableValicacionesArticulo);
                            imprimirTableValidacionesUnidadMedidaMovimiento(contentTableValicacionesUnidadMedidaMovimiento);
                            imprimirTableValidacionesCategoria(contentTableValicacionesCategoria);
                            imprimirTableValidacionesBodegas(contentTableValidacionesBodegas);
                            imprimirTableValidacionesFechaContable(contentTableValidacionesFechaContable);
                       }

                        if(data.detalleError == 'validacionInterfazPendiente'){
                            mensaje = data.validacionInterfazPendiente.mensaje;
                        }

                        if(data.detalleError == 'validacionUnidadesMedida'){
                            tablaArrayValidacionUnidadesMedida(data.validacionUnidadesMedida.detalle);
                        }

                        if(data.detalleError == 'validacionRegistrosChaplin'){
                            mensaje = data.validacionRegistrosChaplin.mensaje;
                        }

                        if(data.detalleError == 'validacionEDI'){
                            mensaje = data.validacionEDI.mensaje;
                        }
                    }else{
                        $("#mensaje").removeClass("alert alert-danger");
                        $("#mensaje").addClass('alert alert-success');
                    }

                    $("#mensaje").html(mensaje);

                    $("#time-icon").addClass("hidden");
                    $("#download-icon").removeClass("hidden");
                },
                error: function(data) {
                    console.log('error');
                }
            });
        });
        $('#btn-interfaceProductos').on('click', function() {
            var username = $('#username').val();
            
            $("#time-icon").removeClass("hidden");
            $("#download-icon").addClass("hidden");

            $.ajax({
                type: "GET",
                url: 'https://interfacealoha.comfamiliar.com/api/productos/sincronizar/' + username ,
                success: function(data) {
                    var mensaje = "No se ha actualizado ningún Producto";
                    var content = "<table class='table table-bordered'>";
                    content += '<tr><td><h5>Producto</h5></td><td><h5>Respuesta</h5></td></tr>';
                        $.each(data, function(key, registro) {
                            // console.log(key);
                            if(registro.validaciones){
                                mensaje = "Se han actualizado los siguientes productos";
                                content += '<tr><td>' + key + '</td>';
                                content += '<td>' + registro.respuesta + '</td></tr>';
                            }
                        });

                    content += "</table>";
                    $("#divtabledetalle").empty();
                    $('#divtabledetalle').append(content);
                    $("#mensaje").addClass('alert alert-success');
                    $("#mensaje").html(mensaje);

                    $("#time-icon").addClass("hidden");
                    $("#download-icon").removeClass("hidden");
                   
                },
                error: function(data) {
                    console.log('error');
                }
            });
        });
    });
}
)();

function tablaArrayValidacionesExistencias(array,bodega){
    var contenido;
    $.each(array, function(key, linea) {
        if(linea.existencias){
            contenido += '<tr><td>' + bodega + '</td>';
            contenido += '<td>' + linea.existencias.mensaje + '</td>';
            contenido += '<td>' + linea.existencias.detalle.cantidadDescargada + '</td>';
            contenido += '<td>' + linea.existencias.detalle.existenciasJDE + '</td></tr>';
        }
    });

    return contenido;
   
}

function tablaArrayValidacionesArticulo(array,bodega){
    var contenido = '';
    $.each(array, function(key, linea) {
        if(linea.articulo){
            contenido += '<tr><td>' + bodega + '</td>';
            contenido += '<td>' + linea.articulo.mensaje + '</td></tr>';
        }
    });
    return contenido;
}

function tablaArrayValidacionesUnidadMedidaMovimiento(array,bodega){
    var contenido = '';
    $.each(array, function(key, linea) {
        if(linea.unidadMedida){
            contenido += '<tr><td>' + bodega + '</td>';
            contenido += '<td>' + linea.unidadMedida.mensaje + '</td>';
            contenido += '<td>' + linea.unidadMedida.detalle.unidadMedidaProducto + '</td>';
            contenido += '<td>' + linea.unidadMedida.detalle.unidadMedidaMovimiento + '</td></tr>';
        }
    });
    return contenido;
}

function tablaArrayValidacionesCategoria(array,bodega){
    var contenido ='';
    $.each(array, function(key, linea) {
        if(linea.categoria){
            contenido += '<tr><td>' + bodega + '</td>';
            contenido += '<td>' + linea.categoria.mensaje + '</td>';
            contenido += '<td>' + linea.categoria.detalle.categoriaJDE + '</td>';
            contenido += '<td>' + linea.categoria.detalle.categoriaProducto + '</td></tr>';
        }
    });
    
    return contenido;

}

function tablaArrayValidacionesBodegas(array,bodega){
    var contenido='';
    $.each(array, function(key, linea) {
        if(linea.bodegas){
            contenido += '<tr><td>' + bodega + '</td>';
            contenido += '<td>' + linea.bodegas.mensaje + '</td></tr>';
        }
    });
    
    return contenido;
}

function tablaArrayValidacionesFechaContable(array,bodega){
    var contenido='';
    $.each(array, function(key, linea) {
        if(linea.fechaContable){
            contenido += '<tr><td>' + bodega + '</td>';
            contenido += '<td>' + linea.fechaContable.mensaje + '</td>';
            contenido += '<td>' + linea.fechaContable.detalle.periodoActivo + '</td>';
            contenido += '<td>' + linea.fechaContable.detalle.fechaMovimiento + '</td></tr>';
        }
    });
  
   return contenido;
}

function tablaArrayValidacionUnidadesMedida(array){
    var contenido ='';
    $.each(array, function(key, formula) {
        $('#validacionUnidadesMedida').removeClass('oculto');
            $.each(formula, function(llave, registro) {
                contenido += '<tr><td>' + key + '</td>';
                contenido += '<td>' + registro.IdKardex + '</td>';
                contenido += '<td>' + registro.IdProducto + '</td>';
                contenido += '<td>' + registro.IDFormula + '</td>';
                contenido += '<td>' + registro.IdUndMed + '</td>';
                contenido += '<td>' + registro.IdUndMedOrigen + '</td></tr>';
            });
    });
 
    $('.validacionUnidadesMedida').find('tbody').append(contenido);
}

function limpiarTablesTbody(){
     $('#mensaje').empty();
     $('#mensaje').removeClass('alert alert-danger');
     $('.existencias').find('tbody').empty();
     $('.articulo').find('tbody').empty();
     $('.unidadMedida').find('tbody').empty();
     $('.categoria').find('tbody').empty();
     $('.bodegas').find('tbody').empty();
     $('.fechaContable').find('tbody').empty();
     $('.validacionUnidadesMedida').find('tbody').empty();
}

function ocultarTablesTheads(){
    $('#existencias').addClass('oculto');
    $('#articulo').addClass('oculto');
    $('#unidadMedida').addClass('oculto');
    $('#categoria').addClass('oculto');
    $('#bodegas').addClass('oculto');
    $('#fechaContable').addClass('oculto');
    $('#validacionUnidadesMedida').addClass('oculto');
}

function imprimirTableValidacionesExistencias(content){
    if(content != ''){
        $('#existencias').removeClass('oculto');
        $('.existencias').find('tbody').append(content);
    }
}

function imprimirTableValidacionesArticulo(content){
    if(content != ''){
        $('#articulo').removeClass('oculto');
        $('.articulo').find('tbody').append(content);
    }
}

function imprimirTableValidacionesUnidadMedidaMovimiento(content){
    if(content != ''){
        $('#unidadMedida').removeClass('oculto');
        $('.unidadMedida').find('tbody').append(content);
    }
}

function imprimirTableValidacionesCategoria(content){
    if(content != ''){
        $('#categoria').removeClass('oculto');
        $('.categoria').find('tbody').append(content);
    }
}

function imprimirTableValidacionesBodegas(content){
    if(content != ''){
        $('#bodegas').removeClass('oculto');
        $('.bodegas').find('tbody').append(content);
    }
}

function imprimirTableValidacionesFechaContable(content){
    if(content != ''){
        $('#fechaContable').removeClass('oculto');
        $('.fechaContable').find('tbody').append(content);
    }
}
