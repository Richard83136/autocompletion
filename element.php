<?php 
    require 'header.php';
    require 'dbconnect.php';
    $produit = new Database;
    $produit = detail_product();
?>
        
    <h1>Affiche de votre film</h1>
    <div class="container">
        <div class="image">
            <img src="UPLOAD/<?php echo $produit['image']; ?>" alt="image <?= $produit['nom'];?>">
        </div>
        <div>
            <h2>
                <?php 
                    echo $produit['nom']; 
                ?>
            </h2><br><br>
        </div>
        <div class="description">
            <h3>Description de votre film</h3><br>
            <p>
                <?php echo $produit['description']; ?>
            </p>
        </div><br>
        <button class="btn btn-info d-block mx-auto"><a href="index.php">Retour accueil</a></button> 
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>