<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<!--Liste des jeux-->
<div id="resp_1" class="row">
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/pc/combat/79.jpg" alt="image du jeux Battlecry sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/86.jpg" alt="image du Brawlhalla sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/88.jpg" alt="image du jeux Brawlout sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/82.jpg" alt="image du jeux Dead or Alive 5: Last Round sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/pc/combat/77.jpg" alt="image du jeux Dead Star sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/70.jpg" alt="image du jeux Dragon Ball Xenoverse 9 sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/71.jpg" alt="image du jeux Dragon Ball FighterZ sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/91.jpg" alt="image du jeux Dragon Ball Xenoverse 2 sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/pc/combat/87.jpg" alt="image du jeux Injustice II sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/73.jpg" alt="image du jeux Injustice: Gods Among Us Ultimate Edition sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/76.jpg" alt="image du jeux Last Fight sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/72.jpg" alt="image du jeux lockon sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/pc/combat/85.jpg" alt="image du jeux Mortal Kombat II sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/83.jpg" alt="image du jeux Mortal Kombat X sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/84.jpg" alt="image du jeux Marvel vs. Capcom: Infinite sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/80.jpg" alt="image du jeux One Piece: Burning Blood sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/pc/combat/90.jpg" alt="image du jeux Saint Seiya: Soldiers' Soul sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/78.jpg" alt="image du jeux Street Fighter V sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/75.jpg" alt="image du jeux Tekken 7 sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/92.jpg" alt="image du jeux The King of Fighters XIV sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/pc/combat/74.jpg" alt="image du jeux Ultra Street Fighter IV sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image2" src="../img/pc/combat/89.jpg" alt="image du jeux W2K16 sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image2" src="../img/pc/combat/81.jpg" alt="image du jeux W2K17 sur PC"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image2" src="../img/pc/combat/93.jpg" alt="image du jeux W2K18 sur PC"/>
    </div>
</div>


<?php include('footer.php'); ?>


</body>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
    /*début de la nav bar*/
    $(function() {
        // Affichage du sous menu en douceur
        jQuery('ul.nav li.dropdown').hover(function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
        }, function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
        });

    });
    /*fin de la nav bar*/
    /*début slider*/
    $(function(){
        setInterval(function(){
            $(".slideshow ul").animate({marginLeft:-350},800,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });


</script>

</html>


