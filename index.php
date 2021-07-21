<!DOCTYPE html>
<html lang="en" class="auto-container">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laltin Saving and Credit Cooperatives</title>
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-awesome.css">

</head>

<body>

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous">
        </script>
    <header class="main-header">
        <div class="row">
            <div class="col-11"></div>
            <div class="col-1 auto-container">
                <a id="button"><span class="fa fa-angle-up"></span></a>
            </div>
        </div>
        <script>
            var btn = $('#button');

            $(window).scroll(function () {
                if ($(window).scrollTop() > 300) {
                    btn.addClass('show');
                } else {
                    btn.removeClass('show');
                }
            });

            btn.on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, '300');
            });
        </script>
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left">
                    <div class="text">Sunday to Friday 10:00AM - 4:00PM</div>
                </div>

                <div class="top-right">
                    <ul class="social-icon-one clearfix">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                    </ul>
                    <div class="btn-box">
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Login <i
                                    class="far fa-arrow-alt-circle-right"></i></span></a>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- /.top-bar -->
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white  border-top border-bottom">
            <div class="container">
                <a href="index.html"><img src="images/logo.png" alt="Sahakari Logo"></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto ">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarFeatures" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account & Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarFeatures">
                                <li><a class="dropdown-item" href="deposit.php">Deposit</a></li>
                                <li> <a class="dropdown-item" href="loan.php">Loan Schemes</a></li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarFeatures" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarFeatures">
                                <li><a class="dropdown-item" href="aboutUs.php">About Us</a></li>
                                <li> <a class="dropdown-item" href="team.php">Team</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarFeatures" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarFeatures">
                                <li> <a class="dropdown-item" href="faq.php">FAQ</a></li>
                                <li> <a class="dropdown-item" href="gallery.php">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="careers.php">
                                Careers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="progress"></div>

        <script>
            // For progress Bar
            var h = document.documentElement,
                b = document.body,
                st = 'scrollTop',
                sh = 'scrollHeight',
                progress = document.querySelector('.progress'),
                scroll;

            document.addEventListener('scroll', function () {
                scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
                progress.style.setProperty('--scroll', scroll + '%');
            });
        </script>
    </div>




    <div id="carouselExampleControls" class=" topslider carousel slide container-fluid" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 " src="images/jestha-nagarik.jpg" alt="First slide">
                <div class="container">
                    <div class="slidertext">
                        <h1>Jestha Nagrik</h1>
                        <p>Jestha Nagarik Bachat Khata a saving account , was designed with aim to facilitate the
                            senior
                            citizens with age 60 or above, considering the retirement plans to meet their
                            financial...
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="images/slider2.jpg" alt="Second slide">
                <div class="container">
                    <div class="slidertext">
                        <h1>Special Saving</h1>
                        <p>Start getting 8.5% to 12% interest with minimum balance Rs. 30,000/- to Rs. 50,00,000/-
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="images/banner-saving.jpg" alt="Third slide">
                <div class="container">
                    <div class="slidertext">
                        <h1>Child Education Saving</h1>
                        <p>Start getting ( 12% interest for 1 year), ( 12.5% interest for 2 years) and ( 13%
                            interest
                            for 3 years )
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="tcontainer">
        <div class="ticker-wrap">
            <div class="ticker-move">
                <div class="ticker-item">Poor state of poverty alleviation.</div>
                <div class="ticker-item">Assam flood situation worsens again, death toll rises to 89 .</div>
                <div class="ticker-item">Health sector rife with mismanagement, corruption.</div>
                <div class="ticker-item">Regent Hospital chairman Shahed handed over to RAB .</div>
            </div>
        </div>
    </div>



    <div class="welcome-note">
        <h1>Welcome to Laltin Sahakari</h1>
        <p class="nep-text">“सहकारीको बिकास सँगै सामाजिक बिकास मा समर्पित”</p>
        <p class="welcome-desc">Respecting to the true spirit of Co-operative revolution of government of Nepal,
            Laltin
            Saving and
            Credit Co-operative Society Ltd. is established under the Co-operative Act 2074, with the slogan “your
            satisfaction is our destination” in 99th Aswin, 3000 B.S.<span class="sm-hidden"> With due respect to
                the sprite of co-operative
                revolution of the government of Nepal, Laltin Saving and Credit Co-operative Society Ltd. has been
                operating with number of financial opportunities to its needy members & society as a whole ignoring
                cheap
                assurance of the market since 99th Aswin, 3000 B.S.</span>
        </p>
        <button class="theme-btn btn-style-two"><span class="btn-title">Contact Us</span></button>

    </div>



    <section class="services container-fluid">
        <div class="row">
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="ineer-box">
                    <div class="icon box">
                        <img src="images/time.png">
                    </div>
                    <h4>
                        <a>On Time Service</a>
                    </h4>
                    <div class="text">Laltin Cooperative values Member’s time and is always committed to deliver
                        reliable services within a specified time. </div>

                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="ineer-box">
                    <div class="icon box">
                        <img src="images/team.png">
                    </div>
                    <h4>
                        <a>A Team of Professionals</a>
                    </h4>
                    <div class="text">Laltin Cooperative comprises a team of highly expert finance and management
                        professionals to deliver high class service. </div>

                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="ineer-box">
                    <div class="icon box">
                        <img src="images/technology.png">
                    </div>
                    <h4>
                        <a>Advance Technology</a>
                    </h4>
                    <div class="text">We believe in technology and give the full benefits of the high security and
                        latest technology services to member’s.
                    </div>

                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="ineer-box">
                    <div class="icon box">
                        <img src="images/connection.png">
                    </div>
                    <h4>
                        <a>Strong Connection</a>
                    </h4>
                    <div class="text">We believe in creating a strong relationship with our members and look forward
                        to
                        be in your long lasting service. </div>

                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="ineer-box">
                    <div class="icon box">
                        <img src="images/pearls.png">
                    </div>
                    <h4>
                        <a>PEARLS Monitoring</a>
                    </h4>
                    <div class="text">Organization uses the ‘PEARLS Monitoring System’ to trace its financial
                        indicators.We implement quality service to our Member’s</div>

                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="ineer-box">
                    <div class="icon box">
                        <img src="images/security.png">
                    </div>
                    <h4>
                        <a>Information Security</a>
                    </h4>
                    <div class="text">Member’s information is highly secured at Natural. Organization has a
                        team of experts for data and information security.</div>

                </div>
            </div>
        </div>
    </section>






    <div class="full-preview col-md-12 row">
        <div class="col-sm-12 col-md-4">
            <img src="images/chairman.jpg" alt="a person">
        </div>
        <div class="col-sm-12 col-md-5">
            <div class="content">
                <h1>Message from the Chairman</h1><br>
                <p><span class="quote">“</span>
                    With a proper investment of member’s capital and good return of investment, Laltin Saving &
                    Credit
                    Cooperative has been providing continuous service to its members. <br>
                    We ensure transparency of accounting systems by the use of computer software We are always
                    careful
                    of our member’s economic development.<br>
                <section class="sm-hidden">
                    <p>
                        The Chairman believes, Laltin Co-operative Ltd, which is moving forward with the
                        motive of not compromising on quality service, will soon be established as one of the premier
                        member-centric financial institutions.</p>
                </section>
                </p>
            </div>
        </div>
        <div class="col-sm--12 col-md-3">
            <div class="achievements">
                <h2>Achievements</h2>
                <ul>
                    <li><a href="#">Best Cooperative Award</a></li>
                </ul>
                <ul>
                    <li><a href="#">Best Manager Award</a></li>
                </ul>
                <ul>
                    <li><a href="#">Best Cooperative Business Award-2004</a></li>
                </ul>
                <ul>
                    <li><a href="#">Regional Level Best Cooperative Award</a></li>
                </ul>
                <ul>
                    <li><a href="#">Best Manager of year the 2010 Award</a></li>
                </ul>
                <div class="more">
                    <a class="pull-right" href="#">More Achievements [...]</a>
                </div>
            </div>
        </div>
    </div>




    <section class="clients-section ">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><img src="images/client1.png" alt=""></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><img src="images/client2.jpg" alt=""></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><img src="images/client3.jpg" alt=""></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><img src="images/client4.jpg" alt=""></figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>




    <section class="works container-fluid">
        <div class="sec-title text-center">
            <h2>Services We Offer</h2>
        </div>
        <div class="row">
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <img src="images/remittance.jpg">
                <div class="desc">
                    <h2 class=>Remittance</h2>
                    <p>
                        Our members can send and receive money
                        from every corner of the world with the help of Laltin
                        Remittance service . We offer the secured remit services through our online portal
                        and help you get your money.
                    </p>
                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <img src="images/saving.jpg">
                <div class="desc">
                    <h2 class=>Saving</h2>
                    <p>
                        Laltin Cooperative offers a range of Saving Schemes to
                        our valued Customers, with incredible
                        features. Choose the scheme that best suits for
                        you and we ensure you an amazing returns on your
                        investments.
                    </p>
                </div>
            </div>
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <img src="images/loan.jpg">
                <div class="desc">
                    <h2 class=>Loan</h2>
                    <p>
                        Now fulfill your dreams with the Laltin Loans. Laltin Cooperative offers incredible Loan
                        schemes that will suit our member’s personal needs. Choose from a variety of schemes
                        available to fullfil your needs.
                    </p>
                </div>
            </div>
        </div>
    </section>










    <section class="testimonial-section">
        <div class="sec-title text-center">
            <h2>Our Testinomials</h2>
        </div>
        <div class="outer-box">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="thumb"><img src="images/ceo.png" alt=""></div>
                            <h5 class="name">Barak Obama</h5>
                            <span class="vehicle">Lamborghini 350 GT</span>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor
                            incididunt ut
                            labore dolore magna.enim minim veniam.quis nostrud exercitation.</div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="thumb"><img src="images/ceo.png" alt=""></div>
                            <h5 class="name">Donald Trump</h5>
                            <span class="vehicle">Mercedes-Benz G-Class</span>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet consectur adipisicing elit eiusmod tempor
                            incididunt ut
                            labore dolore magna.enim minim veniam.quis nostrud exercitation.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <?php
    include('bottom.php');
    ?>

</html>