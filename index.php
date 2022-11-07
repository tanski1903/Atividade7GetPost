<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>atividade 7</title>
</head>
<body>
    <Form action="atividade7.php" method="post">
        <h1>Cálculo Valor Prestação</h1>
        <br><br>
        <label for="v">Valor da Prestação</label>
        <input type="number_format(int)" id="vl" name="vl"/>
        <br><br>
        <label for="tx">Taxa de Atraso</label>
        <input type="number_format(int)" id="tx" name="tx"/>
        <br><br>
        <label for="tp">Tempo de Atraso</label>
        <input type="number_format(int)" id="tp" name="tp"/>
        <br><br>
        <input type="submit" value="Calcular">
    </Form>
    
</body>
</html>