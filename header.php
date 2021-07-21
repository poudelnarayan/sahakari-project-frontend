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
    <script src="js/script.js"></script>
    <div class="row">
        <div class="col-11"></div>
        <div class="col-1 auto-container">
            <a id="button"><span class="fa fa-angle-up"></span></a>
        </div>
    </div>
    <script>
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
    </script>
    <div class="sticky-top">
        <div class="collapse searchbar" id="searchbar">
            <div class="search-area bg-white">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                                <div class="btn-close">
                                    <a class="close " aria-label="Close" data-toggle="collapse" href="#searchbar"
                                        aria-expanded="false">
                                        <span aria-hidden="true" class="fas fa-times"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white  border-top border-bottom ">
            <div class="container">
                <a href="index.php"><img src="images/logo.png" alt="Sahakari Logo"></a>
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
                    <span class="search-nav"> <a class="search-btn collapsed" role="button" data-toggle="collapse"
                            href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </span>
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

        document.addEventListener('scroll', function() {
            scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            progress.style.setProperty('--scroll', scroll + '%');
        });
        </script>
    </div>