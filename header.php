<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        include 'header.php';
        ?>
        <nav class="navbar navbar-expand-lg bg-secondary position-sticky z-3 top-0 ">
        <div class="container-fluid">
            <div class="navbar-brand text-light">
                <img src="images/Capture d'écran 2025-09-24 101405.png" alt="Logo" style="width:40px;" class="rounded-pill text-secondary me-2">Calendrier OFPPT
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.html"><button class="btn btn-secondary">Accueil</button></a></li>
                <li class="nav-item"><a href="Vacances.html"><button class="btn btn-secondary">Vacences</button></a></li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">Choisir un groupe</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">​ᴅᴇᴠ​ DEV201</a></li>
                            <li><a class="dropdown-item" href="#">​ᴅᴇᴠ DEV202</a></li>
                            <li><a class="dropdown-item" href="#">ᴅᴇᴠ DEV203</a></li>
                        </ul>
                </div>
            </ul>
        </div>
    </nav>
</body>
</html>