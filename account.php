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

<!-- account section -->
<div class="account-area xs-section-padding">
    <div class="container">
        <div class="row">
        <?php include 'includes/dashboard_menu.php'; ?>
            <div class="col-md-8">
                <div class="woocommerce-MyAccount-content">
                    <p>Hello <strong>admin</strong> (not <strong>admin</strong>? <a href="#">Log out</a>)</p>
                    <p>From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div><!-- End account section -->

<?php include 'includes/footer.php'; ?>
