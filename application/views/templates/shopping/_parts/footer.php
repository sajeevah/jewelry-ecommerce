<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="<?= base_url('assets/shopping/img/footer_logo.png') ?>" alt="Venue Logo">
                        </div>
                        <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellustea dictumst.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="inde.html"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="about.html"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="contact.html"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="products.html"><i class="fa fa-stop"></i>Products</a></li>
                                    <li><a href="testimonials.html"><i class="fa fa-stop"></i>Testimonials</a></li>
                                    <li><a href="blog.html"><i class="fa fa-stop"></i>Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> 212 Barrington Court New York, ABC</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">+1 333 4040 5566</a></li>
                            <li><span>Email:</span><a href="#">contact@company.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
    </div>
    <?php if ($this->session->flashdata('emailAdded')) { ?>
        <script>
            $(document).ready(function () {
                ShowNotificator('alert-info', '<?= lang('email_added') ?>');
            });
        </script>
            <?php
        }
        echo $addJs;
        if ($this->session->flashdata('userError')) {
            if (is_array($this->session->flashdata('userError'))) {
                $usr_err = implode(' ', $this->session->flashdata('userError'));
            } else {
                $usr_err = $this->session->flashdata('userError');
            }
            ?>
            <script>
                $(document).ready(function () {
                    ShowNotificator('alert-danger', '<?= $usr_err ?>');
                });
            </script>
            <?php
        }
    ?>
<div id="notificator" class="alert"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('assets/shopping/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>

    <script src="<?= base_url('assets/shopping/js/vendor/bootstrap.min.js') ?>"></script>
    
    <script src="<?= base_url('assets/shopping/js/datepicker.js') ?>"></script>
    <script src="<?= base_url('assets/shopping/js/plugins.js') ?>"></script>
    <script src="<?= base_url('assets/shopping/js/main.js') ?>"></script>
    <script>
        var variable = {
            clearShoppingCartUrl: "<?= base_url('clearShoppingCart') ?>",
            manageShoppingCartUrl: "<?= base_url('manageShoppingCart') ?>",
            discountCodeChecker: "<?= base_url('discountCodeChecker') ?>"
        };
    </script>
    <script src="<?= base_url('assets/js/system.js') ?>"></script>
    <script src="<?= base_url('templatejs/mine.js') ?>"></script>
    
</body>
</html>