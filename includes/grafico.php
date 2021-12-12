
<?php
//-------------------------------------------------------------Dados dos meses
$Jan = '"Jan"';
$Fev = '"Fev"';
$Mar = '"Mar"';
$Abr = '"Abr"';
$Mai = '"Mai"';
$Jun = '"Jun"';
$Jul = '"Jul"';
$Ago = '"Ago"';
$Set = '"Set"';
$Out = '"Out"';
$Nov = '"Nov"';
$Dez = '"Dez"';
//-------------------------------------------------------------Valores do faturamento cada mês
$jan = 5;
$fev = 10;
$mar = 15;
$abr = 20;
$mai = 25;
$jun = 100;
$jul = 15;
$ago = 33;
$set = 55;
$out = 44;
$nov = 25;
$dez = 15;

//-------------------------------------------------------------Valores das despesas decada mês
$jan = 10;
$fev = 2;
$mar = 5;
$abr = 4;
$mai = 8;
$jun = 20;
$jul = 5;
$ago = 10;
$set = 25;
$out = 42;
$nov = 52;
$dez = 20;

//-------------------------------------------------------------Configurações de cor e tipo do gráfico
$width = 800;
$height = 600;
$library = '"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"';
$mygrafico = '"mygrafico"';
$typeGrafico = '"bar"'; 
$borderWindth = 3;
$borderColorFaturamento = '"#00FFFF"';
$borderColorDespesas = '"#CD5C5C"';
$backgroundColorFaturamento = '"#00FFFF"';
$backgroundColorDespesas = '"#CD5C5C"';
$tituloFaturamento = '"Faturamento"';
$tituloDespesas = '"Despesas"';

//-------------------------------------------------------------Script grafico de barra Chart.JS
echo "<canvas id=".$mygrafico." width = ".$width." ></canvas>";
echo "<script src=".$library."></script>";
echo "<script>";
echo "var config = {";
echo "type:".$typeGrafico.",";
echo " data: {";
echo "  labels: [";
echo "".$Jan.", ".$Fev.",".$Mar.",".$Abr.",".$Mai.",".$Jun.",".$Jul.",".$Ago.",".$Set.",".$Out.",".$Nov.",".$Dez.",";
echo "],";
echo "datasets: [";
echo "{";
echo "    label: ".$tituloFaturamento.",";
echo "    data: [".$jan.",".$fev.",".$mar.",".$abr.",".$mai.",".$jun.",".$jul.",".$ago.",".$set.",".$out.",".$nov.",".$dez.",],";
echo "    borderWindth: ".$borderColorFaturamento.",";
echo "    borderColor:  ".$borderWindth.",";
echo "    backgroundColor: ".$backgroundColorFaturamento.",";
echo "    },";
echo "    {";
echo "    label: ".$tituloDespesas.",";
echo "    data: [".$jan.",".$fev.",".$mar.",".$abr.",".$mai.",".$jun.",".$jul.",".$ago.",".$set.",".$out.",".$nov.",".$dez.",],";
echo "    borderWindth: ".$borderColorDespesas.",";
echo "    borderColor:  ".$borderWindth.",";
echo "    backgroundColor: ".$backgroundColorDespesas.",";
echo "},";
echo "],";
echo "},";
echo "};";
echo "var myChart = new Chart(document.getElementById(".$mygrafico."), config)";
echo "</script>";


?>
