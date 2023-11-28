<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caluladora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $segun=$_GET["seg"] ?? 1;
        $sobra=$segun;
        ?>
        <h1>CALCULADORA DE TEMPO</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="seg">Quantos segundos?</label>
            <input type="number" name="seg" id="seg" min="1" value="<?=$segun?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $sem = (int)($sobra/604800);
        $sobra = $sobra%604800;

        $dias = (int)($sobra/84400);
        $sobra = $sobra%84800;

        $horas = (int)($sobra/3600);
        $sobra = $sobra%3600;

        $min= (int)($sobra/60);
        $sobra = $sobra%60;
        $seg = $sobra
        ?>
        <h3>Em <?=number_format($segun,3,",",".")?> segundos, temos:</h3>
        <p>
            <ul>
                <li><?=$sem?> semanas</li>
                <li><?=$dias?> dias</li>
                <li><?=$horas?> horas</li>
                <li><?=$min?> minutos</li>
                <li><?=$seg?> segundos</li>
            </ul>
        </p>
    </section>
</body>
</html>