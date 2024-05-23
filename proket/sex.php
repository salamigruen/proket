<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Universitäten</title>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="icon.png">
<style>

    body {
        margin: 0; 
        padding: 0; 
        font-family: "Sedan SC", serif; 
        font-weight: 400; 
        font-style: normal; 
        overflow-x: hidden; 
        background-color: #f8f9fa;
    }

    header {
        background-color: #343a40; 
        display: flex; 
        align-items: center;
        height: 80px;
        width: 100%;
        border-bottom: 2px solid #495057; 
        justify-content: space-between; 
        padding: 0 20px;
    }

    .btn-lgn {
        font-size: 15px;
        text-align: center; 
        height: 30px; 
        width: 80px; 
        margin-right: 40px; 
        border: none; 
        background-color: #dc3545; 
        color: white; 
        border-radius: 3px; 
        transition: all 0.3s; 
        cursor: pointer; 
    }

    .btn-lgn:hover {
        background-color: #bd2130; 
    }

    #tite-head {
        color: white; 
        font-weight: bold; 
        font-size: 25px; 
    }

    nav {
        margin-top: 10px; 
        text-align: center;
    }

    nav a {
        margin: 0 15px; 
        text-decoration: none;
        color: #007bff; 
        font-size: 18px; 
        transition: all 0.3s; 
    }

    nav a:hover {
        color: #0056b3; 
        text-decoration: underline; 
    }

    .content-section {
        padding: 20px; 
        text-align: center; 
        background-color: white; 
        border-radius: 5px; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        margin-bottom: 20px; 
    }

    footer {
        background-color: #343a40;
        color: white; 
        text-align: center; 
        padding: 10px 0; 
        width: 100%; 
        border-top: 2px solid #495057; 
        position: relative; 
    }

    footer a {
        color: white; 
        margin: 0 10px;
        text-decoration: none; 
    }

    footer a:hover {
        text-decoration: underline; 
    }

</style>
</head>
<body>
    <header>
        <h1 id="tite-head">Universitäten-Übersicht - Admin-Panel</h1> 
		<a href="index.html"><button class="btn-lgn"><i class='bx bx-user bx-xs'></i>&nbsp;Home</button></a> 
    </header>
    
    <nav>
        <a href="#studien">Studiengänge</a> 
        <a href="#unis">Universitäten</a> 
        <a href="#partner">Partneruniversitäten</a> 
        <a href="#fakul">Fakultäten</a> 
        <a href="#relation">Beziehungen</a> 
    </nav>
    
    <main>
        <div class="content-section" id="about">
            <h2>Information</h2> 
            <span>Zugriffsseite für Admins. Hier kann man Daten einfügen oder löschen.</span> 
        </div>
        
        <div class="content-section" id="studien">
            <h2>Studiengänge</h2> 
            
            <h3> Studiengänge - Daten </h3>
            <table border=1px>
                <tr>
                    <th>UNr</th>
                    <th>Name</th>
                    <th>Gründungsjahr</th>
                    <th>Straße</th>
                    <th>Hausnummer</th>
                    <th>PLZ</th>
                    <th>Stadt</th>
                    <th>Bundesland</th>
                </tr>
                <?php
                $pdo = new PDO('mysql:host=localhost;dbname=uni', 'root', '');
                $sql = "SELECT * FROM Universitaeten";
                foreach ($pdo-> query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>".$row['UNr']."</td>";
                    echo "<td>".$row['Name']."</td>";
                    echo "<td>".$row['Gruendungsjahr']."</td>";
                    echo "<td>".$row['Straße']."</td>";
                    echo "<td>".$row['Hausnummer']."</td>";
                    echo "<td>".$row['PLZ']."</td>";
                    echo "<td>".$row['Stadt']."</td>";
                    echo "<td>".$row['Bundesland']."</td>";
                    echo "</tr>";
                }    
                ?>
                </form>
            </table>
            
            <h3> Studiengänge - Einfügen </h3>
            <form method="post">
                <input type="text" id="new_name" placeholder="Name der Uni"><br>
                <input type="text" id="new_jahr" placeholder="Gründungsjahr"><br>
                <input type="text" id="new_street" placeholder="Straße"><br>
                <input type="text" id="new_number" placeholder="Hausnummer"><br>
                <input type="text" id="new_plz" placeholder="Postleitzahl"><br>
                <input type="text" id="new_stadt" placeholder="Stadt"><br>
                <input type="text" id="new_bundesland" placeholder="Bundesland"><br>
            </form>
                
            
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 </p> 
        <a href="#">Impressum</a> 
        <a href="#">Datenschutz</a> 
    </footer>
</body>
</html>
