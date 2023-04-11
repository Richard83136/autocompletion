<?php
      // include("INCLUDES/research.php");
?>
<html>
    <head>
        <title>FILM</title>
        <link rel="stylesheet" type="text/css" href="../CSS/autocompletion.css">
         
         <script src="../jquery.js"></script>
    </head>
    <body id="index">
        <header> 
        
        <input name="search"type="text" placeholder="Recherche films..." id="searchBox">
   
        <div id="response"></div>
        </header>



        <main id="moteur2">
            <div class="mouv">
                <h1 >Bienvenue sur CinéWeb </h1> 
            </div>

         <h2 class="title">Le moteur de recherche du cinéma</h2>

             
        <input name="search"type="text" placeholder="Recherche par type" id="searchBox2">
   
        <div id="response2"></div>



        <script type="text/javascript">
            <?php
           include("../INCLUDES/script.js");

           
           ?>
        </script> 
        </main>
    </body>
</html>