<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $atual= date("Y");
        $an = $_GET["an"]??0;
        $aa = $_GET["aa"]??$atual;
        
        ?>
        <h1> QUANTOS ANOS VOCE VAI TER?</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="an">Qual seu ano de nascimento?</label>
        <input type="number" name="an" id="an" min="1900" max="<?=($atual-1)?>" value="<?=$an?>">
        <label for="aa">Qual ano voce quer saber? (O ano atual é <strong> <?= $atual?></strong>)</label>
        <input type="number" name="aa" id="aa" min="1900" value="<?=$aa?>">
        <input type="submit" value="Calcular idade?">
        </form>
    </main>
    <section>
        <h2>RESULTADO:</h2>
        <?php 
        $anos= $aa - $an;
        echo" Quem nasceu em $an vai ter $anos anos em $aa"
        ?>
    </section>
    
</body>
</html>