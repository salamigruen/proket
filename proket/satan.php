<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
	<title>Universitäten</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap" rel="stylesheet">
	<link rel="icon" type="images/x-icon" href="icon.png">
	
	
	<style>
	body {
		margin: 0;
		padding: 0;
		font-family: "Sedan SC", serif;
		font-weight: 400;
		font-style: normal;
		
		
	}
	
	header {
		background-color: #C70039;
		display: block;
		height: 80px;
		width: 100%;
		border-bottom: #900C3F;
		border-style: solid;
		border-width: 2px;
		border-top: transparent;
		border-left: transparent;
		border-right: transparent;
		justify-items: center;
	}
	
	.btn-lgn {
		position: relative;
		top:-42px;
		font-size: 15px;
		text-align: center;
		justify-items: center;
		height: 30px;
		width: 80px;
		font-family: "Sedan SC", serif;
		font-weight: 400;
		font-style: normal;
		border-color: transparent;
		background-color: #900C3F;
		color: white;
		border-radius: 3px;
		transition: all 0.3s;
		display: inline-block;
		z-index: 2;
		margin-left: 90%;
		
	}
	
	.btn-lgn:hover {
		background-color: white;
		color: #900C3F;
	}
	
	#tite-head {
		color: white;
		display: inline-block;
		font-weight: bold;
		font-size: 25px;
		margin-left: 10px;
		margin-top: 20px;
	}
	
	</style>
</head>


<body>
	<header>
		<div class="ja">
			<h1 id="tite-head">Universitäten-Übersicht - Admin</h1>
			<a href="index.html"><button class="btn-lgn"><i class='bx bx-home-alt-2'></i>&nbsp;Home</button></a> 
		</div>
	</header>


</body>

</html>