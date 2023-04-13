<?php
    require 'header.php';
    require 'dbconnect.php';  
            
    $produit = new Database;
?> <br>
<h2>RESULTAT DE RECHERCHE</h2>
<p id="precherche">Cliquez sur le film de votre choix </p>
   <ul id="listsearch">
       <?php $produit = getlist(); ?>
   </ul> 
    </main>    
</body>
</html>