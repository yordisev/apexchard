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
            axios.get('http://localhost/apexchard/001phpmysql/ajax/script.php')
            .then(function(respuesta){
                var titulo = [];
                var cantidad = [];

        let colors = respuesta.data;
for (const color of colors){
    titulo.push(color[0]);
    cantidad.push(color[2]);
}
        let el = document.querySelector("#grafico");
        let options = {
            chart: {
                type: 'bar'
            },
            series: [
                {
                    name: 'PC',
                    data: cantidad
                }
            ],
            xaxis: {
                categories: titulo,
            },
            yaxis: {
                min: 0,
                max: 330
            }
        };
        let chart = new ApexCharts(el, options);
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