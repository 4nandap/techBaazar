@extends('layouts.master')
@section('judul', 'Checkout Payment')

@section('css')

@endsection

@section('content')
    <!-- BEGIN #checkout-payment -->
		<div class="section-container" id="checkout-payment">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN checkout -->
				<div class="checkout">
					<form action="{{('checkoutComplete')}}" method="GET" name="form_payment" class="form-horizontal">
						<!-- BEGIN checkout-header -->
						<div class="checkout-header">
							@include('checkout.step')
						</div>
						<!-- END checkout-header -->
						<!-- BEGIN checkout-body -->
						<div class="checkout-body">
							<h4 class="checkout-title">Choose a payment method</h4>
							<div class="mb-2 row">
								<label class="col-md-4 col-form-label text-lg-end">Cardholder Name <span class="text-danger">*</span></label>
								<div class="col-md-4">
									<input type="text" class="form-control required" name="cardholder" placeholder="" />
								</div>
							</div>
							<div class="mb-2 row">
								<label class="col-md-4 col-form-label text-lg-end">Card Number <span class="text-danger">*</span></label>
								<div class="col-md-4">
									<input type="text" class="form-control required" name="cardnumber" placeholder="" />
								</div>
							</div>
							<div class="mb-2 row">
								<label class="col-md-4 col-form-label text-lg-end">Payment Types <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<ul class="list-inline payment-type">
										<li class="active"><a href="#" data-click="set-payment" data-value="Paypal" data-toggle="tooltip" data-title="Paypal" data-placement="top" data-trigger="hover"><i class="fab fa-cc-paypal"></i></a></li>
										<li><a href="#" data-click="set-payment" data-value="Visa" data-toggle="tooltip" data-title="Visa" data-placement="top" data-trigger="hover"><i class="fab fa-cc-visa"></i></a></li>
										<li><a href="#" data-click="set-payment" data-value="Master Card" data-toggle="tooltip" data-title="Master Card" data-placement="top" data-trigger="hover"><i class="fab fa-cc-mastercard"></i></a></li>
										<li><a href="#" data-click="set-payment" data-value="Credit Card" data-toggle="tooltip" data-title="Credit Card" data-placement="top" data-trigger="hover"><i class="fab fa-cc-discover"></i></a></li>
									</ul>
									<input type="hidden" name="payment_type" value="" data-id="payment-type" />
								</div>
							</div>
							<div class="mb-2 row">
								<label class="col-md-4 col-form-label text-lg-end">Expiration Date <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<div class="w-150px">
										<div class="row gx-0">
											<div class="col-5">
												<input type="text" name="mm" placeholder="MM" class="form-control required p-l-5 p-r-5 text-center" />
											</div>
											<div class="col-2 text-center">
												<div class="text-muted pt-5px mt-2px">/</div>
											</div>
											<div class="col-5">
												<input type="text" name="yy" placeholder="YY" class="form-control required p-l-5 p-r-5 text-center" />
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-2 row">
								<label class="col-md-4 col-form-label text-lg-end">CSC <span class="text-danger">*</span></label>
								<div class="col-md-8 d-flex align-items-center">
									<div class="w-150px me-10px">
										<input type="text" name="number" placeholder="" class="form-control required p-l-5 p-r-5 text-center" />
									</div>
									<a href="#" class="text-muted fs-12px"><i class="fa fa-question-circle"></i> What's this?</a>
								</div>
							</div>
						</div>
						<!-- END checkout-body -->
						<!-- BEGIN checkout-footer -->
						<div class="checkout-footer d-flex">
							<a href="{{('checkoutInfo')}}" class="btn btn-white btn-theme me-auto">BACK</a>
							<button type="submit" class="btn btn-inverse btn-theme">PROCEED</button>
						</div>
						<!-- END checkout-footer -->
					</form>
				</div>
				<!-- END checkout -->
				<h4 class="checkout-title mt-30px mb-15px">Payment Frequently Asked Questions</h4>
				<!-- BEGIN checkout-question-list -->
				<div class="checkout-question-list" id="checkout-faq">
					<!-- BEGIN row -->
					<div class="row">
						<!-- BEGIN col-6 -->
						<div class="col-md-6">
							<div class="clearfix">
								<div class="question">
									<a href="#checkout-faq-1" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
									<span class="dash">-</span> Is my Credit Card / Debit Card details protected?
									</a>
								</div>
								<div class="answer collapse in" id="checkout-faq-1">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit, felis vel tincidunt sodales, urna metus rutrum leo, sit amet finibus velit ante nec lacus. Cras erat nunc, pulvinar nec leo at, rhoncus elementum orci. Nullam ut sapien ultricies, gravida ante ut, ultrices nunc.
								</div>
							</div>
							<div class="clearfix mt-10px">
								<div class="question">
									<a href="#checkout-faq-2" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
									<span class="dash">-</span> Can I use a Debit Card to make payment??
									</a>
								</div>
								<div class="answer collapse in" id="checkout-faq-2">
									Curabitur vitae venenatis odio, eget molestie mauris. Nullam vitae turpis at mi consequat rutrum quis quis mi. Vestibulum imperdiet neque non libero condimentum, quis sodales magna molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus.
								</div>
							</div>
							<div class="clearfix mt-10px">
								<div class="question">
									<a href="#checkout-faq-3" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
									<span class="dash">-</span> Credit Card/Debit Card transaction keep failing. Why?
									</a>
								</div>
								<div class="answer collapse in" id="checkout-faq-3">
									Cras malesuada mi quis purus pharetra egestas. Curabitur auctor sapien est, eu porttitor velit ornare in. Fusce porta suscipit diam at placerat. Donec lobortis iaculis accumsan. Ut semper felis vel nisi aliquam facilisis.
								</div>
							</div>
						</div>
						<!-- END col-6 -->
						<!-- BEGIN col-6 -->
						<div class="col-md-6">
							<div class="clearfix">
								<div class="question">
									<a href="#checkout-faq-4" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
									<span class="dash">-</span> Did not receive the Pin Code on my mobile?
									</a>
								</div>
								<div class="answer collapse in" id="checkout-faq-4">
									Duis gravida sem eu arcu efficitur, laoreet egestas nibh posuere. Pellentesque suscipit tincidunt porttitor. Aliquam vitae massa vel justo lobortis posuere. Nulla tempor enim at auctor dignissim. Aenean sit amet venenatis odio.
								</div>
							</div>
							<div class="clearfix mt-10px">
								<div class="question">
									<a href="#checkout-faq-5" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
									<span class="dash">-</span> My credit card has been charged, but my order shows failed?
									</a>
								</div>
								<div class="answer collapse in" id="checkout-faq-5">
									Nunc consectetur tellus libero, at tempor dolor scelerisque id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat ligula vitae tincidunt sagittis. Etiam congue ligula purus, ut fringilla ante interdum eu.
								</div>
							</div>
						</div>
						<!-- END col-6 -->
					</div>
					<!-- END row -->
				</div>
				<!-- END checkout-question-list -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #checkout-payment -->
@endsection
