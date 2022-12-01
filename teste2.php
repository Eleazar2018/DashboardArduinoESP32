<?php
include 'conexao/conexao.php';
//$DATAPROD=date('Y-m-d');
 $horasTrabalhadas = $_POST['horasTrabalhadas'];
 $nome = $_POST['nomeFuncionario'];
 $turno= $_POST['turno'];
 $codigoPecas= $_POST['codigoPecas'];
 $quantidadePecas =$_POST['quantidadePecas'];
 $pecasDefeito=$_POST['pecasDefeito'];
 $tempoQuebra=$_POST['tempoQuebra'];
 $paradaProgramada=$_POST['paradaProgramada'];

//CALCULO PARA ANALISE DO EQUIPAMENTO - E GERAR DADOS PARA O GRAFICO.
$totalpecas=($quantidadePecas+$pecasDefeito); //calculo da % da qualidade
$qualidade=($quantidadePecas/$totalpecas)*100;
$temporeal=$horasTrabalhadas-($paradaProgramada+$tempoQuebra); //calculo da disponibilidade
$disponibilidade=($temporeal/$horasTrabalhadas)*100;
$stander=20000;  // total medio de produção
$eficiencia=($totalpecas/$stander)*100;  // calculo da eficiencia
$oee=(($disponibilidade)*($qualidade)*($eficiencia))/10000; // calculo do OEE

$sql = "INSERT INTO resultado (horasTrabalhadas, nomeFuncionario, turno, codigoPecas, quantidadePecas, pecasDefeito, tempoQuebra, paradaProgramada) 
VALUES ($horasTrabalhadas, '$nome', ' $turno', $codigoPecas,  $quantidadePecas, $pecasDefeito,  $tempoQuebra,  $paradaProgramada)"; 

$inserir = mysqli_query($conexao,$sql);

header('Location: dashboard.php?pagina=kpi')
?>