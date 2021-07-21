<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<section class="page-title" style="background-image:url(images/currency.jpg)">
    <div class="auto-container">
        <h2>Contact</h2>
        <ul class="page-breadcrumb">
            <li><a href="index.php">home</a></li>
            <li>Contact</li>
        </ul>
    </div>
</section>


<section class="section-padding contact-us-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="get-in-touch">
                    <h2>Get in Touch</h2>
                    <p>The passages of Lorem Ipsum available but the majority have suffered alteration embarrased</p>
                </div>
                <form action="mail.php" method="POST">
                    <div class="row list-input">
                        <div class="col-md-6 mr0">
                            <div class="single-get-touch">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-get-touch">
                                <input type="text" name="phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                                <textarea name="message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-get-touch">
                                <button class="theme-btn btn-style-two" type="submit" name="submit"><span
                                        class="btn-title">SEND
                                        MESSAGE</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="choose-img">
                    <img src="images/ceo.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact-info">
                    <div class="icon">
                        <img src="images/map-pin-2.png" alt="">
                    </div>
                    <div class="content">
                        <p>Laltin 201, Butwal, <br>
                            Nepal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info">
                    <div class="icon">
                        <img src="images/envalope-3.png" alt="">
                    </div>
                    <div class="content">
                        <p>mail@sahakari.com <br>
                            reply within 2 Hours</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info">
                    <div class="icon">
                        <img src="images/call-2.png" alt="">
                    </div>
                    <div class="content">
                        <p>+977-989999999 <br>
                            Call @ 10:00 am to 4.00pm </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('bottom.php');
?>

</html>