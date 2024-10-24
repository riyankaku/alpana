<?php include("header.php"); ?>

    <section class="inner-banner" style="background: url(./assets/img/slide1.jpg) no-repeat;">
        <div class="container">
            <div class="inner-banner-area text-center">
                <h1>Contact Us</h1>
                <ol class="breadcrumb mx-auto d-flex justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Contact Us</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form class="contatc-form">
                        <h2 class="text-center">Get in Touch</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="enter your name">
                            </div>
                            <div class="col-lg-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="enter your email">
                            </div>
                            <div class="col-lg-12">
                                <label for="Phone">Phone Number</label>
                                <input type="number" class="form-control" name="phone"
                                    placeholder="enter your phone number">
                            </div>
                            <div class="col-lg-12">
                                <label for="Comments">Comments</label>
                                <textarea class="form-control" name="comment" rows="4"> Message</textarea>
                            </div>
                            <div class="button_form">
                                <a href="#" class="main-btn form_btn">Submit</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115150.25663944779!2d91.81003500132148!3d25.590107916590416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37507e8f34bd207f%3A0x62482df7108f882b!2sShillong%2C%20Meghalaya!5e0!3m2!1sen!2sin!4v1694093679342!5m2!1sen!2sin"
                            width="100%" height="638" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="address-area-contact">
        <div class="container">
            <div class="footer-top">
                <div class="footer-top-bg row g-0">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-box">
                            <div id="saifway_contact_info_widget-2" class="widget saifway_contact_info_widget">
                                <div class="footer-box-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="footer-box-content">
                                        <h3>Head Office</h3>
                                        <p>Outside of Sealdah Station</p>
                                        <p>35/1 Sailo Kumar Mukherjee Road Howrah -711101</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-box">
                            <div id="saifway_contact_info_widget-3" class="widget saifway_contact_info_widget">
                                <div class="footer-box-item">
                                    <i class="fa fa-phone"></i>
                                    <div class="footer-box-content">
                                        <h3>Call </h3>
                                        <div>Mobile: <a href="tel:9051973112">9051973112</a><br>
                                            Mobile: <a href="tel:82401 75692">82401 75692</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="footer-box">
                            <div id="saifway_contact_info_widget-4" class="widget saifway_contact_info_widget">
                                <div class="footer-box-item">
                                    <i class="fas fa-envelope-open"></i>
                                    <div class="footer-box-content">
                                        <h3>Email</h3>
                                        <div><a href="mailto:alpanaartagency@gmail.com">alpanaartagency@gmail.com</a>
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

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="footer_logo_area">
                        <div class="footer-logo" data-aos="fade-right">
                            <img src="assets/img/footer_logo.png" class="img-fluid" />
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore
                        </p>
                    </div>
                </div>
                
                <?php include("footer.php"); ?>