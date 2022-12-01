<!DOCTYPE html>
<html>

<head>
   <title></title>
   <style type="text/css">
   #sombra {
      -webkit-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
      -moz-box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
      box-shadow: 6px 9px 7px 0px rgba(176, 176, 176, 0.75);
   }
   </style>
</head>

<body>


   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">Média Temperatura / dia</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php

							include 'conexao/conexao.php';
							$sql = "SELECT FORMAT(avg(temperatura),2) AS Media FROM clientes";
							$consulta = mysqli_query($conexao,$sql);
							$dados = mysqli_fetch_array($consulta);
							echo $dados ['Media'];                     
							?>
                     <span style="font-size: 10px"> / ºC</span>
                  </h5>

               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">Média Umidade / dia</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php

								include 'conexao/conexao.php';
								$sql = "SELECT FORMAT(AVG(umidade),2) AS media2 FROM clientes";
								$consulta = mysqli_query($conexao,$sql);
								$dados = mysqli_fetch_array($consulta);
								$valor = $dados['media2'];
								echo number_format($valor,2,'.','');

								?>

                     <span style="font-size: 10px"> / (Relativa)</span>
                  </h5>

               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">Temperatura máxima / dia</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php

									include 'conexao/conexao.php';
									$sql = "SELECT FORMAT(MAX(temperatura),2) AS TempMax FROM clientes";
									$consulta = mysqli_query($conexao,$sql);
									$dados = mysqli_fetch_array($consulta);
									echo $dados['TempMax'];
									?>
                     <span style="font-size: 10px"> / ºC</span>
                  </h5>

               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>