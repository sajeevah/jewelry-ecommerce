<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="<?= base_url('assets/shopping/img/footer_logo.png') ?>" alt="Venue Logo">
                        </div>
                        <p><?= $footerAboutUs ?></p>
                        <ul class="social-icons">
                            <li>
                                <?php if ($footerSocialFacebook != '') { ?>
                                    <a href="<?= $footerSocialFacebook ?>"><i class=" fa fa-facebook"></i></a>
                                <?php } if ($footerSocialInstagram != '') { ?>
                                    <a href="<?= $footerSocialInstagram ?>"><i class=" fa fa-instagram"></i></a>
                                <?php } if ($footerSocialTwitter != '') { ?>
                                    <a href="<?= $footerSocialTwitter ?>"><i class="fa fa-twitter"></i></a>
                                <?php } if ($footerSocialLinkedin != '') { ?>
                                    <a href="<?= $footerSocialLinkedin ?>"><i class="fa fa-linkedin"></i></a>
                                <?php } if ($footerSocialGooglePlus != '') { ?>
                                    <a href="<?= $footerSocialGooglePlus ?>"><i class="fa fa-google-plus"></i></a>
                                <?php } if ($footerSocialPinterest != '') { ?>
                                    <a href="<?= $footerSocialPinterest ?>"><i class="fa fa-pinterest"></i></a>
                                <?php } if ($footerSocialYoutube != '') { ?>
                                    <a href="<?= $footerSocialYoutube ?>"><i class="fa fa-youtube"></i></a>
                                <?php } ?>
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
                                    <li><a href="<?= LANG_URL ?>"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="<?= LANG_URL . '/about-us' ?>"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="<?= LANG_URL . '/contacts' ?>"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="<?= LANG_URL . '/shop' ?>"><i class="fa fa-stop"></i>Products</a></li>
                                    <li><a href="testimonials.html"><i class="fa fa-stop"></i>Testimonials</a></li>
                                    <li><a href="<?= LANG_URL . '/page/blogs' ?>"><i class="fa fa-stop"></i>Blog</a></li>
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
                        <p><i class="fa fa-map-marker"></i> <?= $footerContactAddr ?></p>
                        <ul>
                            <li><span>Phone:</span><a href="#"><?= $footerContactPhone ?></a></li>
                            <li><span>Email:</span><a href="mailto:<?= $footerContactEmail ?>"><?= $footerContactEmail ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p><?= $footercopyright ?></p>
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