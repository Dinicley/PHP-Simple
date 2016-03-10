<!-- Dinicley S. Alves | www.dnewsti.com.br -->

<style type="text/css">
body{background:#000fff; padding:40px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

echo date('d/m/Y H:i:s').'<hr />';

$diaSemana		= date('w');
$diaDoMes		= date('d');
$mesAtual		= date('m');
$anoAtual		= date('Y');

$diaExt = array(
	"0" => "Domingo",
	"1" => "Segunda Feira",
	"2" => "Terça Feira",
	"3" => "Quarta Feira",
	"4" => "Quinta Feira",
	"5" => "Sexta Feira",
	"6" => "Sábado"
);

$mesExt = array(
	"01" => "Janeiro",
	"02" => "Fevereiro",
	"03" => "Março",
	"04" => "Abril",
	"05" => "Maio",
	"06" => "Juno",
	"07" => "Julho",
	"08" => "Agosto",
	"09" => "Setembro",
	"10" => "Outubro",
	"11" => "Novembro",
	"12" => "Dezembro"
);

echo 'Hoje é '.$diaExt[$diaSemana].' dia '.$diaDoMes.' de '.$mesExt[$mesAtual].' de '.$anoAtual;
echo '<hr />';

$diaHoje = strtotime(date('Y-m-d')); echo $diaHoje.'<br />';
$diaAniv = strtotime(date('Y-05-04')); echo $diaAniv.'<br />';
$tempoFalta = $diaAniv - $diaHoje; echo $tempoFalta.'<br />';
$tempoDeUmDia = 24*60*60;
$faltaDias = floor($tempoFalta/$tempoDeUmDia);

echo '<hr />';

if($faltaDias == 0){
	echo 'Seu aniversario é hoje!';
}elseif($faltaDias == 1){
	echo 'Seu aniversario e amanha!';	
}elseif($faltaDias > 1){
	echo 'Faltam '.$faltaDias.' dias para seu aniversario!';	
}else{
	echo 'Seu aniversario ja passou!';
}

?>

