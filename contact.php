<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php
    include("include/css.php");
    ?>
</head>
<body>
<div class="wrapper ovh">
    <div class="preloader"></div>

    <!--top header section-->
    <?php
    include("include/header.php");
    ?>


    <!--menubar section-->
    <?php
    include("include/menubar.php");
    ?>


    <!--main body content starts here-->



    <!-- Our Contact -->
    <section class="our-contact inner_page_section_spacing bgc-f9">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_icon_box mb50">
                        <div class="details">
                            <h3 class="title">Contact Details</h3>
                            <p>Germany —<br>329 Queensberry Street,<br>North Melbourne VIC 3051</p>
                            <h4 class="subtitle">+1 670 936 46 70</h4>
                            <p>hello@voiture.com</p>
                            <div class="footer_social_widget">
                                <ul class="mb0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form_grid">
                        <div class="wrapper">
                            <h3 class="title mb20">Contact Form</h3>
                            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name*</label>
                                            <input class="form-control" type="text" placeholder="TUF">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name*</label>
                                            <input class="form-control" type="text" placeholder="creativelayers088@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email*</label>
                                            <input class="form-control email" type="email" placeholder="+59 9495 393 939 3">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input class="form-control" type="text" placeholder="Message">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Message</label>
                                            <textarea name="form_message" class="form-control" rows="6"></textarea>
                                        </div>
                                        <div class="form-group mb0">
                                            <button type="button" class="btn btn-thm">Get In Touch</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Contact -->
    <section class="our-contact p0 mt0 mt70-992">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h600" id="map-canvas"></div>
                </div>
            </div>
        </div>
    </section>
    <!--main body content ends here-->


    <!--newslatter section-->
    <?php
    include("include/newslatter.php");
    ?>


    <!--footer section and go to top button-->
    <?php
    include("include/footer.php");
    ?>


    <!-- Wrapper End -->


    <!--js files-->
    <?php
    include("include/js.php");
    ?>
</body>


</html>