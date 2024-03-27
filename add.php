<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Inventario</title>
</head>
<body>
    <h1>Aggiungi un nuovo oggetto all'inventario</h1>
    <form action="aggiungi_process.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Quantità: <input type="number" name="quantita"><br>
        <input type="submit" value="Aggiungi">
    </form>
</body>
</html>
