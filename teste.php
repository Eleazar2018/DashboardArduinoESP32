<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Produção lançada</title>

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
               <div class="card-header">Total Peças produzidas</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php
							include 'conexao/conexao.php';
							$sql = "SELECT SUM(quantidadePecas) AS Media FROM resultado";
							$consulta = mysqli_query($conexao,$sql);
							$dados = mysqli_fetch_array($consulta);
							echo $dados ['Media'];                     
							?>
                     <span style="font-size: 10px"> / peças</span>
                  </h5>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">Peças defeituosas</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php
								include 'conexao/conexao.php';
								$sql = "SELECT FORMAT(AVG(pecasDefeito),2) AS media2 FROM resultado";
								$consulta = mysqli_query($conexao,$sql);
								$dados = mysqli_fetch_array($consulta);
								$valor = $dados['media2'];
								echo number_format($valor,0,'.','');
								?>
                     <span style="font-size: 10px"> / (Média)</span>
                  </h5>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">Disponibilidade linha</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php

									include 'conexao/conexao.php';
									$sql = "SELECT FORMAT(AVG(disponibilidade),2) AS Disp FROM resultado";
									$consulta = mysqli_query($conexao,$sql);
									$dados = mysqli_fetch_array($consulta);
									echo $dados['Disp'];
									?>
                     <span style="font-size: 10px"> %</span>
                  </h5>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4">
            <div class="card text-secondary mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">Eficiência da Linha</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php

							include 'conexao/conexao.php';
							$sql = "SELECT FORMAT(AVG(eficiencia),2) AS Media FROM resultado";
							$consulta = mysqli_query($conexao,$sql);
							$dados = mysqli_fetch_array($consulta);
							echo $dados ['Media'];                     
							?>
                     <span style="font-size: 10px"> / %</span>
                  </h5>

               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card text-light bg-dark mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">Índice de Qualidade</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php

								include 'conexao/conexao.php';
								$sql = "SELECT FORMAT(AVG(qualidade),2) AS media2 FROM resultado";
								$consulta = mysqli_query($conexao,$sql);
								$dados = mysqli_fetch_array($consulta);
								$valor = $dados['media2'];
								echo number_format($valor,0,'.','');
								?>
                     <span style="font-size: 10px"> / %</span>
                  </h5>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card text-warning bg-dark mb-3" style="max-width: 18rem;" id="sombra">
               <div class="card-header">oee</div>
               <div class="card-body">
                  <h5 class="card-title" style="text-align: center;font-size: 40px">
                     <?php
									include 'conexao/conexao.php';
									$sql = "SELECT FORMAT(AVG(oee),2) AS Disp FROM resultado";
									$consulta = mysqli_query($conexao,$sql);
									$dados = mysqli_fetch_array($consulta);
									echo $dados['Disp'];
									?>
                     <span style="font-size: 10px"> %</span>
                  </h5>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>