<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <title>NINGOJE</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MENU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- ITEMS -->
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=lyricssearch">Find lyrics</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=dictionary">Dictionary</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=randomImages">Random Images</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=qr">Generate Qr</a></li>
                    <!-- converter dropdown (currency,unit) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Converter
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./index.php?mod=currency">Currency</a></li>
                            <li><a class="dropdown-item" href="./index.php?mod=unit">Unit</a></li>
                        </ul>
                    </li>
                    <!-- /converter dropdown (currency,unit) -->
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=weather">Weather</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=calculator">Calculator</a></li>
                    <!-- other  enterainment(jokes,quotes,) dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Entertainment
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./index.php?mod=jokes">Jokes</a></li>
                            <li><a class="dropdown-item" href="./index.php?mod=quotes">Quotes</a></li>
                        </ul>
                    </li>
                    <!-- /other  enterainment(jokes,quotes,) dropdown -->
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php?mod=about">About</a></li>
                    <!-- /ITEMS -->

                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <!-- dynamic content here -->

        <?php
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
        $mod = $mod . '.php';
        if (file_exists($mod)) {
            include($mod);
        } else {

            include("404.php");
        }
        ?>



    </div>
    <div class="footer text-center p-3 mt-0">
        <div class="row">
            <!-- contacts fontawesome -->
            <div class="col-md-4">
                <h3><i class="fa fa-phone"></i></h3>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/nigoje.palehivi"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/ningoje"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.twitter.com/ningoje"><i class="fa fa-twitter"></i></a></li>
                    <!-- <li><a href="https://www.linkedin.com/in/ningoje">LinkedIn</a></li> -->
                    <li><a href="https://www.github.com/ningoje"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
            <!-- location -->
            <div class="col-md-4">
                <h3><i class="fa fa-map-marker"></i></h3>
                <div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
            </div>

            <div class="col-md-4">

                <h3><i class="fa fa-link"></i></h3>
                <ul class="list-unstyled">
                    <li><a href="./index.php?mod=home">Home</a></li>
                    <li><a href="./index.php?mod=lyricssearch">Find lyrics</a></li>
                    <li><a href="./index.php?mod=dictionary">Dictionary</a></li>
                    <li><a href="./index.php?mod=randomImages">Random Images</a></li>
                    <li><a href="./index.php?mod=qr">Generate Qr</a></li>
                    <li><a href="./index.php?mod=contact">Contact</a></li>
                    <li><a href="./index.php?mod=about">About</a></li>
                </ul>
            </div>
        </div>
    </div>

    </div>
    <section class="copyright text-center">
        ⓒNingoje ,<span id="year"></span>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3d21027bf4.js" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</body>

</html>