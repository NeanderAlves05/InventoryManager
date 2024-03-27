<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Inventario</title>
</head>
<body>
    <h1>Inventario Aziendale</h1>

    <?php
    // Include il file di connessione
    include 'connessione.php';

    // Query per recuperare gli oggetti dall'inventario
    $sql = "SELECT id, nome, quantita FROM inventario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Nome</th><th>Quantità</th></tr>";
        // Output dei dati di ogni riga
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["quantita"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 risultati";
    }
    ?>
</body>
</html>
