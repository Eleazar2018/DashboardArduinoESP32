  <html>

  <head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
     </script>
     <script type="text/javascript">
     google.charts.load('current', {
        'packages': ['corechart']
     });

     google.charts.setOnLoadCallback(drawChart3);

     function drawChart3() {
        var data = google.visualization.arrayToDataTable([
           ['Dia', 'temperatura', 'umidade'],

           <?php

          include 'conexao/conexao.php';
          $sql = "SELECT * FROM lucros";
          $buscar = mysqli_query($conexao,$sql);

          while ($dados = mysqli_fetch_array($buscar)) {

            $data = $dados['data'];
            $temperatura = $dados['temperatura'];
            $umidade = $dados['umidade'];


            ?>


           [<?php echo $data ?>, <?php echo $temperatura ?>, <?php echo $umidade ?>],
           <?php } ?>
        ]);

        var options = {
           title: 'Temperatura e Umidade relativa',
           curveType: 'function',
           legend: {
              position: 'none'
           }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
     }
     </script>



     <script type="text/javascript">
     google.charts.load('current', {
        'packages': ['corechart']
     });


     google.charts.setOnLoadCallback(drawChart4);

     function drawChart4() {

        var data = google.visualization.arrayToDataTable([
           ['Data', 'Produção'],
           <?php

        include 'conexao/conexao.php';
        $sql = "SELECT * FROM vendas";
        $buscar = mysqli_query($conexao,$sql);

        while ($dados = mysqli_fetch_array($buscar)) {

          $dia = $dados['dia'];
          $producao = $dados['producao'];


          ?>

           ['<?php echo $dia ?>', <?php echo $producao ?>],
           <?php } ?>
        ]);

        var options = {
           title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);



     }
     </script>

     <style type="text/css">
     .sombra {
        -webkit-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
        -moz-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
        box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
     }
     </style>


  </head>

  <body>

     <div class="container-fluid" style="margin-top: 40px">
        <div class="row">
           <div class="col-md-8" style="width: 200px">
              <h4>Gráfico de Temperatura e Umidade relativa</h4>
              <div id="curve_chart" class="sombra"></div>
           </div>
        </div>
     </div>

  </body>

  </html>