@extends('layouts.master')
@section('judul', 'Checkout Complete')

@section('css')

@endsection

@section('content')
    <!-- BEGIN #checkout-cart -->
		<div class="section-container" id="checkout-cart">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN checkout -->
				<div class="checkout">
					<form action="#" method="GET" name="form_checkout">
					{{-- <form action="my_account.html" method="GET" name="form_checkout"> --}}
						<!-- BEGIN checkout-header -->
						<div class="checkout-header">
							@include('checkout.step')
						</div>
						<!-- END checkout-header -->
						<!-- BEGIN checkout-body -->
						<div class="checkout-body">
							<!-- BEGIN checkout-message -->
							<div class="checkout-message">
								<h1>Thank you! <small>Your Payment has been successfully processed with the following details.</small></h1>
								<div class="table-responsive">
									<table class="table table-payment-summary">
										<tbody>
											<tr>
												<td class="field">Transaction Status</td>
												<td class="value">Success</td>
											</tr>
											<tr>
												<td class="field">Transaction Reference No.</td>
												<td class="value">REF000001</td>
											</tr>
											<tr>
												<td class="field">Bank Authorised Code</td>
												<td class="value">AUTH000001</td>
											</tr>
											<tr>
												<td class="field">Transaction Date and Time</td>
												<td class="value">05 APR 2021 07:30PM</td>
											</tr>
											<tr>
												<td class="field">Orders</td>
												<td class="value product-summary">
													<div class="product-summary-img h-150px w-100px d-flex align-items-center justify-content-center">
														<img src="../assets/img/product/product-iphone-12.png" class="mw-100 mh-100" alt="" />
													</div>
													<div class="product-summary-info">
														<div class="title">iPhone 12 Pro Max 128GB (Blue)</div>
														<div class="desc">Delivers Tue 26/04/2021 - Free</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="field">Payment Amount (RM)</td>
												<td class="value">$999.00</td>
											</tr>
										</tbody>
									</table>
								</div>
								<p class="text-silver-darker text-center mb-0">Should you require any assistance, you can get in touch with Support Team at (123) 456-7890</p>
							</div>
							<!-- END checkout-message -->
						</div>
						<!-- END checkout-body -->
						<!-- BEGIN checkout-footer -->
						<div class="checkout-footer text-center">
							<button type="submit" class="btn btn-white btn-theme">MANAGE ORDERS</button>
						</div>
						<!-- END checkout-footer -->
					</form>
				</div>
				<!-- END checkout -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #checkout-cart -->
@endsection
