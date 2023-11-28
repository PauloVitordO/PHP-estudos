<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>porcentagem</title>
</head>
<body>
    <main>
        <?php 
            $num=$_GET["num"] ?? "";
            $pct=$_GET["pct"] ?? "";
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Preço do Produto(R$):</label>
            <input type="number" name="num" id="num" min="0.10" step="0.01" value="<?=$num?>">
            <label for="pct">Valor do reajuste(<strong><span id="p"></span>%</strong>):</label>
            <input type="range" name="pct" id="pct" min="0" max="100" step="1" value="<?=$pct?>" oninput="mudaValor()">
            <input type="submit" value="Calcular">
        </form>
        <?php 
        $porc= $num*$pct/100;
        $nva = $num+$porc;
        echo "<p>O produto custava <strong>".number_format($num,2,",",".")."</strong>, com o reajute de <strong>$pct%</strong>, ficou <strong>".number_format($nva,2,",",".")."</strong>.</p>"
        ?>
    </main>
    <script>
        function mudaValor(){
            p.innerText = pct.value
        }
    </script>
</body>
</html>