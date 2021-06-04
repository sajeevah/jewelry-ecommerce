<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="banner banner-secondary" id="top" style="background-image: url(<?= base_url('assets/shopping/img/banner-image-1-1920x300.jpg') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<main>
        <section class="featured-places">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div>
                      <img src="<?= base_url('assets/shopping/img/product-1-720x480.jpg') ?>" alt="" class="img-responsive wc-image">
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-4 col-xs-6">
                          <img src="<?= base_url('assets/shopping/img/product-1-720x480.jpg') ?>" alt="" class="img-responsive">
                      </div>
                      <div class="col-sm-4 col-xs-6">
                          <img src="<?= base_url('assets/shopping/img/product-2-720x480.jpg') ?>" alt="" class="img-responsive">
                      </div>
                      <div class="col-sm-4 col-xs-6">
                          <img src="<?= base_url('assets/shopping/img/product-3-720x480.jpg') ?>" alt="" class="img-responsive">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                      <h2><small><del> $999.00</del></small><strong class="text-primary">$779.00</strong></h2>

                      <br>

                      <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ratione molestias maxime odio. Provident ratione vero, corrupti, optio laborum aut!
                      </p>

                      <br> 

                      <div class="row">
                        <div class="col-sm-4">

                            <label class="control-label">Quantity</label>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="1">
                            </div>
                        </div>
                      </div>

                        <div class="blue-button">
                            <a href="#">Add to Cart</a>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </section>
    </main>