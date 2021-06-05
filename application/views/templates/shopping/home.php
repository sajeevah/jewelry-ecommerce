<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="banner" id="top" style="background-image: url(<?= base_url('assets/shopping/img/homepage-banner-image-1920x700.jpg') ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                        <div class="blue-button">
                            <a href="<?= LANG_URL . '/contacts' ?>"><?= lang('contact_us') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>About us</h4>
                            <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst. Vel sequi odit similique repudiandae ipsum iste, quidem tenetur id impedit, eaque et, aliquam quod.</p>
                            <div class="blue-button">
                                <a href="<?= LANG_URL . '/about-us' ?>">Discover More</a>
                            </div>

                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/shopping/img/about-1-720x480.jpg') ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Featured Products</span>
                            <h2>Lorem ipsum dolor sit amet ctetur.</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">
                    <?php
                        $i = 0;
                        foreach ($sliderProducts as $product) {
                    ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <img src="<?= base_url('attachments/shop_images/' . $product['image']) ?>" alt="">
                                </div>
                                <div class="down-content">
                                    <h4><?= $product['title'] ?></h4>

                                    <span><del><sup>$</sup><?= $product['old_price'] ?></del> <strong><sup>$</sup><?= $product['price'] ?></strong></span>

                                    <?= $product['basic_description'] ?>

                                    <div class="text-button">
                                        <a href="<?= LANG_URL . '/' . $product['url'] ?>">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                            $i++;
                        }
                    ?>
                </div>
            </div>
        </section>

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Latest blog posts</span>
                            <h2>Lorem ipsum dolor sit amet ctetur.</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">
                    <?php
                        $i = 0;
                        foreach ($lastBlogs as $post) {
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="thumb">
                                        <div class="thumb-img">
                                            <img src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="">
                                        </div>

                                        <div class="overlay-content">
                                        <strong title="Author"><i class="fa fa-user"></i> Chloe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Posted on"><i class="fa fa-calendar"></i> <?= date('M d, Y', $post['time']) ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <!-- <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong> -->
                                        </div>
                                    </div>

                                    <div class="down-content">
                                        <h4><?= character_limiter($post['title'], 85) ?></h4>

                                        <p><?= character_limiter(strip_tags($post['description']), 300) ?></p>

                                        <div class="text-button">
                                            <a href="<?= LANG_URL . '/blog/' . $post['url'] ?>"><?= lang('read_more') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                    ?>
                </div>
            </div>
        </section>

        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                      <div class="section-heading">
                          <span>Contact Us</span>
                          <h2>Vivamus nec vehicula felis</h2>
                      </div>
                      <!-- Modal button -->

                      <div class="blue-button">
                        <a href="<?= LANG_URL . '/contacts' ?>">Talk to us</a>
                      </div>
                </div>
            </div>
        </section>

        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Testimonials</span>
                            <h2>Lorem ipsum dolor sit amet</h2>
                        </div>
                    </div> 
                </div> 

                <div class="owl-carousel owl-theme">
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/shopping/img/popular_item_1.jpg') ?>" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/shopping/img/popular_item_2.jpg') ?>" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/shopping/img/popular_item_3.jpg') ?>" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/shopping/img/popular_item_4.jpg') ?>" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/shopping/img/popular_item_5.jpg') ?>" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/shopping/img/popular_item_1.jpg') ?>" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/shopping/img/popular_item_2.jpg') ?>" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>