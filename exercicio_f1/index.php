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
            <div class="col-10 offset-1">
                <div id="grafico"></div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" onclick="iniciar()">Start</button>
            <button class="btn btn-primary" onclick="parar()">Stop</button>
        </div>
    </div>




    <script>
        let dados = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        let meuIntervalo = null;
        let el = document.querySelector("#grafico");
        let options = {
            chart: {
                type: 'area',
                animations: {
                    enabled: false
                }
            },
            series: [{
                name: 'Dados',
                data: dados
            }],
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['1','2','3','4','5','6','7','8','9','10']
            },
            yaxis: {
                min: 0,
                max: 100
            }
        };
        let chart = new ApexCharts(el, options);
        chart.render();

        // ------------------------------------
        function iniciar(){
            meuIntervalo = setInterval(minhaFuncao, 1000);
        }

        // ------------------------------------
        function parar(){
            clearInterval(meuIntervalo);
        }

        // ------------------------------------
        function minhaFuncao(){
            
            axios.get('http://localhost/exercicio_f1/ajax/script.php')
            .then(function(response){
                dados = response.data;
                chart.updateSeries(
                    [
                        {
                            data: response.data
                        }
                    ]
                );
            })
            .catch(function(error){
                console.log(error);
            })
        }
    </script>
</body>
</html>