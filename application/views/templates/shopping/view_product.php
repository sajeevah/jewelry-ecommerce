<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="banner banner-secondary" id="top" style="background-image: url(<?= base_url('assets/shopping/img/banner-image-1-1920x300.jpg') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2><?= $product['title'] ?></h2>
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
                      <img src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" alt="" class="img-responsive wc-image">
                    </div>
                    <br>
                    <?php
                      if ($product['folder'] != null) {
                        $dir = "attachments/shop_images/" . $product['folder'] . '/';
                        ?>
                          <div class="row">
                              <?php
                              if (is_dir($dir)) {
                                  if ($dh = opendir($dir)) {
                                      $i = 1;
                                      while (($file = readdir($dh)) !== false) {
                                          if (is_file($dir . $file)) {
                                              ?>
                                                <div class="col-sm-4 col-xs-6">
                                                    <img src="<?= base_url($dir . $file) ?>" data-num="<?= $i ?>" alt="" class="img-responsive">
                                                </div>
                                              <?php
                                              $i++;
                                          }
                                      }
                                      closedir($dh);
                                  }
                              }
                              ?>
                          </div>
                        <?php
                      }
                    ?>
                  </div>

                  <div class="col-md-6 col-xs-12">
                      <h2><small><del> $<?= $product['old_price'] ?></del></small><strong class="text-primary">$<?= $product['price'] ?></strong></h2>

                      <br>

                      <p class="lead">
                        <?= $product['description'] ?>
                      </p>


                      <br> 
                      <div class="row row-info">
                          <div class="col-sm-6"><b><?= lang('num_added_to_cart') ?>:</b></div>
                          <div class="col-sm-6"><?php
                              @$result = array_count_values($_SESSION['shopping_cart']);
                              if (isset($result[$product['id']]))
                                  echo $result[$product['id']];
                              else
                                  echo 0;
                              ?></div>
                          <div class="col-sm-12 border-bottom"></div>
                      </div>
                      <br/>
                      <div class="row">
                        <div class="col-sm-4">
                          <label class="control-label">Quantity</label>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="1">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-3">
                          <div class="blue-button">
                              <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/checkout' ?>" class="add-to-cart btn-add"><?= lang('buy_now') ?></a>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="black-button">
                              <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/' . $product['url'] ?>" class="add-to-cart btn-add"><?= lang('add_to_cart') ?></a>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </section>
    </main>