<?php
    include("partials/_config.php");

    $sql = "SELECT * FROM `info` WHERE `info`.`id` = 1";
    $info_result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_assoc($info_result);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krish's Portfolio</title>
    <?php
        include("partials/_common-link.php");
    ?>
</head>
<body class="font-lato">
    <?php 
        include("partials/_header.php");
    ?>
    <div id="loader">
        <div class="loader-inner" style="display: block;">
            <div class="item position-relative loader_circle">
                    <div class="loader_inner_circle"></div>
            </div>
        </div>
    </div>

    <main>
        <div class="hero position-relative vh-100">
            <video id="backround-video" class="w-100 h-100" role="presentation"
                crossorigin="anonymous" playsinline="true" preload="auto" loop="true" muted="true" controls="false" autoplay="true"
                src="assets/video/background-video.mp4"></video>
            <div class="intro-section position-absolute">
                <div class="align-center text-white text-center position-relative">
                    <img class="rounded-circle my-image" src="assets/image/logo.jpg" alt="hero-img">
                    <h2 class="name-text font-caudex"><?=$info['name']; ?></h2>
                    <div class="text-start mb-4">
                        <span class="iam"><?=$info['title']; ?></span>
                        <span class="type-text pe-1">Youtube</span><span class="typed-cursor">|</span><span class="typed-cursor">|</span><span class="typed-cursor">|</span><span class="typed-cursor">|</span><span class="typed-cursor">|</span><span class="typed-cursor typed-cursor--blink">|</span>
                    </div>
                    <!-- <a href="#intro"><img class="down-arrow rounded-circle" src="assets/image/down-icon.png" alt=""></a> -->
                    <!-- <a href="#intro"><div class="down-arrow"></div></a> -->
                    <a href="#wid" class="down-arrow text-decoration-none rounded-circle text-white">
                        <i class="arrow bounce fa fa-arrow-down" href="#"></i>
                    </a>
                </div>
            </div>
        </div>
        <section id="wid">
            <div class="container">
                <div class="row justify-content-between my-0 mx-auto">
                    <div class="row text-center pt-lg-5 pt-4">
                        <div class="col-lg-12">
                            <h2 class="text-white py-4 m-0">What I'm Doing</h2>
                        </div>
                    </div>
                    <div class="box-shadow border-radius-10">
                        <div class="row p-3 p-sm-4">
							<div class="col-12 col-lg-6 shadow-hover my-4">
                                <div class="outer-shadow border-radius-10">                     
                                    <div class="inner-shadow border-radius-10 p-3 p-sm-4">
                                        <div class="row text-white">
                                            <div class="col-12 col-sm-1 text-center position-relative d-flex pb-3 pb-md-0 justify-content-center">
                                                <img class="icon-svg w-35px" src="assets/icons/SVG/computer-display.svg" alt="web-design-icon">
                                            </div>
                                            <div class="col-12 col-sm-11 px-3">
                                                <h3 class="fs-5 fw-bold">Web Design</h3>
                                                <p>I design engaging and user-friendly websites using my expertise in visual design, UX, and front-end development. I create responsive designs that work well on all devices and platforms. Using design tools like Adobe XD, Sketch, and Figma and front-end development tools like HTML, CSS, and JavaScript, I stay up-to-date with industry trends to create modern and effective designs. My goal is to create websites that provide a positive user experience and achieve the client's business objectives.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <div class="col-12 col-lg-6 shadow-hover my-lg-4">
                                <div class="outer-shadow border-radius-10">                     
                                    <div class="inner-shadow border-radius-10 p-3 p-sm-4">
                                        <div class="row text-white">
                                            <div class="col-12 col-sm-1 text-center position-relative d-flex pb-3 pb-md-0 justify-content-center">
                                                <img class="icon-svg w-35px" src="assets/icons/SVG/globe.svg" alt="web-development-icon">
                                            </div>
                                            <div class="col-12 col-sm-11 px-3">
                                                <h3 class="fs-5 fw-bold">Web Development</h3>
                                                <p>I build custom websites and web applications using programming languages like HTML, CSS, JavaScript, and back-end languages and frameworks. I collaborate with clients, design and plan architectures, and focus on accessibility, performance, and security. I use development tools like Git, AWS, and Docker, stay up-to-date with the latest trends, and strive to deliver high-quality solutions. My goal is to create seamless user experiences and help businesses achieve their objectives.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <div class="col-12 col-lg-6 shadow-hover my-4">
                                <div class="outer-shadow border-radius-10">                     
                                    <div class="inner-shadow border-radius-10 p-3 p-sm-4">
                                        <div class="row text-white">
                                            <div class="col-12 col-sm-1 text-center position-relative d-flex pb-3 pb-md-0 justify-content-center">
                                                <img class="icon-svg w-35px" src="assets/icons/SVG/graphic-design.svg" alt="Graphic-design-icon">
                                            </div>
                                            <div class="col-12 col-sm-11 px-3">
                                                <h3 class="fs-5 fw-bold">Graphics Design</h3>
                                                <p>I specialize in creating visually engaging designs for print and digital media, utilizing my expertise in design principles, typography, and color theory. My design process involves understanding the client's needs, conducting research, and developing concepts that align with the brand's identity. I use design tools like Adobe Photoshop, Illustrator, and InDesign to create high-quality designs tailored to the client's requirements. My goal is to create designs that stand out, communicate a clear message, and leave a lasting impression on the target audience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <div class="col-12 col-lg-6 shadow-hover my-lg-4 mt-0 mb-4">
                                <div class="outer-shadow border-radius-10">                     
                                    <div class="inner-shadow border-radius-10 p-3 p-sm-4">
                                        <div class="row text-white">
                                            <div class="col-12 col-sm-1 text-center position-relative d-flex pb-3 pb-md-0 justify-content-center">
                                                <img class="icon-svg w-35px" src="assets/icons/SVG/photo-gallery.svg" alt="Photography-icon">
                                            </div>
                                            <div class="col-12 col-sm-11 px-3">
                                                <h3 class="fs-5 fw-bold">Photography</h3>
                                                <p>As a skilled photographer, I specialize in capturing authentic moments and creating compelling visual stories through my photography. My process involves listening to and understanding the client's needs, selecting the appropriate equipment and settings, and utilizing advanced photography tools and techniques such as natural and studio lighting and editing software to enhance my photographs. My ultimate goal is to create images that leave a lasting impression, tell a unique story, and effectively communicate the desired message.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="resume">
            <div class="container">
                <div class="row text-center pt-lg-5 pt-4">
                    <div class="col-lg-12">
                        <h2 class="text-white py-4 m-0">My Resume</h2>
                    </div>
                </div>
                <div class="tabs position-relative overflow-hidden my-0 mx-auto tabs-style-flip">
                    <nav>
                        <ul class="tabs-ul position-relative d-flex list-unstyled justify-content-center my-0 mx-auto p-0">
                            <li class="position-relative d-block m-0 text-center"><a href="#about-me" class="position-relative d-block overflow-hidden text-decoration-none py-1 py-sm-2 py-md-3 tab-current"><span class="text-uppercase fw-bold">ABOUT ME</span></a></li>
                            <li class="position-relative d-block m-0 text-center"><a href="#skills" class="position-relative d-block overflow-hidden text-decoration-none py-1 py-sm-2 py-md-3"><span class="text-uppercase fw-bold">SKILLS</span></a></li>
                            <li class="position-relative d-block m-0 text-center"><a href="#education" class="position-relative d-block overflow-hidden text-decoration-none py-1 py-sm-2 py-md-3"><span class="text-uppercase fw-bold">EDUCATION</span></a></li>
                            <li class="position-relative d-block m-0 text-center"><a href="#certificats" class="position-relative d-block overflow-hidden text-decoration-none py-1 py-sm-2 py-md-3"><span class="text-uppercase fw-bold">CERTIFICATS</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap p-1">
                        <section id="about-me" class="box-shadow w-100 p-3 p-sm-4 br-bottom-10"> 
                            <div class="row">
                                <div class="col-lg-6 col-12 pb-5">
                                    <div class="content text-white">
                                        <div class="timeline personal-info">
                                            <div class="shadow-hover">
                                                <h2 class="m-0 ms-4 py-2 ps-5">
                                                    Personal Information
                                                </h2>
                                                <div class="outer-shadow border-radius-30 position-absolute" style="top: 0;">
                                                    <div class="position-relative rounded-circle mx-auto ui-icon ui-icon-md inner-shadow ">
                                                        <!-- <i class="text-primary fa-solid fa-person"></i> -->
                                                        <img class="icon-svg w-35px" src="assets/icons/SVG/user-male.svg" alt="male">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-content shadow-hover letter-spacing-1">
                                                <div class="outer-shadow">
                                                    <div class="p-3 p-sm-4 inner-shadow border-radius-10">
                                                        <h3 class="m-0">Name: Krish Savani</h3>
                                                        <p class="my-1">Nationality: Indian</p>
                                                        <p class="mb-3">DOB: 25<sup>th</sup> August 2003</p>
                                                        <p class="letter-spacing-0">
                                                            Hi, I'm Krish Savani. When it comes to delivering results, I
                                                            pride myself on consistently exceeding expectations. My
                                                            track record speaks for itself, and I am always striving to
                                                            push myself further and achieve even greater things.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 pb-2">
                                    <div class="content text-white">
                                        <div class="timeline additional-info">
                                            <div class="shadow-hover">
                                                <h2 class="m-0 ms-4 py-2 ps-5">
                                                    Additional Information
                                                </h2>
                                                <div class="outer-shadow border-radius-30 position-absolute" style="top: 0;">
                                                    <div class="position-relative rounded-circle mx-auto ui-icon ui-icon-md inner-shadow ">
                                                            <!-- <i class="text-primary fa-solid fa-circle-info"></i> -->
                                                            <img class="icon-svg w-30px" src="assets/icons/GIF/info-shake.gif" alt="information">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-content shadow-hover letter-spacing-1">
                                                <div class="outer-shadow">
                                                    <div class="p-3 p-sm-4 inner-shadow border-radius-10">
                                                        <h3 class="m-0">Hobbies</h3>
                                                        <p class="my-1 mb-3">Energized Living</p>
                                                        <p class="letter-spacing-0">
                                                            Although I am a dedicated coder, I also make it a priority
                                                            to stay active by playing sports such as cricket and
                                                            vollyball. This not only keeps me physically fit but also
                                                            helps me maintain a healthy work-life balance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="skills" class="box-shadow" style="display: none;">
                            <div class="position-relative mb-lg-5 mb-4 professional-skill">
                                <div class="shadow-hover">
                                    <h2 class="m-0 ms-4 py-2 ps-5 text-white">
                                        Professional Skills
                                    </h2>
                                    <div class="outer-shadow border-radius-30 position-absolute" style="top: 0;">
                                        <div class="position-relative rounded-circle mx-auto ui-icon ui-icon-md inner-shadow ">
                                                <!-- <i class="text-primary fa-solid fa-gear rotation"></i> -->
                                                <img class="icon-svg w-30px" src="assets/icons/SVG/critical-thinking.svg" alt="skill">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-white">
                                <div class="col-lg-6">
                                    <div class="row skill mb-5">
                                        <div class="col-md-11">
                                            <ul class="skills-list list-inline mb-0">
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Photoshop</span><span>90%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 90%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Illustrator</span><span>85%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 85%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Figma</span><span>75%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 75%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>XD</span><span>75%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 75%;">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-1 ps-2 pe-3 position-relative d-flex align-items-center justify-content-center">
                                            <div class="title text-center text-uppercase ">
                                                <span class="letter-spacing-1">Graphics</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row skill mb-5">
                                        <div class="col-md-11">
                                            <ul class="skills-list list-inline mb-0">
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Html</span><span>95%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 95%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>CSS</span><span>90%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 90%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Bootstrap</span><span>85%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 85%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Javascript</span><span>85%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 85%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>jquery</span><span>75%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 75%;">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-1 ps-2 pe-3 position-relative d-flex align-items-center justify-content-center">
                                            <div class="title text-center text-uppercase ">
                                                <span class="letter-spacing-1">UI/UX</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-white">
                                <div class="col-lg-6">
                                    <div class="row skill mb-5">
                                        <div class="col-md-11">
                                            <ul class="skills-list list-inline mb-0">
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>C++</span><span>80%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 80%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>PHP</span><span>70%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 70%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Python</span><span>65%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 65%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>C#</span><span>75%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 75%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Java</span><span>75%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 75%;">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-1 ps-2 pe-3 position-relative d-flex align-items-center justify-content-center">
                                            <div class="title text-center text-uppercase ">
                                                <span class="letter-spacing-1">Programming</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row skill mb-5">
                                        <div class="col-md-11">
                                            <ul class="skills-list list-inline mb-0">
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>MySQL</span><span>90%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 90%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Sql</span><span>85%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 85%;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h6 class="text-uppercase d-flex justify-content-between align-items-center">
                                                        <span>Sql Server</span><span>75%</span>
                                                    </h6>
                                                    <div class="progress d-block position-relative w-100 overflow-visible mb-3">
                                                        <div class="percentage position-absolute" style="width: 75%;">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-1 ps-2 pe-3 position-relative d-flex align-items-center justify-content-center">
                                            <div class="title text-center text-uppercase ">
                                                <span class="letter-spacing-1">Database</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="education" class="box-shadow w-100 p-3 p-sm-4" style="display: none;">
                            <div class="row pt-lg-5 pt-4">
                                <div class="col-lg-6 col-12 pb-5">
                                    <div class="content text-white">
                                        <div class="timeline education">
                                            <div class="shadow-hover">
                                                <h2 class="m-0 ms-4 py-2 ps-5">
                                                    Education
                                                </h2>
                                                <div class="outer-shadow border-radius-30 position-absolute" style="top: 0;">
                                                    <div class="position-relative rounded-circle mx-auto ui-icon ui-icon-md inner-shadow ">
                                                        <!-- <i class="text-primary fa-solid fa-graduation-cap"></i> -->
                                                        <img class="icon-svg w-30px" src="assets/icons/GIF/book.gif" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-content shadow-hover">
                                                <div class="outer-shadow">
                                                    <div class="p-3 p-sm-4 inner-shadow border-radius-10">
                                                        <h4 class="letter-spacing-1">BCA (Bachelor's in Computer
                                                            Application)</h4>
                                                        <p class="letter-spacing-1 m-0">Veer Narmad South Gujarat
                                                            University <span class="d-block d-md-inline">(2021 - 2024)</span></p>
                                                        <p class="pt-sm-4 pt-3 ps-0 pb-0"><i class="fa-solid fa-square-poll-vertical"></i> CGPA
                                                            <span>9.0/10</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 pb-2">
                                    <div class="content text-white">
                                        <div class="timeline job-exp">
                                            <div class="shadow-hover">
                                                <h2 class="m-0 ms-4 py-2 ps-5">
                                                    Job Experience
                                                </h2>
                                                <div class="outer-shadow border-radius-30 position-absolute" style="top: 0;">
                                                    <div class="position-relative rounded-circle mx-auto ui-icon ui-icon-md inner-shadow ">
                                                        <!-- <i class="text-primary fa-solid fa-briefcase"></i> -->
                                                        <img class="icon-svg w-30px" src="assets/icons/SVG/home-office.svg" alt="male">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-content shadow-hover">
                                                <div class="outer-shadow">
                                                    <div class="p-3 p-sm-4 inner-shadow border-radius-10">
                                                        <h4 class="letter-spacing-1">WEB Developer</h4>
                                                        <h4 class="letter-spacing-1 mb-3">Marquee Solution <span class="d-block d-md-inline">( <i class="fa-solid fa-calendar-days"></i> 2021 - Present )</span> </h4>
                                                        <ul class="ps-3">
                                                            <li>create website layouts and user interfaces.</li>
                                                            <li>Developing website and web application functionality
                                                                using programming languages such as HTML, CSS,
                                                                JavaScript, and server-side language such as PHP,
                                                                Python.</li>
                                                            <li>Optimizing the website or web application for search
                                                                engines and ensuring it is responsive and
                                                                mobile-friendly.</li>
                                                            <li>Keeping up to date with the latest technologies and
                                                                trends in web development.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="certificats" style="display: none;">
                            <p>4</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <?php
            $sql = "SELECT `p_img`, `p_title`, `p_description`, `p_filter` FROM `portfolio`";
            $portfolio_result = mysqli_query($conn, $sql);
            // $blog = mysqli_fetch_assoc($blog_result);
        ?>
        <section id="portfolio" class="portfolio">
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
        
                <div class="row gy-4 pb-lg-5 pb-4 justify-content-center portfolio-container h-100 position-relative" data-aos="fade-up" data-aos-delay="200">
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
                    
                    <?php 
                    if (mysqli_num_rows($portfolio_result) > 0) {
                        $count = 0;
                        while ($portfolio = mysqli_fetch_array($portfolio_result)) {
                            $count++; 
                            if ($count == 4) {
                                break;
                            }
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
                </div>

                <div class="row text-center">
                    <div class="col-lg-12">
                        <a href="portfolio.php" class="text-white text-decoration-none pt-4 m-0">View All</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog section -->
        <?php
            $sql = "SELECT `blog_img`, `blog_date`, `blog_title`, `blog_description`, `blog_link` FROM `blog`";
            $blog_result = mysqli_query($conn, $sql);
            // $blog = mysqli_fetch_assoc($blog_result);
        ?>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row text-center pt-lg-5 pt-4">
                    <div class="col-lg-12">
                        <h2 class="text-white py-4 m-0">Blog</h2>
                    </div>
                </div>
                <div class="row gy-4 pb-lg-5 pb-4 justify-content-center">
                    <?php 
                    if (mysqli_num_rows($blog_result) > 0) {
                        $count = 0;
                        while ($blog = mysqli_fetch_array($blog_result)) {
                            $count++; 
                            if ($count == 4) {
                                break;
                            }
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
                <div class="row text-center">
                    <div class="col-lg-12">
                        <a href="blog.php" class="text-white text-decoration-none m-0">View All</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row text-center pt-lg-5 pt-4">
                    <div class="col-lg-12">
                        <h2 class="text-white py-4 m-0">Contact</h2>
                    </div>
                </div>
                <div class="row justify-content-between my-0 mx-auto pb-5">
                    <div class="col-lg-4 left">
                        <div class="inside sticky">
                            <div class="row pe-lg-4 pb-4 pb-lg-0">
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
                    <div class="col-lg-8">
                        <div class="inside">
                            <div class="row box-shadow border-radius-10">
                                <div class="col-md-12 p-5">
                                    <div class="row mb-lg-5 mb-4 ">
                                        <div class="col">
                                            <h6 class="fw-bold text-white mb-0 text-uppercase mb-2">Map location
                                            </h6>
                                            <hr class="inner-shadow divider divider-left divider-lg float-left">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="item position-relative">
                                                <div class="pulsating_circle"></div>
                                                <a class="contact-inner-shadow d-block border-radius-20" href="https://goo.gl/maps/zLV1UoyTCfttgWLo7" target="_blank">
                                                    <div class="p-2">
                                                        <div class="contact-outer-shadow border-radius-20">
                                                            <img class="img-fluid w-100 p-1 border-radius-20" src="assets/image/dark-maps.png" alt="map">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-5 mb-4">
                                        <div class="col">
                                            <h6 class="fw-bold text-white mb-0 text-uppercase mb-2">Contact Info
                                            </h6>
                                            <hr class="inner-shadow divider divider-left divider-lg float-left">
                                        </div>
                                    </div>
                                    <div class="row info-before position-relative contact-info-content justify-content-center">
                                        <div class="col-md-12 mb-4 z-index-1">
                                            <div class="w-75 m-auto ">
                                                <div class="border-radius-80">
                                                    <div class="contact-inner-shadow position-relative ui-icon ui-icon-xl ui-icon-lg-2 ">
                                                        <img class="icon-svg w-60px" src="assets/icons/SVG/place-marker.svg" alt="place">
                                                    </div>
                                                </div>
                                                <h2 class="h5 font-size-18 text-center text-white mx-0 my-2 my-lg-4">Surat, Gujarat<br>IN, 395 006.
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-lg-0 z-index-1 contact_eps">
                                            <div class="text-center">
                                                <div class="border-radius-80">
                                                    <div class="contact-inner-shadow position-relative ui-icon ui-icon-lg ">
                                                        <a href="mailto:savanikrish3.com">
                                                            <img class="icon-svg w-30px" src="assets/icons/GIF/gmail.gif" alt="gmail">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="shadow-hover border-radius-30 mt-3 mb-0 p-0 mx-auto">
                                                    <div class="outer-shadow border-radius-30">
                                                            <a href="mailto:savanikrish3.com" class="text-secondary border-radius-30 inner-shadow text-decoration-none d-block m-0 px-3 pt-1 pb-2 fs-14">
                                                                <span class="d-block">Email :</span> savanikrish3@gmail.com </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-lg-0 z-index-1 contact_eps">
                                            <div class="text-center">
                                                <div class="border-radius-80">
                                                    <div class="contact-inner-shadow position-relative ui-icon ui-icon-lg ">
                                                        <a href="tel:+91 6352996927">
                                                            <img class="icon-svg w-30px" src="assets/icons/SVG/phone-ringing.svg" alt="phone">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="shadow-hover border-radius-30 mt-3 mb-0 p-0 mx-auto">
                                                    <div class="outer-shadow border-radius-30">
                                                            <a href="tel:+91 6352996927" class="text-secondary border-radius-30 inner-shadow text-decoration-none d-block m-0 px-3 pt-1 pb-2 fs-14">
                                                                <span class="d-block">Phone :</span>+91 6352996927 </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-lg-0 z-index-1 contact_eps">
                                            <div class="text-center">
                                                <div class="border-radius-80">
                                                    <div class="contact-inner-shadow position-relative ui-icon ui-icon-lg ">
                                                        <a href="index.html">
                                                            <img class="icon-svg w-30px" src="assets/icons/SVG/internet.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="shadow-hover border-radius-30 mt-3 mb-0 p-0 mx-auto">
                                                    <div class="outer-shadow border-radius-30">
                                                            <a href="index.html" class="text-secondary border-radius-30 inner-shadow text-decoration-none d-block m-0 px-3 pt-1 pb-2 fs-14">
                                                                <span class="d-block">Site :</span> krishsavani.com </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-5 mb-4">
                                        <div class="col">
                                            <h6 class="fw-bold text-white mb-0 text-uppercase mb-2">Get in touch
                                            </h6>
                                            <hr class="inner-shadow divider divider-left divider-lg float-left">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center get-in-touch-content">
                                        <div class="col-md-12">
                                        <form class="contact-form" method="post" action="send.php">
                                            <div class="row">
                                                <div class="col-sm-6 shadow-hover border-radius-30">
                                                    <div class="outer-shadow border-radius-30 mb-3">
                                                        <input class="inner-shadow form-control h-100 " placeholder="Name" value="" id="name" name="name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 shadow-hover border-radius-30">
                                                    <div class="outer-shadow border-radius-30 mb-3">
                                                        <input class="inner-shadow form-control h-100 " placeholder="Email" value="" id="email" name="email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 shadow-hover border-radius-30">
                                                    <div class="outer-shadow border-radius-30 mb-3">
                                                    <input class="inner-shadow form-control h-100 " value="" id="phone" name="phone" placeholder="Phone Number" type="tel">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 shadow-hover border-radius-30">
                                                    <div class="outer-shadow border-radius-30 mb-3">
                                                    <input class="inner-shadow form-control h-100 " value="" id="subject" name="subject" placeholder="Subject" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12 shadow-hover border-radius-30">
                                                    <div class="outer-shadow border-radius-30 mb-3">
                                                    <textarea class="border-radius-30 inner-shadow form-control   resize-n " name="message" placeholder="Message" id="message" rows="6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 ">
                                                    <div class="shadow-hover border-radius-30 d-inline-block">
                                                        <div class="outer-shadow border-radius-30  text-center">
                                                            <a class="send inner-shadow border-radius-30 d-block py-2 px-4 font-size-15 text-primary fw-bold text-decoration-none" href="#">
                                                            Send message
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="success">
                                            <h2>Your message has been sent. Thank you!</h2>
                                        </div>
                                        <div id="error">
                                            <h2>Sorry your message can not be sent.</h2>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-6 pt-6 mb-6">
                                    <hr class="divider divider-lg divider-center mx-auto mt-1 mb-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <hr class="divder">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="logo">
                            <a href="index.html" class="text-decoration-none fw-bold align-middle d-flex justify-content-center align-items-center ">
                                <img class="footer-logo rounded-circle m-2" src="assets/image/logo.jpg" alt="logo">
                                <!-- <span class="text-white">Krish Savani</span> -->
                            </a>
                        </div>
                        <p class="text-white">© 2023. All rights reserved by <a class="text-white text-decoration-none" target="_blank" href="https://index.html">Krish Savani</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="assets/Js/main.js"></script>
</body>

</html>