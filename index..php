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
    <label for="inputaname" class="form-label"> Digite seu nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Seu Nome">
</div><br><hr>
    <h2>Metas Semanais</h2>
<div class="conteiner" id="semana">
    <label for="inputaname" class="form-label"> 1°</label>
    <input type="number" class="form-control" id="semanaum" placeholder="Primeira semana"><br>
    <label for="inputaname" class="form-label"> 2°</label>
    <input type="number" class="form-control" id="semanadois" placeholder="Segunda semana"><br>
    <label for="inputaname" class="form-label"> 3°</label>
    <input type="number" class="form-control" id="semanatres" placeholder="Terceira semana"><br>
    <label for="inputaname" class="form-label"> 4°</label>
    <input type="number" class="form-control" id="semanaquatro" placeholder="Quarta semana"><br>
</div><br><hr>
<h2>Meta mesal</h2>
<div class="conteiner" id="mes">
    <label for="inputaname" class="form-label">Mês:</label>
    <input type="number" class="form-control" id="mes" placeholder="meta do mês"><br>
</div><br><hr>
<button class="submit">Subir informações</button>

<?php
$nome=$_GET['nome'];

echo "olá $nome"

$sem1=$_GET['semanaum'];

$sem2=$_GET['semanadois'];

$sem3=$_GET['semanatres'];

$sem4=$_GET['semanaquatro'];

$mensal=$_GET['mes'];

$semanas=['$sem1,$sem2,$sem3,$sem4'];

foreach ($semanas as $sem);
if ($semanas < 21000);
    ($sem1 + 210)
    ($sem2 + 210)
    ($sem3 + 210)
    ($sem4 + 210){

echo "haverá bônus mensal";

}else{
echo "nao haverá bônus mensal";
}

?>
</body>
</body>
</html>