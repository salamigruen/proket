<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="images/x-icon" href="logo.png">
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #001220; 
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }
        h1, h2 {
            color: #001220;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            overflow-x: auto; 
            border-color: black;
            background-color: white;
            box-shadow: 0px 0px 26px -7px white;
        }
        table {
            width: 100%; 
            border-collapse: collapse;
            white-space: nowrap; 
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            color: #001220;
;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        button {
            padding: 10px 20px;
            background-color: #001220;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .btn-del {
            background-color: #001220;
        }
       

        .admin {
            color: white;
        }
       .Btn {
        display: inline-block;
        outline: none;
        cursor: pointer;
        border-radius: 3px;
        font-size: 14px;
        font-weight: 500;
        line-height: 16px;
        padding: 2px 16px;
        height: 38px;
        min-width: 96px;
        min-height: 38px;
        border: none;
        color: #fff;
        background-color: rgb(88, 101, 242);
        transition: background-color .17s ease,color .17s ease;
        margin-top: 30px;
        margin-left: 30px;
         }
        .Btn:hover {
         background-color: rgb(71, 82, 196);
        }
        
        .page_act {
            margin-top: 5px;
        }

        .act {
            color: #001220;
        }

    </style>
</head>
<body>
    <header> 
        <a href="panel.html"><button class="Btn"><i class='bx bx-home-alt'></i>&nbsp; Admin Panel Overview</button></a>
    </header>
    <div class="container">
        <h1 class="admin">Admin Panel</h1>
        <div class="content">
        <h2>Uni-Daten</h2>
        <table>
            <tr>
                <th>UNr</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Straße</th>               
                <th>Hausnummer</th>
                <th>Postleitzahl</th>
                <th>Stadt</th>
                <th>Bundesland</th>
                <th>Gründungsjahr</th>
            </tr>
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=uni', 'root', '');
            $stmt = $pdo->query('SELECT * FROM universitaeten');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['UNr']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['E-Mail']."</td>";
                echo "<td>".$row['Strasse']."</td>";
                echo "<td>".$row['Hausnummer']."</td>";
                echo "<td>".$row['PLZ']."</td>";
                echo "<td>".$row['Stadt']."</td>";
                echo "<td>".$row['Bundesland']."</td>";
                echo "<td>".$row['Gruendungsjahr']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <form method="post">
                <button class="page_act" type="submit" name="refresh_page">Aktualisieren</button>
            </form>
    </div>
    <div class="content">
        <h2>Uni bearbeiten</h2>
        <form method="post">
            <input type="text" id="edit_id" name="edit_id" placeholder="UNr eingeben">
            <button type="submit" name="fetch_uni">Uni bearbeiten</button>
        </form>

        <?php
        if(isset($_POST['fetch_uni'])) {
            $edit_id = $_POST['edit_id'];
            $stmt = $pdo->prepare('SELECT * FROM universitaeten WHERE UNr = ?');
            $stmt->execute([$edit_id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <form method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['UNr']; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['Name']; ?>"><br>
                <label for="email">E-Mail:</label>
                <input type="text" id="email" name="email" value="<?php echo $row['E-Mail']; ?>"><br>
                <label for="street">Strasse:</label>
                <input type="text" id="street" name="street" value="<?php echo $row['Strasse']; ?>"><br>
                <label for="number">Hausnummer:</label>
                <input type="text" id="number" name="number" value="<?php echo $row['Hausnummer']; ?>"><br>
                <label for="zip">Postleitzahl:</label>
                <input type="text" id="zip" name="zip" value="<?php echo $row['PLZ']; ?>"><br>
                <label for="city">Stadt:</label>
                <input type="text" id="city" name="city" value="<?php echo $row['Stadt']; ?>"><br>
                <label for="state">Bundesland:</label>
                <input type="text" id="state" name="state" value="<?php echo $row['Bundesland']; ?>"><br>
                <label for="year">Gründungsjahr:</label>
                <input type="text" id="year" name="year" value="<?php echo $row['Gruendungsjahr']; ?>"><br>
                <button type="submit" name="update_uni">Uni aktualisieren</button>
            </form>
        <?php } ?>

        <?php
        if(isset($_POST['update_uni'])) {
            $update_id = $_POST['edit_id'];
            $stmt = $pdo->prepare('UPDATE uni SET Name=?, E-Mail=?, Strasse=?, Hausnummer=?, PLZ=?, Stadt=?, Bundesland=?, Gruendungsjahr=? WHERE UNr=?');
            $stmt->execute([$_POST['name'], $_POST['email'], $_POST['street'], $_POST['number'], $_POST['zip'], $_POST['city'], $_POST['state'], $_POST['year'], $update_id]);
            echo "<p class='act'>Uni-Daten aktualisiert!</p>";
        }
        ?>
    </div>
    <div class="content">
        <h2>Kunde löschen</h2>
        <form method="post">
            <input type="text" id="delete_id" name="delete_id" placeholder="Kunden-ID eingeben">
            <button type="submit" name="delete_customer" class="btn-del">Kunde löschen</button>
        </form>

        <?php
        if(isset($_POST['delete_customer'])) {
            $delete_id = $_POST['delete_id'];
            $stmt = $pdo->prepare('DELETE FROM clients WHERE KundenID = ?');
            $stmt->execute([$delete_id]);
            echo "<p class='act'>Kunde gelöscht!</p>";
        }
        ?>
    </div>
    <div class="content">
        <h2>Neuen Kunden hinzufügen</h2>
        <form method="post">
            <input type="text" id="new_firstname" name="new_firstname" placeholder="Vorname"><br>
            <input type="text" id="new_lastname" name="new_lastname" placeholder="Nachname"><br>
            
            <input type="text" id="new_email" name="new_email" placeholder="E-Mail"><br>
            
            <input type="text" id="new_phone" name="new_phone" placeholder="Telefonnummer"><br>
            
            <input type="text" id="new_street" name="new_street" placeholder="Strasse"><br>
            
            <input type="text" id="new_housenumber" name="new_housenumber" placeholder="Hausnummer"><br>
            
            <input type="text" id="new_zipcode" name="new_zipcode" placeholder="Postleitzahl"><br>
            
            <input type="text" id="new_city" name="new_city" placeholder="Wohnort"><br>
            
            <input type="text" id="new_country" name="new_country" placeholder="Land"><br>
            <button type="submit" name="add_customer">Kunden hinzufügen</button>
        </form>
    

        <?php
        if(isset($_POST['add_customer'])) {
            $stmt = $pdo->prepare('INSERT INTO clients (Vorname, Nachname, `E-Mail`, Telefonnummer, Strasse, Hausnummer, Postleitzahl, Wohnort, Land) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $stmt->execute([$_POST['new_firstname'], $_POST['new_lastname'], $_POST['new_email'], $_POST['new_phone'], $_POST['new_street'], $_POST['new_housenumber'], $_POST['new_zipcode'], $_POST['new_city'], $_POST['new_country']]);
            echo "<p class='act'>Neuer Kunde hinzugefügt!</p>";
        }
        ?>
    </div>
    </div>
</body>
</html>
