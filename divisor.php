<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>verifica divisores</title>
</head>

verifica divisores

<body>
    <?php
    if(isset($_POST["num"])){
        echo $_POST["num"];
        echo "<br>";
        $num=$_POST["num"];
        $i=1;
        $j=0;
        while ($i<=$num){
            if ($num%$i==0){
                echo ("$i,");
                $j=$j+1;
            }
        $i++;
        
        }
        echo "<br>";
        echo "o numero $num possui $j divisores";
        echo "<br>";
        if ($j==2){
            echo "O numero é primo!";
        }
        else{
            echo " o numero não é primo";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="num"/>
        <input type="submit">
    </form>


