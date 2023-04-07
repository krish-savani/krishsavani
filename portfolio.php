<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php
        include("partials/_common-link.php");
   ?>
</head>
<body>
    <?php
        include("partials/_header.php"); 
    ?>
    <?php
        $sql = "SELECT `p_img`, `p_title`, `p_description`, `p_filter` FROM `portfolio`";
        $portfolio_result = mysqli_query($conn, $sql);
        // $portfolio = mysqli_fetch_assoc($portfolio_result);
    ?>
    <section id="portfolio" class="pt-lg-5 pt-4">
        <div class="container" data-aos="fade-up">
            <div class="row text-center pt-lg-5 pt-4">
                <div class="col-lg-12">
                    <h2 class="text-white py-4 m-0">Portfolio</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio_flters" class="mt-0 mx-auto mb-4 bg-white text-center py-1 px-0">
                        <li data-filter="filter-all" id="all" class="shadow-hover filter-active d-inline-flex fs-6 text_grey rounded-pill m-0 p-0">
                            <div class="outer-shadow rounded-pill">
                                <div class="inner-shadow rounded-pill py-2 px-4">All</div>
                            </div>
                        </li>
                    <li data-filter="filter-app" id="app" class="shadow-hover d-inline-flex fs-6 text_grey rounded-pill m-0 px-2">
                        <div class="outer-shadow rounded-pill">
                            <div class="inner-shadow rounded-pill py-2 px-4">App</div>
                        </div>
                    </li>
                    <li data-filter="filter-web" id="web" class="shadow-hover d-inline-flex fs-6 text_grey rounded-pill m-0 p-0 pe-2">
                        <div class="outer-shadow rounded-pill">
                            <div class="inner-shadow rounded-pill py-2 px-4">Web</div>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
    
            <div class="row gy-4 pb-lg-5 pb-4 justify-content-center portfolio-container position-relative" data-aos="fade-up" data-aos-delay="200">
                <?php 
                    if (mysqli_num_rows($portfolio_result) > 0) {
                        while ($portfolio = mysqli_fetch_array($portfolio_result)) {
                            echo '<div class="col-lg-4 col-md-6 portfolio-item '. $portfolio['p_filter'] .'">
                                    <div class="portfolio_wrap position-relative overflow-hidden border-radius-10">
                                        <img src="assets/image/'. $portfolio['p_img'] .'" class="img-fluid" alt="">
                                        <div class="portfolio_info text-center d-flex flex-column justify-content-center align-items-center p-3 p-md-0">
                                            <h4 class="fs-5 fw-bold text_dark_blue">' . $portfolio['p_title'] . '</h4>
                                            <div class="portfolio_links_div text-center">
                                                <a href="assets/image/'. $portfolio['p_img'] .'" title="More Details" class="portfolio_links text-white bg_blue d-inline-flex align-items-center justify-content-center rounded-circle text-decoration text-decoration-none">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }
                ?>

                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio_wrap position-relative overflow-hidden border-radius-10">
                        <img src="assets/image/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio_info text-center d-flex flex-column justify-content-center align-items-center p-3 p-md-0">
                            <h4 class="fs-5 fw-bold text_dark_blue">App 1</h4>
                            <p class="fs-6 text-uppercase p-0 m-0 text_dark_blue">App</p>
                            <div class="portfolio_links_div text-center">
                                <a href="portfolio-details.html" title="More Details" class="portfolio_links text-white bg_blue d-inline-flex align-items-center justify-content-center rounded-circle text-decoration text-decoration-none">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  portfolio-item filter-web">
                    <div class="portfolio_wrap position-relative overflow-hidden border-radius-10">
                        <img src="assets/image/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio_info text-center d-flex flex-column justify-content-center align-items-center p-3 p-md-0">
                            <h4 class="fs-5 fw-bold text_dark_blue">Web 1</h4>
                            <p class="fs-6 text-uppercase p-0 m-0 text_dark_blue">Web</p>
                            <div class="portfolio_links_div text-center">
                                <a href="portfolio-details.html" title="More Details" class="portfolio_links text-white bg_blue d-inline-flex align-items-center justify-content-center rounded-circle text-decoration text-decoration-none">View</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="assets/Js/main.js"></script>
</body>
</html>