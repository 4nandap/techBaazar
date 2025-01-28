@extends('layouts.master')
@section('judul', 'Product')

@section('css')

@endsection

@section('content')
    <!-- BEGIN #page-header -->
		<div id="page-header" class="section-container page-header-container bg-black">
			<!-- BEGIN page-header-cover -->
			<div class="page-header-cover">
				<img src="../assets/img/cover/cover-12.jpg" alt="" />
			</div>
			<!-- END page-header-cover -->
			<!-- BEGIN container -->
			<div class="container">
				<h1 class="page-header"><b>Apple</b> Product</h1>
			</div>
			<!-- END container -->
		</div>
		<!-- BEGIN #page-header -->

		<!-- BEGIN search-results -->
		<div id="search-results" class="section-container">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN search-container -->
				<div class="search-container">
					<!-- BEGIN search-sidebar -->
					<div class="search-sidebar">
						<h4 class="title">Filter By</h4>
						<form action="{{('product')}}" method="GET" name="filter_form">
							<div class="mb-3">
								<label class="form-label">Keywords</label>
								<input type="text" class="form-control input-sm" name="keyword" value="Mobile Phones" placeholder="Enter Keywords" />
							</div>
							<div class="mb-3">
								<label class="form-label">Price</label>
								<div class="row row-space-0">
									<div class="col-md-5">
										<input type="number" class="form-control input-sm" name="price_from" value="10" placeholder="Price From" />
									</div>
									<div class="col-md-2 text-center pt-5px fs-12px text-muted">to</div>
									<div class="col-md-5">
										<input type="number" class="form-control input-sm" name="price_to" value="10000" placeholder="Price To" />
									</div>
								</div>
							</div>
							<div class="mb-30px">
								<button type="submit" class="btn btn-sm btn-theme btn-inverse w-100"><i class="fa fa-search fa-fw me-1 ms-n3"></i> FILTER</button>
							</div>
						</form>
						<h4 class="title mb-0">Categories</h4>
						<ul class="search-category-list">
							<li><a href="#">iPhone <span class="pull-right">(10)</span></a></li>
							<li><a href="#">Mac <span class="pull-right">(15)</span></a></li>
							<li><a href="#">iPad <span class="pull-right">(32)</span></a></li>
							<li><a href="#">Watch <span class="pull-right">(4)</span></a></li>
							<li><a href="#">TV <span class="pull-right">(6)</span></a></li>
							<li><a href="#">Accessories <span class="pull-right">(38)</span></a></li>
						</ul>
					</div>
					<!-- END search-sidebar -->
					<!-- BEGIN search-content -->
					<div class="search-content">
						<!-- BEGIN search-toolbar -->
						<div class="search-toolbar">
							<!-- BEGIN row -->
							<div class="row">
								<div class="col-lg-6">
									<h4>We found 65 Items for "Apple Product"</h4>
								</div>
								<!-- END col-6 -->
								<!-- BEGIN col-6 -->
								<div class="col-lg-6 text-end">
									<ul class="sort-list">
										<li class="text"><i class="fa fa-filter"></i> Sort by:</li>
										<li class="active"><a href="#">Popular</a></li>
										<li><a href="#">New Arrival</a></li>
										<li><a href="#">Discount</a></li>
										<li><a href="#">Price</a></li>
									</ul>
								</div>
								<!-- END col-6 -->
							</div>
							<!-- END row -->
						</div>
						<!-- END search-toolbar -->
						<!-- BEGIN search-item-container -->
						<div class="search-item-container">
							<!-- BEGIN item-row -->
							<div class="item-row">
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-iphone.png" alt="" />
										<div class="discount">35% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product_detail.html">iPhone 6s Plus<br />16GB</a>
										</h4>
										<p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
										<div class="item-price">Rp 3.899.350</div>
										<div class="item-discount-price">Rp 5.999.000</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-apple-tv.png" alt="" />
										<div class="discount">40% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Apple TV<br />2016</a>
										</h4>
										<p class="item-desc">The future of television is here.</p>
										<div class="item-price">Rp 1.341.000</div>
										<div class="item-discount-price">Rp 2.235.000</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-iphone-se.png" alt="" />
										<div class="discount">20% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">iPhone SE<br />32/64Gb</a>
										</h4>
										<p class="item-desc">A big step for small.</p>
										<div class="item-price">Rp 3.200.000</div>
										<div class="item-discount-price">Rp 4.000.000</div>
									</div>
								</div>
								<!-- END item -->
							</div>
							<!-- END item-row -->
							<!-- BEGIN item-row -->
							<div class="item-row">
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-apple-watch.png" alt="" />
										<div class="discount">13% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product_detail.html">Apple Watch<br />‏Sport Edition</a>
										</h4>
										<p class="item-desc">You. At a glance.</p>
										<div class="item-price">Rp 7.164.450</div>
										<div class="item-discount-price">Rp 8.235.000</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-imac.png" alt="" />
										<div class="discount">10% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">21.5-inch iMac<br />with Retina Display</a>
										</h4>
										<p class="item-desc">Retina. Now in colossal and ginormous.</p>
										<div class="item-price">Rp 19.799.999</div>
										<div class="item-discount-price">Rp 21.999.999</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-macbook-pro.png" alt="" />
										<div class="discount">7% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">MacBook Pro<br />with Retina Display</a>
										</h4>
										<p class="item-desc">Stunning Retina Display</p>
										<div class="item-price">Rp 11.625.000</div>
										<div class="item-discount-price">Rp 12.500.000</div>
									</div>
								</div>
								<!-- END item -->
							</div>
							<!-- END item-row -->
							<!-- BEGIN item-row -->
							<div class="item-row">
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-ipad-pro.png" alt="" />
										<div class="discount">32% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product_detail.html">9.7-inch iPad Pro<br />32GB</a>
										</h4>
										<p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
										<div class="item-price">Rp 6.109.800</div>
										<div class="item-discount-price">Rp 8.985.000</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-mac-pro.png" alt="" />
										<div class="discount">15% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">Mac Pro<br />Quad-Core and Dual GPU</a>
										</h4>
										<p class="item-desc">Built for creativity on an epic scale.</p>
										<div class="item-price">Rp 10.200.000.</div>
										<div class="item-discount-price">Rp. 11.999.999</div>
									</div>
								</div>
								<!-- END item -->
								<!-- BEGIN item -->
								<div class="item item-thumbnail">
									<a href="product_detail.html" class="item-image">
										<img src="../assets/img/product/product-ipad-air.png" alt="" />
										<div class="discount">20% OFF</div>
									</a>
									<div class="item-info">
										<h4 class="item-title">
											<a href="product.html">iPad Air 2<br />32/64Gb</a>
										</h4>
										<p class="item-desc">Light. Heavyweight.</p>
										<div class="item-price">Rp 5.988.000</div>
										<div class="item-discount-price">Rp 7.485.000</div>
									</div>
								</div>
								<!-- END item -->
							</div>
							<!-- END item-row -->
						</div>
						<!-- END search-item-container -->
						<!-- BEGIN pagination -->
						<ul class="pagination justify-content-center mt-0">
							<li class="page-item disabled"><a href="javascript:;" class="page-link">Previous</a></li>
							<li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
							<li class="page-item"><a class="page-link" href="javascript:;">4</a></li>
							<li class="page-item"><a class="page-link" href="javascript:;">5</a></li>
							<li class="page-item"><a class="page-link" href="javascript:;">Next</a></li>
						</ul>
						<!-- END pagination -->
					</div>
					<!-- END search-content -->
				</div>
				<!-- END search-container -->
			</div>
			<!-- END container -->
		</div>
		<!-- END search-results -->
@endsection
