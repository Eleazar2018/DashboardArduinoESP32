<!DOCTYPE html>
<html>

<head>
   <title>Cadastro de Produção</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

   <div class="container" style="width: 600px;margin-top: 20px;">
      <div style=" text-align:right">
         <a href="dashboard.php?pagina" role="button" class="btn btn-primary btn-sm">Relatórios</a>
         <a href="dashboard.php?pagina" role="button" class="btn btn-danger btn-sm">Voltar</a>
      </div>

      <h2>Lançamento da Produção</h2>
      <form action="teste2.php" method="post">
         <div class="form-group">
            <label>Horas trabalhadas</label>
            <input type="integer" name="horasTrabalhadas" class="form-control" autocomplete="off"
               name="horasTrabalhadas">
         </div>
         <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nomeFuncionario" class="form-control" name="nomeFuncionario">
         </div>

         <div class="form-group">
            <label>Turno</label>
            <input type="text" name="turno" class="form-control" name="turno">
         </div>

         <div class="form-group">
            <label>Código da peça</label>
            <input type="integer" name="codigoPecas" class="form-control" name="codigoPecas">
         </div>

         <div class="form-group">
            <label>Quantidade de Peças produzidas</label>
            <input type="integer" name="quantidadePecas" class="form-control" name="quantidadePecas">
         </div>

         <div class="form-group">
            <label>Quantidade de Peças defeituosas</label>
            <input type="integer" name="pecasDefeito" class="form-control" name="pecasDefeito">
         </div>

         <div class="form-group">
            <label>Parada por quebra</label>
            <input type="integer" name="tempoQuebra" class="form-control" name="tempoQuebra">
         </div>

         <div class="form-group">
            <label>Parada programada</label>
            <input type="integer" name="paradaProgramada" class="form-control" name="paradaProgramada">
         </div>

         <div style="text-align: right">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
         </div>
      </form>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
   </script>
</body>

</html>