<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="banner banner-secondary" id="top" style="background-image: url(<?= base_url('assets/shopping/img/banner-image-1-1920x300.jpg') ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <?php
                        $i = 0;
                        foreach ($products as $product) {
                    ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <img src="<?= base_url('attachments/shop_images/' . $product['image']) ?>" alt="">
                                </div>
                                <div class="down-content">
                                    <h4><?= $product['title'] ?></h4>

                                    <span><del><sup>$</sup><?= $product['old_price'] ?></del> <strong><sup>$</sup><?= $product['price'] ?></strong></span>

                                    <?= $product['description'] ?>

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
    </main>