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
    }

    header {
        background-color: #C70039; 
        display: flex; 
        align-items: center;
        height: 80px;
        width: 100%;
        border-bottom: 2px solid #900C3F; 
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
        background-color: #900C3F; 
        color: white; 
        border-radius: 3px; 
        transition: all 0.3s; 
        cursor: pointer; 
    }

    .btn-lgn:hover {
        background-color: white; 
        color: #900C3F; 
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
        color: #C70039; 
        font-size: 18px; 
        transition: all 0.3s; 
    }

    nav a:hover {
        color: #900C3F; 
        text-decoration: underline; 
    }

    .content-section {
        padding: 20px; 
        text-align: center; 
    }

    #princ-pic {
        width: 100%; 
        transition: all 1.5s; 
        border: 1px solid #900C3F; 
    }

    #princ-pic:hover {
        transform: scale(1.015); 
    }

    footer {
        background-color: #C70039;
        color: white; 
        text-align: center; 
        padding: 10px 0; 
        width: 100%; 
        border-top: 2px solid #900C3F; 
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
    <!-- Header-Bereich -->
    <header>
        <h1 id="tite-head">Universitäten-Übersicht - Admin-Panel</h1> <!-- Titel der Seite -->
		<a href="index.html"><button class="btn-lgn"><i class='bx bx-user bx-xs'></i>&nbsp;Home</button></a> <!-- Home-Button -->
    </header>
    
    
    <!-- Hauptinhalt -->
    <main>
        <div class="content-section" id="about">
            <h2>Information</h2> <!-- Untertitel -->
            <span>Zugriffsseite für Admins. Hier kann man Daten einfügen oder löschen.</span> <!-- Textinhalt -->
        </div>
		
		<div class="content-section" id="studien">
            <h2>Studiengänge</h2> <!-- Untertitel -->
			
			<h3> Studiengänge - Daten </h3>
			<table border=1>
				<tr>
					<th>UNr</th>
					<th>Name</th>
					<th>Gründungsjahr</th>
					<th>Straße</th>
					<th>Hausnummer</th>
					<th>PLZ</th>
					<th>Stadt</th>
					<th>Bundesland</th>
					<th>E-Mail</th>
				</tr>
				
				<?php
				$pdo = new PDO('mysql:host=localhost;dbname=uni', 'root', '');
				$stmt = $pdo->query('SELECT * FROM universitaeten');
				while($row =$stmt->fetch::FETCH_ASSOC)) {
					echo "<tr>";
					echo "<td>".$row['UNr']."</td>";
					echo "<td>".$row['Name']."</td>";
					echo "<td>".$row['Gruendungsjahr']."</td>";
					echo "<td>".$row['Straße']."</td>";
					echo "<td>".$row['Hausnummer']."</td>";
					echo "<td>".$row['PLZ']."</td>";
					echo "<td>".$row['Stadt']."</td>";
					echo "<td>".$row['Bundesland']."</td>";
					echo "<td>".$row['E-Mail']."</td>";
					echo "</tr>";
				}	
					
				?>
		
			</table>
			
			<h3>Bearbeiten</h3>
			<form method="post">
				<input type="text" id="edit_id" placeholder="Nummer Studiengang">
				<button type="submit" name="fetch_course">Studiengang bearbeiten</button>
			</form>
			


    </main>
    
    <!-- Footer-Bereich -->
    <footer>
        <p>&copy; 2024 </p> <!-- Copyright -->
        <a href="#">Impressum</a> <!-- Link zu Impressum -->
        <a href="#">Datenschutz</a> <!-- Link zu Datenschutz -->
    </footer>
    
    <script>
        console.log(2 + 2); // Konsolenausgabe für Debugging 
    </script>
</body>
</html>
