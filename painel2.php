<?php

include 'conexao/conexao.php';

$sql = "SELECT * FROM clientes";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$id_cliente = '';
$temperatura = '';
$umidade = '';


while ($dados = mysqli_fetch_array($buscar)) {
				
     $id_cliente = $id_cliente . '"' . $dados['id_cliente'] . '",';
	 $temperatura = $temperatura . '"' . $dados['temperatura'] . '",';
	 $umidade = $umidade . '"' . $dados['umidade'] . '",';

	 $id_cliente = trim($id_cliente); #tira os espaços da variável
	 $temperatura = trim($temperatura);
	 $umidade = trim($umidade);
	

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
   <h2 style="background-color: #fff;margin-top:20px;text-align:center">Gráfico Temperatura x Umidade</h2>
   <div class=" container" style="background-color: #F3F3F3; width: 900px; height: 500px">
      <canvas id="Linha"></canvas>
   </div>

   <script type="text/javascript">
   var ctx = document.getElementById('Linha').getContext('2d');
   var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
         labels: [<?php echo $id_cliente; ?>],
         datasets: [{
               label: 'Temperatura ambiente',
               data: [<?php echo $temperatura; ?>],
               backgroundColor: 'transparent',
               borderColor: 'rgba(255,99,132)',
               borderWidth: 3
            },
            {
               label: 'Umidade ambiente',
               data: [<?php echo $umidade; ?>],
               backgroundColor: 'transparent',
               borderColor: 'rgba(0,255,255)',
               borderWidth: 3

            }
         ]

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