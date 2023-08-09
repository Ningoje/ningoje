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
    <title>Dictionary</title>

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
        $mod = isset($_GET['mod']) ? $_GET['mod'] : '';
        $mod = $mod . '.php';
        if (file_exists($mod)) {
            include($mod);
        } else {

            echo (' <div>
    <div class="wrapper">
        <br>
        <div class="typing-demo">

            Hi friend👋👋, WELCOME!!!!!!
        </div>
    </div>');
        }
        ?>



    </div>
    <div class="footer text-center p-3 mt-0">
        ⓒDennis Mutuku ,2022


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3d21027bf4.js" crossorigin="anonymous"></script>
</body>

</html>