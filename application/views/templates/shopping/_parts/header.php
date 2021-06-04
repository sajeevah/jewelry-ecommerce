<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHPJabbers.com | Free Shopping Website Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" />
        <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" />  
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('loadlanguage/all.js') ?>"></script>

        <link rel="stylesheet" href="<?= base_url('assets/shopping/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/shopping/css/bootstrap-theme.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/shopping/css/fontAwesome.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/shopping/css/hero-slider.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/shopping/css/owl-carousel.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/shopping/css/style.css') ?>">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="<?= base_url('assets/shopping/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>
        <?php if ($cookieLaw != false) { ?>
            <script type="text/javascript">
                window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
            </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="<?= base_url('assets/shopping/img/logo.png') ?>" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <!-- <li class='active'><a href="index.html">Home</a></li> -->
                                <li<?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR ? ' class="active"' : '' ?>><a href="<?= LANG_URL ?>"><?= lang('home') ?></a></li>

                                <!-- <li><a href="products.html">Products</a></li> -->
                                <li<?= uri_string() == 'shop' || uri_string() == MY_LANGUAGE_ABBR . '/shop' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/shop' ?>"><?= lang('products') ?></a></li>

                                <!-- <li><a href="checkout.html">Checkout</a></li> -->
                                <li<?= uri_string() == 'checkout' || uri_string() == MY_LANGUAGE_ABBR . '/checkout' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/checkout' ?>"><?= lang('checkout') ?></a></li>

                                <li<?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/shopping-cart' ?>"><?= lang('shopping_cart') ?></a></li>

                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li<?= uri_string() == 'about-us' || uri_string() == MY_LANGUAGE_ABBR . '/about-us' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/about-us' ?>">About Us</a></li>
                                        <!-- <li><a href="about-us.html">About Us</a></li> -->
                                        <li><a href="blog.html">Blog</a></li>
                                        <!-- <li><a href="testimonials.html">Testimonials</a></li> -->
                                        <li><a href="terms.html">Terms</a></li>
                                    </ul>
                                </li>

                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>