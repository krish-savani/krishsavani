<?php 
    include("partials/_config.php");

    $sql = "SELECT * FROM `info` WHERE `info`.`id` = 1";
    $info_result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_assoc($info_result);
?>

<header id="header" class="header position-fixed d-flex w-100 text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
            <h1 class="h1 m-0 py-2 position-relative"><a href="index.php" class="text-white text-decoration-none font-caudex"><?=$info['name']; ?></a></h1>
            <button class="navbar-toggler py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div id="nav-icon1" class="position-relative m-0"><span class="d-block position-absolute w-100"></span><span class="d-block position-absolute w-100"></span><span class="d-block position-absolute w-100"></span></div>
            </button>
            <div class="collapse navbar-collapse justify-content-end navbar-div" id="navbarSupportedContent">
                <ul class="navbar m-0 justify-content-evenly px-0 py-2 list-unstyled">
                    <li class="list-item d-inline-block position-relative border-0">
                        <a href="index.php" class="position-relative text-white text-decoration-none"><span class="d-block py-2 px-3">Home</span></a>
                    </li>
                    <li class="list-item d-inline-block position-relative border-0">
                        <a href="index.php#resume" class="position-relative text-white text-decoration-none"><span class="d-block py-2 px-3">Resume</span></a>
                    </li>
                    <li class="list-item d-inline-block position-relative border-0">
                        <a href="index.php#portfolio" class="position-relative text-white text-decoration-none" data-target="portfolio"><span class="d-block py-2 px-3">Portfolio</span></a>
                    </li>
                    <li class="list-item d-inline-block position-relative border-0">
                        <a href="index.php#blog" class="position-relative text-white text-decoration-none"><span class="d-block py-2 px-3">Blog</span></a>
                    </li>
                    <li class="list-item d-inline-block position-relative border-0">
                        <a href="index.php#contact" class="position-relative text-white text-decoration-none"><span class="d-block py-2 px-3">Contact</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>