<?php

include 'conexao/conexao.php';

$sql = "SELECT * FROM resultado";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$id = '';
$quantidadePecas = '';
//$turno = '';


while ($dados = mysqli_fetch_array($buscar)) {
				
     $id = $id . '"' . $dados['id'] . '",';
	 $quantidadePecas = $quantidadePecas . '"' . $dados['quantidadePecas'] . '",';
	 //$turno = $turno . '"' . $dados['turno'] . '",';

	 $id = trim($id); #tira os espaços da variável
	 $quantidadePecas = trim($quantidadePecas);
	 //$turno = trim($turno);
	

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
   <h2 style="background-color: #fff;margin-top:20px;text-align:center">Produção por ID funcionário</h2>
   <div class=" container" style="background-color: #F3F3F3; width: 900px; height: 500px">
      <canvas id="Linha"></canvas>
   </div>

   <script type="text/javascript">
   var ctx = document.getElementById('Linha').getContext('2d');
   var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
         labels: [<?php echo $id; ?>],
         datasets: [{
            label: 'Quantidade Peças',
            data: [<?php echo $quantidadePecas; ?>],
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,99,132)',
            borderWidth: 3
         }]

      },
      options: {
         scales: {
            scales: {
               yAxes: [{
                  beginAtZero: false
               }],
               xAxes: [{
                  autoskip: true,
                  maxTicketsLimit: 20
               }]
            }
         },
         tooltips: {
            mode: 'index'
         },
         legend: {
            display: true,
            position: 'top',
            labels: {
               fontColor: 'rgb(0,0,0)',
               fontSize: 16
            }
         }
      }

   });
   </script>

   <style type="text/css">
   .sombra {
      -webkit-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
      -moz-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
      box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
   }
   </style>


</body>

</html>