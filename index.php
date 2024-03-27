<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='SistdCalc.php'></script>
</head>
<body>
    <h1>Sistema de Calculo</h1><hr><br>
<div class="container" id="name">
    <form method="post">
    <label for="inputaname" class="form-label"> Digite seu nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Seu Nome">
</div><br><hr>
    <h2>Metas Semanais</h2>
<div class="conteiner" id="semana">
    <label for="inputaname" class="form-label"> 1°</label>
    <input type="number" class="form-control" name="semanaum" placeholder="Primeira semana"><br>
    <label for="inputaname" class="form-label"> 2°</label>
    <input type="number" class="form-control" name="semanadois" placeholder="Segunda semana"><br>
    <label for="inputaname" class="form-label"> 3°</label>
    <input type="number" class="form-control" name="semanatres" placeholder="Terceira semana"><br>
    <label for="inputaname" class="form-label"> 4°</label>
    <input type="number" class="form-control" name="semanaquatro" placeholder="Quarta semana"><br>
</div><br><hr>
<input type="submit" value="Subir informações"><br>
</form>

<?php
$nome=filter_input(INPUT_POST, 'nome');

$sem1=filter_input(INPUT_POST, 'semanaum');

$sem2=filter_input(INPUT_POST, 'semanadois');

$sem3=filter_input(INPUT_POST, 'semanatres');

$sem4=filter_input(INPUT_POST, 'semanaquatro');

$mensal = $sem1 + $sem2 + $sem3 + $sem4;

$salariomin= 1907.20;

$metamensal = 80000;

$bonusmensal = true;

$salariofinal = $salariomin;

$semanas=[$sem1,$sem2,$sem3,$sem4];

foreach ($semanas as $sem);{
if ($sem < 20000){
   $bonusmensal = false;

} else {
    $salariofinal += 200;
    $salariofinal += ($sem - 20000) * 0.05;
}
}if($bonusmensal){
    $salariofinal += ($mensal - $metamensal) * 0.1;
}

echo "Olá $nome. Seu salário será de $salariofinal";
?>
</body>
</body>
</html>