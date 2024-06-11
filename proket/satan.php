<!DOCTYPE html>
<html>
<head>
    <title>Ich hau dir eine in die Fresse du Hurensohn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        input[type=text] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>CRUD-Anwendung</h1>

<h2>Daten aus der Datenbank</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_projekt";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

//DAten aktualieren
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $UNr = $_POST['UNr'];
    $Name = $_POST['Name'];
    $Gruendungsjahr = $_POST['Gruendungsjahr'];
    $Straße = $_POST['Straße'];
    $Hausnummer = $_POST['Hausnummer'];
    $PLZ = $_POST['PLZ'];
    $Stadt = $_POST['Stadt'];
    $Bundesland = $_POST['Bundesland'];
    $sql = "UPDATE universitaeten SET Name='$Name', Gruendungsjahr='$Gruendungsjahr', Straße='$Straße', Hausnummer='$Hausnummer', PLZ='$PLZ', Stadt='$Stadt', Bundesland='$Bundesland' WHERE UNr=$UNr";
    if ($conn->query($sql) === TRUE) {
        echo "Daten erfolgreich aktualisiert<br>";
    } else {
        echo "Fehler beim Aktualisieren der Daten: " . $conn->error . "<br>";
    }
}

// Daten löschen
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $UNr = $_POST['UNr'];
    $sql = "DELETE FROM universitaeten WHERE UNr=$UNr";
    if ($conn->query($sql) === TRUE) {
        echo "Daten erfolgreich gelöscht<br>";
    } else {
        echo "Fehler beim Löschen der Daten: " . $conn->error . "<br>";
    }
}

// Daten hinzufügen
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert"])) {
    $Name = $_POST['Name'];
    $Gruendungsjahr = $_POST['Gruendungsjahr'];
    $Straße = $_POST['Straße'];
    $Hausnummer = $_POST['Hausnummer'];
    $PLZ = $_POST['PLZ'];
    $Stadt = $_POST['Stadt'];
    $Bundesland = $_POST['Bundesland'];
    $sql = "INSERT INTO universitaeten (Name, Gruendungsjahr, Straße, Hausnummer, PLZ, Stadt, Bundesland) VALUES ('$Name', '$Gruendungsjahr', '$Straße', '$Hausnummer', '$PLZ', '$Stadt', '$Bundesland')";
    if ($conn->query($sql) === TRUE) {
        echo "Daten erfolgreich hinzugefügt<br>";
    } else {
        echo "Fehler beim Hinzufügen der Daten: " . $conn->error . "<br>";
    }
}


$sql = "SELECT UNr, Name, Gruendungsjahr, Straße, Hausnummer, PLZ, Stadt, Bundesland FROM universitaeten";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>UNr</th><th>Name</th><th>Gruendungsjahr</th><th>Straße</th><th>Hausnummer</th><th>PLZ</th><th>Stadt</th><th>Bundesland</th></tr>";

   
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['UNr']}</td>";
        echo "<td>{$row['Name']}</td>";
        echo "<td>{$row['Gruendungsjahr']}</td>";
        echo "<td>{$row['Straße']}</td>";
        echo "<td>{$row['Hausnummer']}</td>";
        echo "<td>{$row['PLZ']}</td>";
        echo "<td>{$row['Stadt']}</td>";
        echo "<td>{$row['Bundesland']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 Ergebnisse";
}


$conn->close();
?>

<h2>Daten hinzufügen</h2>
<form method="post">
    <label for="Name">Name:</label><br>
    <input type="text" id="Name" name="Name" required><br>
    <label for="Gruendungsjahr">Gründungsjahr:</label><br>
    <input type="text" id="Gruendungsjahr" name="Gruendungsjahr" required><br>
    <label for="Straße">Straße:</label><br>
    <input type="text" id="Straße" name="Straße" required><br>
    <label for="Hausnummer">Hausnummer:</label><br>
    <input type="text" id="Hausnummer" name="Hausnummer" required><br>
    <label for="PLZ">PLZ:</label><br>
    <input type="text" id="PLZ" name="PLZ" required><br>
    <label for="Stadt">Stadt:</label><br>
    <input type="text" id="Stadt" name="Stadt" required><br>
    <label for="Bundesland">Bundesland:</label><br>
    <input type="text" id="Bundesland" name="Bundesland" required><br>
    <input type="submit" name="insert" value="Daten hinzufügen">
</form>

<h2>Daten löschen</h2>
<form method="post">
    <label for="UNr">UNr:</label><br>
    <input type="text" id="UNr" name="UNr" required><br>
    <input type="submit" name="delete" value="Daten löschen">
</form>

<h2>Daten bearbeiten</h2>
<form method="post">
    <label for="UNr">UNr:</label><br>
    <input type="text" id="UNr" name="UNr" required><br>
    <label for="Name">Name:</label><br>
    <input type="text" id="Name" name="Name" required><br>
    <label for="Gruendungsjahr">Gründungsjahr:</label><br>
    <input type="text" id="Gruendungsjahr" name="Gruendungsjahr" required><br>
    <label for="Straße">Straße:</label><br>
    <input type="text" id="Straße" name="Straße" required><br>
    <label for="Hausnummer">Hausnummer:</label><br>
    <input type="text" id="Hausnummer" name="Hausnummer" required><br>
    <label for="PLZ">PLZ:</label><br>
    <input type="text" id="PLZ" name="PLZ" required><br>
    <label for="Stadt">Stadt:</label><br>
    <input type="text" id="Stadt" name="Stadt" required><br>
    <label for="Bundesland">Bundesland:</label><br>
    <input type="text" id="Bundesland" name="Bundesland" required><br>
    <input type="submit" name="update" value="Daten bearbeiten">
</form>

</body>
</html>
