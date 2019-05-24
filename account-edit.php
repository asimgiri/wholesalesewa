<?php include 'includes/header.php'; ?>

<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>My Account</li>
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
                                    <label for="account_first_name">First name&nbsp;<span class="required">*</span></label>

                                    <input type="text" class="form-control" name="account_first_name" id="account_first_name" autocomplete="given-name" value="">
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="woocommerce-form-row">
                                    <label for="account_last_name">Last name&nbsp;<span class="required">*</span></label>

                                    <input type="text" class="form-control" name="account_last_name" id="account_last_name" autocomplete="family-name" value="">
                                </p>
                            </div>
                        </div>
                        <p class="woocommerce-form-row">
                            <label for="account_display_name">Display name&nbsp;<span class="required">*</span></label>

                            <input type="text" class="form-control" name="account_display_name" id="account_display_name"> <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                        </p>

                        <p class="woocommerce-form-row">
                            <label for="account_email">Email address&nbsp;<span class="required">*</span></label>

                            <input type="email" class="form-control" name="account_email" id="account_email" autocomplete="email">
                        </p>
                        <fieldset>
                            <legend>Password change</legend>
                            <p class="woocommerce-form-row">
                                <label for="password_current">Current password (leave blank to leave unchanged)</label>

                                <input type="password" class="form-control" name="password_current" id="password_current" autocomplete="off">
                            </p>

                            <p class="woocommerce-form-row">
                                <label for="password_1">New password (leave blank to leave unchanged)</label>

                                <input type="password" class="form-control" name="password_1" id="password_1" autocomplete="off">
                            </p>

                            <p class="woocommerce-form-row">
                                <label for="password_2">Confirm new password</label>

                                <input type="password" class="form-control" name="password_2" id="password_2" autocomplete="off">
                            </p>
                        </fieldset>
                        <p>
                            <button type="submit" class="btn btn-primary" name="save_account_details" value="Save changes">Save changes</button>
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
