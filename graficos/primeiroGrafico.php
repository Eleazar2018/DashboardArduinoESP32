<?php

include 'conexao/conexao.php';

$sql = "SELECT * FROM lucros";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$mes = '';
$ano_2021 = '';
$ano_2022 = '';


while ($dados = mysqli_fetch_array($buscar)) {

	$mes = $mes . '"' . $dados['mes'] . '",';
	$ano_2021 = $ano_2021 . '"' . $dados['ano_2021'] . '",';
	$ano_2022 = $ano_2022 . '"' . $dados['ano_2022'] . '",';

	 $mes = trim($mes); #tira os espaços da variável
	 $ano_2021 = trim($ano_2021);
	 $ano_2022 = trim($ano_2022);
	}

	?>
<!DOCTYPE html>
<html>

<head>
   <title>Gráfico Linha</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- CDN do Chart.js -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js">
   </script>
</head>

<body>
   <!-- https://www.colourlovers.com/ -->

   <div class="container" style="background-color: #250352;margin-top: 20px; width: 1200px">
      <canvas style="padding:30px" id="Barra"></canvas>

   </div>
   <br>
   <div class="container">
      <button class="btn btn-sm" style="background-color: rgba(0,255,255);" onclick="adddata()">Data 2022</button>

      <button class="btn btn-sm" style="background-color: rgba(0,255,255);" onclick="removedata()">Remover data
         2022</button>

      <button class="btn btn-sm" style="background-color: rgba(255,99,132,0.5);" onclick="adddata2()">Data 2021</button>

      <button class="btn btn-sm" style="background-color: rgba(255,99,132,0.5);" onclick="removedata2()">Remover Data
         2021</button>

      <button class="btn btn-sm btn-success" onclick="adddata3()">Meta
         2022</button>

      <button class="btn btn-sm btn-success" onclick="removedata3()">Remover
         Meta 2022</button>

      <button class="btn btn-sm btn-warning" onclick="adddata4()">Meta
         2021</button>

      <button class="btn btn-sm btn-warning" onclick="removedata4()">Remover
         Meta 2021</button>
   </div>


   <script type="text/javascript">
   var ctx = document.getElementById('Barra').getContext('2d');
   var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
         labels: [<?php echo $mes; ?>],
         datasets: [{
               label: 'Meta 2021',
               data: [120, 300, 99, 155.70, 547.52],
               // backgroundColor: 'rgba(255,255,255,0.3)',
               borderColor: 'rgba(255,255,255,0.3)',
               borderWidth: 4,
               type: 'line'
            },
            {
               label: 'Meta 2022',
               data: [255, 160, 120, 69.45, 237.67],
               // backgroundColor: 'rgba(255,255,0,0.3)',
               borderColor: 'rgba(255,255,0,0.3)',
               borderWidth: 4,
               type: 'line'
            },
            {
               label: '2021',
               data: [<?php echo $ano_2021; ?>],
               backgroundColor: 'rgba(255,99,132,0.5)',
               borderColor: 'rgba(255,99,132)',
               borderWidth: 3


            },
            {
               label: '2022',
               data: [<?php echo $ano_2022; ?>],
               backgroundColor: 'rgba(0,255,255,0.5)',
               borderColor: 'rgba(0,255,255)',
               borderWidth: 3
            }
         ]
      },
      options: {
         legend: {
            labels: {
               fontColor: "white",
               fontSize: 18
            }
         },
         scales: {
            xAxes: [{
               display: true,
               scaleLabel: {
                  display: true,
                  labelString: 'Meses',
                  fontColor: '#ffffff',
                  fontSize: 16

               },
               ticks: {
                  fontColor: "white",
                  fontSize: 20

               }
            }],
            yAxes: [{
               display: true,
               scaleLabel: {
                  display: true,
                  labelString: 'Valores',
                  fontColor: '#ffffff',
                  fontSize: 16
               },
               ticks: {
                  fontColor: "white",
                  fontSize: 20
               }
            }]
         }
      }
   });
   //Barra 2019 
   function adddata() {
      myLineChart.data.datasets[3].data[5] = 622;
      myLineChart.data.labels[5] = "Dezembro";
      myLineChart.update();
   }

   function removedata() {
      myLineChart.data.labels.splice(5);
      myLineChart.data.datasets[3].data.splice(5);
      myLineChart.update();
   }
   //Barra 2018
   function adddata2() {
      myLineChart.data.datasets[2].data[5] = 250;
      myLineChart.data.labels[5] = "Dezembro";
      myLineChart.update();
   }

   function removedata2() {
      myLineChart.data.labels.splice(5);
      myLineChart.data.datasets[2].data.splice(5);
      myLineChart.update();
   }
   //Meta 2019
   function adddata3() {
      myLineChart.data.datasets[1].data[5] = 420;
      myLineChart.data.labels[5] = "Dezembro";
      myLineChart.update();
   }

   function removedata3() {
      myLineChart.data.labels.splice(5);
      myLineChart.data.datasets[1].data.splice(5);
      myLineChart.update();
   }

   //Meta 2018
   function adddata4() {
      myLineChart.data.datasets[0].data[5] = 250;
      myLineChart.data.labels[5] = "Dezembro";
      myLineChart.update();
   }

   function removedata4() {
      myLineChart.data.labels.splice(5);
      myLineChart.data.datasets[0].data.splice(5);
      myLineChart.update();
   }
   </script>
   <!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
</body>

</html>