<?php include 'includes/header.php'; ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="checkout-area xs-section-padding">
	<div class="container">
		<div class="woocommerce cart-checkout-wraper">
			<div class="row">
				<div class="col-md-8">
					<div class="checkout-form-group">
						<form action="#" method="post" class="xs-form sign_in_form">
							<h4 class="xs-title">Login into your account</h4>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="username" placeholder="User name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Pasword">
										</div>
									</div>
								</div>
							</div>
							<div class="media justify-content-between">
								<a href="login-reg.html" class="simple-btn">Create an account</a>
								<a href="#" class="btn btn-primary pull-right">Sign in</a>
							</div>
						</form>
						<form action="#" method="POST" class="xs-form billing-form">
							<h4 class="xs-title">Billing details</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="fNmae" placeholder="First name" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="lNmae" placeholder="Last name" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" placeholder="Address" class="form-control" name="address">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="apt" placeholder="Apt, suite etc." class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="city" placeholder="City / State" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="country" id="country" class="form-control">
											<option selected>Country</option>
											<option value="UK">UK</option>
											<option value="USA">USA</option>
											<option value="Jermany">Jermany</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="zipcode" placeholder="Zip code" class="form-control">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="checkout_info">
						<div class="cart_table_wraper">
							<h4 class="xs-title">Order Summary</h4>
							<table class="cart_table table">
								<tbody>
									<tr class="cart-subtotal">
										<th><strong>Product</strong></th>
										<td>
											<strong>Quantity</strong>
										</td>
									</tr>
									<tr class="cart-subtotal">
										<th>Dedicated Hosting</th>
										<td>
											<span class="product-price">4</span>
										</td>
									</tr>
									<tr class="cart-subtotal">
										<th>Subtotal:</th>
										<td>
											<span class="product-price">$53.950</span>
										</td>
									</tr>
									<tr class="cart-fee">
										<th>Setup Fee:</th>
										<td>
											<span class="product-price">$0.00</span>
										</td>
									</tr>
									<tr class="cart-fee">
										<th>Discount:</th>
										<td>
											<span class="product-price highlight">-$0.00</span>
										</td>
									</tr>
									<tr class="order-total">
										<th><strong>Total:</strong></th>
										<td>
											<span class="product-price"><strong>$53.95</strong></span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="wc-proceed-to-checkout">
							<div class="xs-btn-wraper">
								<input type="submit" class="btn btn-primary" name="update_cart" value="Preceed to Checkout">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .container END -->
</div><!-- End checkout section -->


<?php include 'includes/footer.php'; ?>
