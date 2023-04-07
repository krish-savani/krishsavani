<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Krish Savani</title>
    <?php
        include("partials/_common-link.php");
    ?>
</head>
<body>
    <?php
        include("partials/_header.php"); 
    ?>
    <?php
            $sql = "SELECT `blog_img`, `blog_date`, `blog_title`, `blog_description` FROM `blog`";
            $blog_result = mysqli_query($conn, $sql);
            // $blog = mysqli_fetch_assoc($blog_result);
    ?>

    <section id="blog" class="pt-lg-5 pt-4">
        <div class="container" data-aos="fade-up">
            <div class="row text-center pt-lg-5 pt-4">
                <div class="col-lg-12">
                    <h2 class="text-white py-4 m-0">Blog</h2>
                </div>
            </div>
            <div class="row gy-4 pb-lg-5 pb-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="inside">
                        <div class="row box-shadow border-radius-10">
                            krish
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 left">
                    <div class="inside sticky">
                        <div class="row ps-lg-4 pb-4 pb-lg-0">
                            <div class="col-md-12 box-shadow p-4 pt-lg-4 pt-0 border-radius-10">
                                <div class="row my-4 mb-lg-5">
                                    <div class="col">
                                        <h6 class="fw-bold text-white mb-0 text-uppercase mb-2">Krish Savani
                                        </h6>
                                        <hr class="inner-shadow divider divider-left divider-lg float-left">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="item position-relative">
                                            <div class="contact-inner-shadow d-block border-radius-20">
                                                <div class="p-2">
                                                    <div class="contact-outer-shadow border-radius-20">
                                                        <img class="img-fluid w-100 p-1 border-radius-20" src="assets/image/logo.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <ul class="list-inline icon-ul text-center mb-0 mt-4">
                                        <li class="shadow-hover border-radius-50 m-1">
                                            <div class="outer-shadow border-radius-50">
                                                <a class="inner-shadow border-radius-50 social-icons btn-icon" href="https://www.facebook.com/profile.php?id=100009109843638">
                                                    <span class="fab fa-facebook-f social-icons-inner"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="shadow-hover border-radius-50 m-1">
                                            <div class="outer-shadow border-radius-50">
                                                <a class="inner-shadow border-radius-50 social-icons btn-icon" href="#">
                                                    <span class="fab fa-twitter social-icons-inner"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="shadow-hover border-radius-50 m-1">
                                            <div class="outer-shadow border-radius-50">
                                                <a class="inner-shadow border-radius-50 social-icons btn-icon" href="https://www.instagram.com/krish_savani_official/">
                                                    <span class="fab fa-instagram social-icons-inner"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="shadow-hover border-radius-50 m-1">
                                            <div class="outer-shadow border-radius-50">
                                                <a class="inner-shadow border-radius-50 social-icons btn-icon" href="https://www.linkedin.com/in/krish-savani-184287190/">
                                                    <span class="fab fa-linkedin social-icons-inner"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="shadow-hover border-radius-50 m-1">
                                            <div class="outer-shadow border-radius-50">
                                                <a class="inner-shadow border-radius-50 social-icons btn-icon" href="https://github.com/krish-savani">
                                                    <span class="fab fa-github social-icons-inner"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="shadow-hover border-radius-50 m-1">
                                            <div class="outer-shadow border-radius-50">
                                                <a class="inner-shadow border-radius-50 social-icons btn-icon" href="https://www.youtube.com/@Nucleus-Gamer">
                                                    <span class="fab fa-youtube social-icons-inner"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="assets/Js/main.js"></script>
</body>
</html>