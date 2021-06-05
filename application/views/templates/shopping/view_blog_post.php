<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="banner banner-secondary" id="top" style="background-image: url(<?= base_url('assets/shopping/img/banner-image-1-1920x300.jpg') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2><?= $article['title'] ?></h2>

                    <h4><i class="fa fa-user"></i> Chloe &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-calendar"></i> <?= date('M d, y', $article['time']) ?> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> N/A</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="featured-places">
        <div class="container">
            <div class="form-group">
                <img src="<?= base_url('attachments/blog_images/' . $article['image']) ?>" class="img-responsive" alt="<?= $article['title'] ?>">
            </div>

            <br>

            <h2><?= $article['title'] ?></h2>

            <?= $article['description'] ?>

            <br>
            <br>


            <h4>Leave a comment</h4>

            <div class="row">
                <div class="col-md-8">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <div class="blue-button">
                                    <a href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <div class="left-content">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>

                        <br>

                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>