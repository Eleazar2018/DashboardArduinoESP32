<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">
   <script src="https://kit.fontawesome.com/8786c39b09.js" crossorigin="anonymous"></script>
   <title>AEJR - TECK</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </style>

   <style type="text/css">
   @media only screen and (max-width: 600px) {
      body {
         width: 350px;
         text-align: center;
      }
   }
   </style>
</head>

<body>
   <nav class="navbar navbar-expand-lg d-none d-sm-block" style="background-color: #250352; color: #fff">
      <a class="navbar-brand" href="#" style="text-decoration: none;color: #fff"><img
            src="https://user-images.githubusercontent.com/1256531/43319337-f5ea7a92-9169-11e8-9622-a3c7f0a0e5c4.png"
            width="50px" height="50px"> Painel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container" style="margin-top: -50px">
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false" style="text-decoration: none;color: #fff">
                     AEJR - TECK
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Relatório</a>
                     <a class="dropdown-item" href="#">Treinamentos</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Membros da equipe</a>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <div class="container-fluid">
      <div class="row">
         <nav class="col-md-2 d-none d-md-block sidebar" style='background-color:#fff;border-right: 1px solid #f3f3f3'>
            <div class="sidebar-sticky">

               <ul class="nav flex-column" style="padding-top: 20px">

                  <li class="nav-item">
                     <a class="nav-link active" href="?pagina" style="color:#000;text-decoration: none">

                        <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard Geral<span class="sr-only">(atual)</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="?pagina=lucro" style="color:#000;text-decoration: none">
                        <i class="fas fa-box"></i>&nbsp;Lucros 2021-2022
                     </a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="?pagina=projecao" style="color:#000;text-decoration: none">
                        <i class="fas fa-box"></i>&nbsp;Projeção Lucro 2022
                     </a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="?pagina=variaveis" style="color:#000;text-decoration: none">

                        <i class="far fa-user"></i>&nbsp;Lançar Temperatura & umidade
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="?pagina=producao" style="color:#000;text-decoration: none">

                        <i class="fas fa-dollar-sign"></i>&nbsp;Lançar Produção
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="?pagina=kpi" style="color:#000;text-decoration: none">

                        <i class="fas fa-dollar-sign"></i>&nbsp;KPI (Indicadores)
                     </a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="?pagina=resultados" style="color:#000;text-decoration: none">

                        <i class="fas fa-dollar-sign"></i>&nbsp;Resultado Produção
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- conteudo -->
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div
               class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1 class="h2">Dashboard</h1>
               <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">

                  </div>

               </div>
            </div>
            <?php

        if(isset($_GET['pagina'])) {

          switch ($_GET['pagina']) {
            case 'lucro':
            echo '<h2>Lucro</h2>';
            include 'graficos/graficoArea.php';
            break;

            case 'projecao':
            echo '<h2>Projeção de Lucro 2021 - 2022</h2>';
            include 'graficos/primeiroGrafico.php';
            break;

            case 'variaveis':
            include 'cadastro_variaveis.php';
            break;

            case 'producao':
            include 'cadastro_producao.php';
            break;

            case 'kpi':
            include 'teste.php';
            break;
            
            case 'resultados':
            include 'graficos/graficoArea2.php';
            break;
            
            default:
            include 'painel.php'; include 'painel2.php'; 

            break;
          }
        }
        ?>
         </main>
      </div>
   </div>
   <div class="d-block d-sm-none">
      <nav class="navbar fixed-bottom navbar-light bg-light">
         <a class="navbar-brand" href="#">AEJR - TECK</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
               <a class="nav-link active" href="?pagina">

                  Dashboard <span class="sr-only">(atual)</span>
               </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="?pagina=pedidos" style="text-decoration: none">
                     Pedidos
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="?pagina=clientes">
                     Cadastrar Clientes
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="?pagina=vendas">
                     Cadastrar Vendas
                  </a>
               </li>

            </ul>
         </div>
      </nav>
   </div>

   <!-- Principal JavaScript do Bootstrap
      ================================================== -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
   </script>


   <script type="text/javascript">
   $(window).resize(function() {
      drawChart();
      drawChart2();
      drawChart3();
      drawChart4());


   });
   </script>

</body>

</html>