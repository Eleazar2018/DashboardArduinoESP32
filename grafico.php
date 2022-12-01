<?php

include 'conexao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <BR></BR>
   <CENTER>
      <button id="button" onclick="location.href='index.php'"></bu>

         <title>INDICADORES SIMPLIFICADOS</title>
</head>

<body>
   <br>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
   google.charts.load("current", {
      packages: ['corechart']
   });
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ["DIA", "Peças Boa", "Peças Ruim", {
            role: 'style'
         }],

         <?php
        $sql = "SELECT * FROM producao";
        $busca = mysqli_query($conn,$sql);

        while ($producao = mysqli_fetch_array($busca)){
            $DATAPROD = $producao['Data_producao'];
            $DATANOVA=explode('-',$DATAPROD);
            $ANO=$DATANOVA[0];
            $MES=$DATANOVA[1];
            $DIA=$DATANOVA[2];
            $PEÇASBOA = $producao['Pecas_boa'];
            $PEÇASRUIM = $producao['Pecas_ruim'];
            
        ?>["<?php echo $DIA?>", <?php echo $PEÇASBOA?>, <?php echo $PEÇASRUIM?>, "#b87333"],
         <?php } ?>

      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
         {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "style"
         },
         2
      ]);

      var options = {
         width: 800,
         height: 200,
         bar: {
            groupWidth: "80%"
         },
         legend: {
            position: "none"
         },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
   }
   </script>

   <script type="text/javascript">
   google.charts.load('current', {
      'packages': ['corechart']
   });
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['DIA', 'OEE', {
            role: "annotation"
         }],

         <?php
        $sql = "SELECT * FROM producao";
        $busca = mysqli_query($conn,$sql);

        while ($producao = mysqli_fetch_array($busca)){
            $DATAPROD = $producao['Data_producao'];
            $DATANOVA=explode('-',$DATAPROD);
            $ANO=$DATANOVA[0];
            $MES=$DATANOVA[1];
            $DIA=$DATANOVA[2];
            $OEE = $producao['OEE'];
          
            
        ?>["<?php echo $DIA?>", <?php echo $OEE?>, <?php echo number_format($OEE,2)?>],
         <?php } ?>
      ]);

      var options = {
         colors: ['red'],
         curveType: 'function',
         legend: {
            position: 'none'
         }
      };

      var chart = new google.visualization.LineChart(document.getElementById('Linha_OEE'));

      chart.draw(data, options);
   }
   </script>

   <script type="text/javascript">
   google.charts.load('current', {
      'packages': ['corechart']
   });
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['DIA', 'OEE', {
            role: "annotation"
         }],

         <?php
        $sql = "SELECT * FROM producao";
        $busca = mysqli_query($conn,$sql);

        while ($producao = mysqli_fetch_array($busca)){
            $DATAPROD = $producao['Data_producao'];
            $DATANOVA=explode('-',$DATAPROD);
            $ANO=$DATANOVA[0];
            $MES=$DATANOVA[1];
            $DIA=$DATANOVA[2];
            $QUALIDADE = $producao['QUALIDADE'];
          
        ?>["<?php echo $DIA?>", <?php echo $QUALIDADE?>, <?php echo number_format($QUALIDADE,2,)?>],
         <?php } ?>
      ]);

      var options = {

         colors: ['orange'],
         curveType: 'function',
         legend: {
            position: 'none'
         }

      };

      var chart = new google.visualization.LineChart(document.getElementById('Linha_qualidade'));

      chart.draw(data, options);
   }
   </script>

   <script type="text/javascript">
   google.charts.load('current', {
      'packages': ['corechart']
   });
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['DIA', 'OEE', {
            role: "annotation"
         }],

         <?php
        $sql = "SELECT * FROM producao";
        $busca = mysqli_query($conn,$sql);

        while ($producao = mysqli_fetch_array($busca)){
            $DATAPROD = $producao['Data_producao'];
            $DATANOVA=explode('-',$DATAPROD);
            $ANO=$DATANOVA[0];
            $MES=$DATANOVA[1];
            $DIA=$DATANOVA[2];
            $EFICIENCIA = $producao['EFICIENCIA'];
          
        ?>["<?php echo $DIA?>", <?php echo $EFICIENCIA?>, <?php echo number_format($EFICIENCIA,2,)?>],
         <?php } ?>
      ]);

      var options = {
         colors: ['green'],
         curveType: 'function',
         legend: {
            position: 'none'
         }
      };

      var chart = new google.visualization.LineChart(document.getElementById('Linha_eficiencia'));

      chart.draw(data, options);
   }
   </script>

   <script type="text/javascript">
   google.charts.load('current', {
      'packages': ['corechart']
   });
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['DIA', 'OEE', {
            role: "annotation"
         }],

         <?php
        $sql = "SELECT * FROM producao";
        $busca = mysqli_query($conn,$sql);

        while ($producao = mysqli_fetch_array($busca)){
            $DATAPROD = $producao['Data_producao'];
            $DATANOVA=explode('-',$DATAPROD);
            $ANO=$DATANOVA[0];
            $MES=$DATANOVA[1];
            $DIA=$DATANOVA[2];
            $DISPONIBILIDADE = $producao['DISPONIBILIDADE'];
          
        ?>["<?php echo $DIA?>", <?php echo $DISPONIBILIDADE?>, <?php echo number_format($DISPONIBILIDADE,2,)?>],
         <?php } ?>
      ]);

      var options = {
         colors: ['violet'],
         curveType: 'function',
         legend: {
            position: 'none'
         }
      };

      var chart = new google.visualization.LineChart(document.getElementById('Linha_disponibilidade'));

      chart.draw(data, options);
   }
   </script>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <h5>PEÇAS BOAS x PEÇAS NÂO CONFORME</h5>
            <div id="columnchart_values" style="width: 800px; height: 200px;"></div>
         </div>
      </div>
   </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <h5>INDICADOR OEE DIARIO</h5>
            <div id="Linha_OEE" style="width: 800px; height: 150px"></div>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <h5>INDICADOR QUALIDADE DIARIO</h5>
            <div id="Linha_qualidade" style="width: 800px; height: 150px"></div>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <h5>INDICADOR EFICIENCIA DIARIO</h5>
            <div id="Linha_eficiencia" style="width: 800px; height: 150px"></div>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <h5>INDICADOR DISPONIBILIDADE DIARIO</h5>
            <div id="Linha_disponibilidade" style="width: 800px; height: 150px"></div>
         </div>
      </div>
   </div>
</body>
</CENTER>

</html>