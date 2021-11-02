<?php

// podemos colocar PHP AQUI...

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- libs -->
    <link rel="stylesheet" href="libs/bootstrap.min.css">
    <script src="libs/apexcharts.min.js"></script>
    <script src="libs/axios.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-6 offset-3">
                <div id="grafico"></div>
            </div>
        </div>
    </div>

    <script>
        
       

        // -----------------------
        function verTrimestre() {
            axios.get('http://localhost/apexchard/000phpmysql/ajax/script.php')
            .then(function(respuesta){
                console.log(respuesta)
                var titulo = [];
                var lenovo = [];
                var dell = [];
                var propios = [];
                var rentados = [];

        let colors = respuesta.data;
for (const color of colors){
    titulo.push(color[0]);
    lenovo.push(color[3]);
    dell.push(color[4]);
    propios.push(color[5]);
    rentados.push(color[6]);
}
var options = {
            series: [{
                name: 'LENOVO',
                data: lenovo
            }, {
                name: 'DELL',
                data: dell
            }, {
                name: 'PROPIOS',
                data: propios
            }, {
                name: 'RENTADOS',
                data: rentados
            }],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
                toolbar: {
                    show: true
                },
                zoom: {
                    enabled: true
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            plotOptions: {
                bar: {
                    horizontal: false,
                    borderRadius: 10
                },
            },
            xaxis: {
                categories: titulo,
            },
            legend: {
                position: 'right',
                offsetY: 40
            },
            fill: {
                opacity: 1
            }
        };

        var chart = new ApexCharts(document.querySelector("#grafico"), options);
        chart.render();
        

            })
            .catch(function(error){
                console.log('ERRO: ' . error);
            });
        }

        // ------------------------
        verTrimestre();
    </script>

</body>

</html>