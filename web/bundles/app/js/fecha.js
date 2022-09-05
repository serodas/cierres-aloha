 jQuery(document).ready(function() {
     var today = new Date();
     var date = today.getFullYear() + (((today.getMonth() + 1) < 10) ? '0' : '') + (today.getMonth() + 1) + ((today.getDate() < 10) ? '0' : '') + today.getDate();
     var dateInventario = today.getFullYear() + '-'+(((today.getMonth() + 1) < 10) ? '0' : '') + (today.getMonth() + 1) + '-' +((today.getDate() < 10) ? '0' : '') + today.getDate();
     $('.js-datepicker').val(date);
     $('.js-datepicker-inventario').val(dateInventario);

     $('.js-datepicker').datepicker({
         format: "yyyymmdd",
         todayHighlight: true,
         autoclose: true,
         language: "es"
     });

     $('.js-datepicker-inventario').datepicker({
         format: "yyyy-mm-dd",
         todayHighlight: true,
         autoclose: true,
         language: "es"
     });
 });