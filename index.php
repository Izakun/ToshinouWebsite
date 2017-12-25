<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toshinou</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/toshinou.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Toshinou</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#preview">Preview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#tuto">Tutoriel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#download">Download</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Intro Header -->
<header class="masthead">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="brand-heading">Toshinou</h1>
                    <p class="intro-text">Cross-platform, open-source DarkOrbit bot</p>
                    <a href="#features" class="btn btn-circle js-scroll-trigger">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="content-section text-center">
    <div class="container">
        <h2>Features</h2>
        <hr class="style2">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <h3>Collector</h3>
                <p>Let the bot collect boxes for you. Includes event boxes, materials and standard boxes.</p>
            </div>
            <div class="col-lg-4 mx-auto">
                <h3>Autolock</h3>
                <p>Do you aim really bad? Want to select your enemy with one click? The autolock feature is made for
                    you!</p>
            </div>
            <div class="col-lg-4 mx-auto">
                <h3>NPC killer</h3>
                <p>Tired of killing NPCs? Let the intelligent NPC Killer do it for you!</p>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="preview" class="preview-section content-section text-center" style="height: 590px;">
    <div class="container">
        <h2>Preview</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" style="margin-left: auto; margin-right: auto;" src="img/1.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="margin-left: auto; margin-right: auto;" src="img/2.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="margin-left: auto; margin-right: auto;" src="img/3.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="margin-left: auto; margin-right: auto;" src="img/4.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="margin-left: auto; margin-right: auto;" src="img/5.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="margin-left: auto; margin-right: auto;" src="img/6.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="margin-left: auto; margin-right: auto;" src="img/7.png">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section id="tuto" class="content-section text-center">
    <div class="container">
        <h2>Tutoriel</h2>
        <script>
            // "Windows"    for all versions of Windows
            // "MacOS"      for all versions of Macintosh OS
            // "Linux"      for all versions of Linux
            // "UNIX"       for all other UNIX flavors
            // "Unknown OS" indicates failure to detect the OS
            var OSName="Unknown OS";
            if (navigator.appVersion.indexOf("Win")!=-1) // windows
                OSName="<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sZOrfItRd2w\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>";
            if (navigator.appVersion.indexOf("Mac")!=-1) // mac
                OSName="<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/W_fqCRLTjcQ\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>";
            if (navigator.appVersion.indexOf("X11")!=-1) // unix
                OSName="<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/W_fqCRLTjcQ\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>";
            if (navigator.appVersion.indexOf("Linux")!=-1) // linux
                OSName="<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/W_fqCRLTjcQ\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>";
            document.write(OSName);
        </script>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="download-section content-section text-center">
    <div class="container">
        <div class="col-lg-8 mx-auto">
            <h2>Download</h2>
            <a href="https://codeload.github.com/freshstudio/Toshinou/zip/master" class="btn btn-default btn-lg">Developer
                version [GitHub]</a></br>
            <p>Donate to me</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Contact Toshinou</h2>
                <ul class="list-inline banner-social-buttons">
                    <li class="list-inline-item">
                        <a href="https://twitter.com/" class="btn btn-default btn-lg">
                            <i class="fa fa-twitter fa-fw"></i>
                            <span class="network-name">Twitter</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/freshstudio" class="btn btn-default btn-lg">
                            <i class="fa fa-github fa-fw"></i>
                            <span class="network-name">Github</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://plus.google.com/" class="btn btn-default btn-lg">
                            <i class="fa fa-google-plus fa-fw"></i>
                            <span class="network-name">Google+</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy; Toshinou 2017</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>

</body>

</html>
