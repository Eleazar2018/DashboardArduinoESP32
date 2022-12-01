<?php

include 'conexao/conexao.php';

$sql = "SELECT * FROM producao where turno = 'B'";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$turno = '';
//$quantidadepecas = '';
$pecasDefeito = '';
$tempoQuebra = '' ;
$paradaProgramada= ''; 


while ($dados = mysqli_fetch_array($buscar)) {

	$turno = $turno . '"' . $dados['turno'] . '",';
	$pecasDefeito = $pecasDefeito . '"' . $dados['pecasDefeito'] . '",';
	$tempoQuebra = $tempoQuebra . '"' . $dados['tempoQuebra'] . '",';
   $paradaProgramada = $paradaProgramada . '"' . $dados['paradaProgramada'] . '",';

	 $turno = trim($turno); #tira os espaços da variável
	 $pecasDefeito = trim($pecasDefeito);
	 $tempoQuebra = trim($tempoQuebra);
    $paradaProgramada = trim($paradaProgramada);
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
               label: 'Defeito Turno A',
               data: [<?php echo $pecasDefeito; ?>],
               backgroundColor: 'rgba(255,99,132,0.5)',
               borderColor: 'rgba(255,99,132)',
               borderWidth: 3
            },
            {
               label: 'Quebra',
               data: [<?php echo $tempoQuebra; ?>],
               backgroundColor: 'rgba(0,255,255,0.5)',
               borderColor: 'rgba(0,255,255)',
               borderWidth: 3
            }, {
               label: 'Parada',
               data: [<?php echo $paradaProgramada; ?>],
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
                  labelString: 'Quantidade',
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