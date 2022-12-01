<?php

include 'conexao/conexao2.php';

$sql = "SELECT * FROM producao where turno = 'C'";
$buscar = mysqli_query($mysqli,$sql);

#chart.js - Preparando valores#

$turno = '';
$quantidadepecas = '';
$pecasdefeito = '';
$tempoquebra = '' ;
$paradaprogramada= ''; 


while ($dados = mysqli_fetch_array($buscar)) {

	$turno = $turno . '"' . $dados['turno'] . '",';
	$pecasdefeito = $pecasdefeito . '"' . $dados['pecasdefeito'] . '",';
	$tempoquebra = $tempoquebra . '"' . $dados['tempoquebra'] . '",';
   $paradaprogramada = $paradaprogramada . '"' . $dados['paradaprogramada'] . '",';

	 $turno = trim($turno); #tira os espaços da variável
	 $pecasdefeito = trim($pecasdefeito);
	 $tempoquebra = trim($tempoquebra);
    $paradaprogramada = trim($paradaprogramada);
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

   <div class="container" style="background-color: #250352;margin-top: 20px;">
      <canvas style="padding:30px" id="Barra"></canvas>
   </div>

   <script type="text/javascript">
   var ctx = document.getElementById('Barra').getContext('2d');
   var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
         labels: [<?php echo $turno; ?>],
         datasets: [{
               label: 'Defeito',
               data: [<?php echo $pecasdefeito; ?>],
               backgroundColor: 'rgba(255,99,132,0.5)',
               borderColor: 'rgba(255,99,132)',
               borderWidth: 3
            },
            {
               label: 'Quebra',
               data: [<?php echo $tempoquebra; ?>],
               backgroundColor: 'rgba(0,255,255,0.5)',
               borderColor: 'rgba(0,255,255)',
               borderWidth: 3
            }, {
               label: 'Parada',
               data: [<?php echo $paradaprogramada; ?>],
               backgroundColor: 'rgb(255, 165, 0)',
               borderColor: 'rgb(255, 165, 0)',
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
                  labelString: 'Turno',
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
                  labelString: 'Produção',
                  fontColor: '#ffffff',
                  fontSize: 16,
                  beginAtZero: true
               },
               ticks: {
                  fontColor: "white",
                  fontSize: 20
               }
            }]
         }
      }
   });

   function adddata() {
      myLineChart.data.datasets[3].data[5] = 20;
      myLineChart.data.labels[5] = "Dezembro";
      myLineChart.update();
   }

   function removedata() {
      myLineChart.data.labels.splice(5);
      myLineChart.data.datasets[3].data.splice(5);
      myLineChart.update();
   }
   </script>
   <div class="container">
      <button class="btn btn-sm" style="background-color: rgba(0,255,255);" onclick="adddata()">Turno A</button>

      <button class="btn btn-sm" style="background-color: rgba(0,255,255);" onclick="removedata()">Remover TurnoA
      </button>

      <button class="btn btn-sm" style="background-color: rgba(255,99,132,0.5);" onclick="adddata2()">Turno B</button>

      <button class="btn btn-sm" style="background-color: rgba(255,99,132,0.5);" onclick="removedata2()">Remover Turbo
         B</button>

      <button class="btn btn-sm btn-success" onclick="adddata3()">Turno C</button>

      <button class="btn btn-sm btn-success" onclick="removedata3()">Remover
         Turno C</button>

   </div>
   <!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
</body>

</html>