(function() {
    $(document).ready(function(){
        if( document.getElementById("chart-entradas-reservas") != null){
            var chartEntradasReservas = document.getElementById("chart-entradas-reservas").getContext("2d");
            var chartRestaurantesReservas = document.getElementById("chart-restaurantes-reservas").getContext("2d");
            var chartParqueaderoReservas = document.getElementById("chart-parqueadero-reservas").getContext("2d");
            // examine example_data.json for expected response data
            var json_url_entradas_reservas = "../api/entradasreservas";
            var json_url_restaurantes_reservas = "../api/restaurantesreservas";
            var json_url_parqueadero_reservas = "../api/parqueaderoreservas";
        
            // draw empty chart
            var myChartEntradasReservas = new Chart(chartEntradasReservas, {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: "Total",
                            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            data: [],
                        }
                    ]
                },
                options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Entradas Reservadas y Personas Ingresadas al Parque Consotá'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            })

                // draw empty chart
                var myChartRestaurantesReservas = new Chart(chartRestaurantesReservas, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [
                            {
                                label: "Total",
                                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                                data: [],
                            }
                        ]
                    },
                    options: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: 'Servicios de Restaurantes'
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                })

            // draw empty chart
            var myChartParqueaderoReservas = new Chart(chartParqueaderoReservas, {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: "Total",
                            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            data: [],
                        }
                    ]
                },
                options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Servicios de Parqueadero'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            })

            $("#btn-reservas").on("click", function(){
                var fecha = $('#fecha-reserva').val();
                var params = { "fecha" : fecha };
                ajaxChartReservas(myChartEntradasReservas, json_url_entradas_reservas,params);
                ajaxChartReservas(myChartRestaurantesReservas, json_url_restaurantes_reservas,params);
                ajaxChartReservas(myChartParqueaderoReservas, json_url_parqueadero_reservas,params);
                setInterval(function(){
                    ajaxChartReservas(myChartEntradasReservas, json_url_entradas_reservas,params);
                    ajaxChartReservas(myChartRestaurantesReservas, json_url_restaurantes_reservas,params);
                    ajaxChartReservas(myChartParqueaderoReservas, json_url_parqueadero_reservas,params);
                },180000)
            });
        }
    })
})();

function ajaxChartReservas(chart, url, data) {
    var data = data || {};
    $.getJSON(url, data).done(function(response) {
        chart.data.labels = response.labels;
        chart.data.datasets[0].data = response.data; 
        chart.update();
    });
}