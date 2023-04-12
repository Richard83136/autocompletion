<?php
if (isset($_GET['id'])) {

		$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['id']);
		$req= $connection->query("SELECT * FROM film WHERE id='$q%'")->fetch_assoc();	
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Element</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../CSS/autocompletion.css">
</head>
<body id="bodyE">
	        <header>

           

        <input name="search"type="text" placeholder="Search Query..." id="searchBox">
   
        <div id="response"></div>
        <a id="home" href="../index.php">Accueil</a>


        	<script type="text/javascript">
            <?php
           	include("../INCLUDES/script.js");
           
           		?>
        	</script> 
        </header>
<main>
	<div class=" fiche row">
		
		<H1 class="H1element">Fiche du film : <?php echo $req['nom']?></H1>
		<p class="pE">Catégorie : <?php echo $req['type']?></p>
		<p class="pE">Le tarif  : <?php echo $req['prix']?>€</p>
		<div class="col-7 mt-5 text-center">
		<section id="totalE">
		<img src="../UPLOAD/<?= $req['images']?>" alt="afficheMatrix">
		</section>
		



	</div>
	<div class="col-4 mt-5 text-center">
<p class="RES"> <?php echo $req['résumé']?></p>
	</div>
</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>