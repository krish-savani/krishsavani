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
            $sql = "SELECT `blog_img`, `blog_date`, `blog_title`, `blog_description`, `blog_link` FROM `blog`";
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
                    <?php 
                        if (mysqli_num_rows($blog_result) > 0) {
                            while ($blog = mysqli_fetch_array($blog_result)) {
                                echo '<div class="col-lg-4 col-md-6">
                                        <div class="shadow-hover h-100">
                                            <div class="outer-shadow overflow-hidden h-100 position-relative d-flex flex-column border-radius-10">
                                                <a class="post_box inner-shadow p-4 text-decoration-none h-100 d-flex flex-column" href="'. $blog['blog_link'].'">
                                                    <div class="post_img overflow-hidden position-relative">
                                                        <img src="assets/image/'. $blog['blog_img'] .'" class="img-fluid" alt="">
                                                    </div>
                                                    <span class="post_date fs-6 d-block mb-2">' . $blog['blog_date'] . '</span>
                                                    <h3 class="post_title text-white fs-4 fw-bold mb-4 position-relative text_dark_blue">' . $blog['blog_title'] . '</h3>
                                                    <span class="readmore mt-auto d-flex text-center align-items-center fw-bold">Read More<i class="fa fa-arrow-right fs-6"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        }
                    ?>
                </div> 
            </div>
        </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="assets/Js/main.js"></script>
</body>
</html>