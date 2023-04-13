<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <title>Recherche de films</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>   
</head>
<body>
    <header>
    <button class="btn btn-info m-5"><a href="index.php">Retour accueil</a></button> 
        <div class="wrapper">
            <div class="search-input">
                <form action="recherche.php?search=" method="GET" class="search-input">
                    <input type="texte" id="search" name = "search" placeholder="Ici pour rechercher votre film">
                    <button class="btn btn-info" style="margin-left:20px;" type="submit" value="submit">Rechercher</button>
                </form>
                <div class="autocom-box"></div>
                <div class="autocom-box2"></div>
            </div>
        </div>
    </header>
    <main>

