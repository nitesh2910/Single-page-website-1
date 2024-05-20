<?php
include("include/header.php");
?>

<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-spring">
        <img src="assets/img/breadcrumb/br-shape-1.png" alt="Image" class="br-shape-one xs-none">
        <img src="assets/img/breadcrumb/br-shape-2.png" alt="Image" class="br-shape-two xs-none">
        <img src="assets/img/breadcrumb/br-shape-3.png" alt="Image" class="br-shape-three moveHorizontal sm-none">
        <img src="assets/img/breadcrumb/br-shape-4.png" alt="Image" class="br-shape-four moveVertical sm-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8 col-sm-8">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.php">Home </a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                    <div class="breadcrumb-img">
                        <img src="assets/img/breadcrumb/br-shape-5.png" alt="Image"
                            class="br-shape-five animationFramesTwo">
                        <img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
                        <img src="assets/img/breadcrumb/contact.jpg" alt="Image" style="padding-top: 60px;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-wrap pt-100">
        <div class="container">
            <div class="row justify-content-center pb-75">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="flaticon-map"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Our Location</h3>
                            <p style="text-align: justify;">Office No. 305,Devhira Complex,GIDC,Vapi- 396195.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="flaticon-email-2"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Email Us</h3>
                            <a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9cf4f9f0f0f3dceefde4fdb2fff3f1"><span
                                    class="__cf_email__"
                                    data-cfemail="375f525b5b587745564f561954585a">[sales@delightmedia.in]</span></a>
                            <a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#03707673736c71774371627b622d606c6e"><span
                                    class="__cf_email__"
                                    data-cfemail="5f2c2a2f2f302d2b1f2d3e273e713c3032">[sales@delightmedia.in]</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="flaticon-phone-call"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Call us</h3>
                            <a href="tel:88098787868">(+91) 9157810375
                            </a>
                            <a href="tel:88098787869">(+91) 9157810375</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comp-map pb-1000">
                <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.403407916342!2d72.91788687459986!3d20.366250381122395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ae916bb312fe3a1%3A0x4a0cc9850c657c!2sCloud9%20Softech%20-%20Website%20Development%20%26%20Mobile%20App%20Development%20Company%20in%20Vapi%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sin!4v1705991757641!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact-form-area ptb-100 bg-albastor">
            <img src="assets/img/contact-shape-1.png" alt="Image" class="contact-shape-one animationFramesTwo">
            <img src="assets/img/contact-shape-2.png" alt="Image" class="contact-shape-two bounce">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="content-title style1 text-center mb-40">
                            <span>Send Us A Message</span>
                            <h2>Do You have Any Questions?</h2>
                        </div>
                        <div class="contact-form">
                            <form class="form-wrap" id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Name*" id="name" required
                                                data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required
                                                placeholder="Your Email*" data-error="Please enter your email*">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" id="phone" required
                                                placeholder="Phone Number" data-error="Please enter your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" placeholder="Subject" id="msg_subject"
                                                required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" placeholder="Your Messages.."
                                                cols="30" rows="10" required
                                                data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn style1 w-100 d-block">Send Message </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<?php
include("include/footer.php");
?>