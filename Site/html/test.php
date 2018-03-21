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

    <!--logo du site-->
    <div>
        <img id="logo" src="../img/Logo.png" alt="image du logo du site"/>
    </div>
    <!--nav bar-->

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-md hidden-lg" href="#">Menu</a>
        </div>

        <div class="collapse navbar-collapse" id="main-menu" style="margin-bottom: 0px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a data-toggle="dropdown" href="../html/index.php">Accueil<b></b></a>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">PC<b class="caret"></b></a>
                    <ul class="dropdown-menu jqueryFadeIn">
                        <li><a href="../html/PC.php">Accueil PC</a></li>
                        <li><a href="../html/aventurePC.php">Aventure</a></li>
                        <li><a href="../html/actionPC.php">Action</a></li>
                        <li><a href="../html/combatPC.php">Combat</a></li>
                        <li><a href="../html/sportPC.php">Sport</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">PS4<b class="caret"></b></a>
                    <ul class="dropdown-menu jqueryFadeIn">
                        <li><a href="../html/PS4.php">Accueil PS4</a></li>
                        <li><a href="../html/aventurePS4.php">Aventure</a></li>
                        <li><a href="../html/actionPS4.php">Action</a></li>
                        <li><a href="../html/combatPS4.php">Combat</a></li>
                        <li><a href="../html/sportPS4.php">Sport</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" href="#">XBOX ONE<b class="caret"></b></a>
                    <ul class="dropdown-menu jqueryFadeIn">
                        <li><a href="../html/XboxONE.php">Accueil XBOX ONE</a></li>
                        <li><a href="../html/aventureXboxOne.php">Aventure</a></li>
                        <li><a href="../html/actionXboxOne.php">Action</a></li>
                        <li><a href="../html/combatXboxOne.php">Combat</a></li>
                        <li><a href="../html/sportXboxOne.php">Sport</a></li>
                    </ul>
                </li>

            </ul>
            <img id="logo" src="../img/Logo.png" alt="image du logo du site"/>

            <form class="navbar-form pull-right">
                <input id="recherche" type="text" style="width:150px"  placeholder="Recherche">
                <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> </button>
            </form>

            <form class="navbar-form pull-right">
                <button id="btninsciption" type="button"> <a href="./inscription.php">Inscription </a></button>
                <button id="btnconnexion" type="button"> <a href="./inscription.php"> Connexion </a> </button>
            </form>
        </div>
    </nav>



    <div id="slidy-container">
        <figure id="slidy">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/eyes.jpg" alt="eyes" >
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/lou.jpg" alt="lou" >
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/lucie-2.jpg" alt="lucie-2" >
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/lucie.jpg" alt="lucie" >
        </figure>
    </div>

</body>
<script>
    /* user defined variables */
    var timeOnSlide = 3,
        // the time each image will remain static on the screen, measured in seconds
        timeBetweenSlides = 1,
        // the time taken to transition between images, measured in seconds

// test if the browser supports animation, and if it needs a vendor prefix to do so
        animationstring = 'animation',
        animation = false,
        keyframeprefix = '',
        domPrefixes = 'Webkit Moz O Khtml'.split(' '),
        // array of possible vendor prefixes
        pfx  = '',
        slidy = document.getElementById("slidy");
    if (slidy.style.animationName !== undefined) { animation = true; }
    // browser supports keyframe animation w/o prefixes

    if( animation === false ) {
        for( var i = 0; i < domPrefixes.length; i++ ) {
            if( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
                pfx = domPrefixes[ i ];
                animationstring = pfx + 'Animation';
                keyframeprefix = '-' + pfx.toLowerCase() + '-';
                animation = true;
                break;
            }
        }
    }

    if( animation === false ) {
        // animate in JavaScript fallback
    } else {
        var images = slidy.getElementsByTagName("img"),
            firstImg = images[0],
            // get the first image inside the "slidy" element.
            imgWrap = firstImg.cloneNode(false);  // copy it.
        slidy.appendChild(imgWrap); // add the clone to the end of the images
        var imgCount = images.length, // count the number of images in the slide, including the new cloned element
            totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
            slideRatio = (timeOnSlide / totalTime)*100, // determine the percentage of time an induvidual image is held static during the animation
            moveRatio = (timeBetweenSlides / totalTime)*100, // determine the percentage of time for an individual movement
            basePercentage = 100/imgCount, // work out how wide each image should be in the slidy, as a percentage.
            position = 0, // set the initial position of the slidy element
            css = document.createElement("style"); // start marking a new style sheet
        css.type = "text/css";
        css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; // set the width for the slidy container
        css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }\n";
        css.innerHTML += "@"+keyframeprefix+"keyframes slidy {\n";
        for (i=0;i<(imgCount-1); i++) { //
            position+= slideRatio; // make the keyframe the position of the image
            css.innerHTML += position+"% { left: -"+(i * 100)+"%; }\n";
            position += moveRatio; // make the postion for the _next_ slide
            css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }\n";
        }
        css.innerHTML += "}\n";
        css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }\n"; // call on the completed keyframe animation sequence
        document.body.appendChild(css); // add the new stylesheet to the end of the document
    }

</script>
</html>