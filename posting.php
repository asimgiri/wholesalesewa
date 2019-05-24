<?php include 'includes/header.php'; ?>

<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li><a href="#">Categories</a></li>
        <li class='active'>Apparels & Accessories</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<!-- /.breadcrumb -->

<!-- account edit section -->
<div class="account-edit-area xs-section-padding xs-section-padding">
  <div class="container">
    <div class="row">
      <?php include 'includes/dashboard_menu.php'; ?>
      <div class="col-md-8">
        <div class="woocommerce-MyAccount-content">
          <form class="woocommerce-EditAccountForm" action="#" method="post">
            <div class="row">
              <div class="col-md-6">
                <p class="woocommerce-form-row">
                  <label for="account_first_name">Ad Title&nbsp;<span class="required">*</span></label>

                  <input type="text" class="form-control" name="account_first_name" id="account_first_name" autocomplete="given-name" value="">
                </p>
              </div>
              <div class="col-md-6">
                <p class="woocommerce-form-row">
                  <label for="account_last_name">Price&nbsp;<span class="required">*</span></label>

                  <input type="text" class="form-control" name="account_last_name" id="account_last_name" autocomplete="family-name" value="">
                </p>
              </div>
              <div class="col-md-12">
                <p class="woocommerce-form-row">
                  <label for="account_display_name">Description&nbsp;<span class="required">*</span></label>

                  <textarea class="form-control" rows="3"></textarea>
                </p>
              </div>
              <div class="col-md-6">
                <p class="woocommerce-form-row">
                  <label for="account_first_name">Email&nbsp;<span class="required">*</span></label>

                  <input type="text" class="form-control" name="account_first_name" id="account_first_name" autocomplete="given-name" value="">
                </p>
              </div>
              <div class="col-md-6">
                <p class="woocommerce-form-row">
                  <label for="account_first_name">Mobile&nbsp;<span class="required">*</span></label>

                  <input type="text" class="form-control" name="account_first_name" id="account_first_name" autocomplete="given-name" value="">
                </p>
              </div>
              <div class="col-md-6">
                <p class="woocommerce-form-row">
                  <label for="account_first_name">Delivery Option&nbsp;<span class="required">*</span></label>
                  <select class="form-control">
                    <option>Home Delivery</option>
                    <option>Delivery within my area</option>
                    <option>Not Available</option>
                  </select>
                </p>
              </div>

              <div class="col-md-6">
                <p class="woocommerce-form-row">
                  <label for="account_first_name">Price Negotiable&nbsp;<span class="required">*</span></label>
                  <select class="form-control">
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </p>
              </div>

              <div class="col-md-6 mt-2">
                <p class="woocommerce-form-row">
                  <label for="account_first_name">Upload Images&nbsp;<span class="required">*</span></label>
                  <form action="/action_page.php">
                 <input type="file" name="img" class="btn btn-browse" multiple>
                 <small class="form-text text-muted">You can select multiple image files at once</small>
                  </form>
                </p>
              </div>

            </div>

            <p class="text-center mt-4">
              <button type="submit" class="btn btn-primary" name="save_account_details" value="Save changes">Post Ad</button>
            </p>
          </form>
        </div>
      </div>
    </div>
    <!-- .row END -->
  </div>
  <!-- .container END -->
</div><!-- End account edit section -->

<?php include 'includes/footer.php'; ?>
