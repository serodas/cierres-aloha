(function(){$(document).ready(function(){$("#btn-efectivas").on("click",function(){var fecha=$("#fecha").val();$.ajax({type:"GET",url:"/api/actualizaciones/"+fecha,success:function(data){console.log(data);var url="/reporte/efectivo/"+fecha;window.open(url)},error:function(data){console.log("error")}})});$("#btn-noefectivas").on("click",function(){var fecha=$("#fecha").val();$.ajax({type:"GET",url:"/api/actualizaciones/"+fecha,success:function(data){console.log(data);var url="/reporte/noefectivas/"+fecha;window.open(url)},error:function(data){console.log("error")}})})})})();