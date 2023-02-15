<?php
$num1 = rand(1,2);
if ($num1 = 1) 
{
    $img = "https://git-scm.com/images/logos/downloads/Git-Icon-1788C.png";
}
else 
{
    $img = "https://cdn.worldvectorlogo.com/logos/git-bash.svg";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Git</title>
</head>
<body>
    <h1>Git</h1>
    <p>Que maneiro, eu estou usando Git nesse repositório!</p>
    <img src= <?php $img ?> alt="Git Png">
</body>
</html>