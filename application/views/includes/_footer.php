<!-- ========================
     Footer
   ========================== -->
<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-5 footer-widget footer-widget-about">
                    <h6 class="footer-widget-title">About AMS Financial</h6>
                    <div class="footer-widget-content">
                        <p class="mb-20">AMS Finance & Management is a financial services company, providing top-notch investment and financial solutions. 
We are licensed with, and regulated by the Central Bank of Nigeria (CBN)</p>
                        <a href="" class="btn btn__primary btn__link ">
                            <i class="icon-arrow-right"></i><span>Consult Us Today</span>
                        </a>
                    </div>
                </div><!-- /.col-xl-4 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Services</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">Funds Management </a></li>
                                <li><a href="#">Asset Finance</a></li>
                                <li><a href="#">Project Finance</a></li>
                                <li><a href="#">Consumer Loans</a></li>
                                <li><a href="#">More</a></li>
                               
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Company</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Meet Our Team</a></li>
                                <li><a href="#">News & Media</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
                    <h6 class="footer-widget-title">Quick Contact</h6>
                    <div class="footer-widget-content">
                        <p class="mb-20">If you have any questions or need help, feel free to contact with our team.</p>
                        <a class="contact-number contact-number-white d-flex align-items-center mb-20" href="tel:5565454117">
                            <i class="icon-phone"></i><span>(+234)  908 700 5780</span>
                        </a><!-- /.contact__numbr -->
                        <p class="mb-30">29B, Colorado Crescent, Ministers Hills, Maitama, FCT. Abuja, Nigeria</p>
                        <ul class="social-icons list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul><!-- /.social-icons -->
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-copyrights">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <p class="mb-0"> &copy; 2021 AMS Finance & Management Company Limited. All rights reserved
                      
                    </p>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-copyrights-->
</footer><!-- /.Footer -->
<button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

<div class="search-popup">
    <i class="search-popup__close">&times;</i>
    <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="fas fa-search"></i></button>
    </form>
</div><!-- /. search-popup -->

</div><!-- /.wrapper -->

<script src="<?= base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
<?php
if (!empty($assets['js'])) {
    foreach ($assets['js'] as $value) {
        echo '<script src="' . base_url() . $value . '"></script>' . PHP_EOL . '                ';
    }
}
?>
</body>

</html>