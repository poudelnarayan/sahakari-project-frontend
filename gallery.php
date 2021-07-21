<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<section class="page-title" style="background-image:url(images/currency.jpg)">
    <div class="auto-container">
        <h2>Gallery</h2>
        <ul class="page-breadcrumb">
            <li><a href="index.php">home</a></li>
            <li>Gallery</li>
        </ul>
    </div>
</section>

<div class="gallery">
    <div class="sec-title text-center">
        <h2>Gallery</h2>
    </div>
    <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_snow.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="0">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_lights.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="1">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_mountains.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="2">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_nature.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="3">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_nature.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="4">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_mountains.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="5">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_lights.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="6">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_snow.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="7">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_nature.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="8">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_nature.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="9">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_mountains.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="10">
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="images/img_snow.jpg" alt="First slide" data-target="#carouselExample"
                data-slide-to="11">
        </div>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExample" data-slide-to="1"></li>
                            <li data-target="#carouselExample" data-slide-to="2"></li>
                            <li data-target="#carouselExample" data-slide-to="3"></li>
                            <li data-target="#carouselExample" data-slide-to="4"></li>
                            <li data-target="#carouselExample" data-slide-to="5"></li>
                            <li data-target="#carouselExample" data-slide-to="6"></li>
                            <li data-target="#carouselExample" data-slide-to="7"></li>
                            <li data-target="#carouselExample" data-slide-to="8"></li>
                            <li data-target="#carouselExample" data-slide-to="9"></li>
                            <li data-target="#carouselExample" data-slide-to="10"></li>
                            <li data-target="#carouselExample" data-slide-to="11"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/img_snow.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_lights.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_mountains.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_nature.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_nature.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_mountains.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_lights.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_snow.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_nature.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_nature.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_mountains.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img_snow.jpg" alt="Fourth slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('bottom.php');
?>

</html>