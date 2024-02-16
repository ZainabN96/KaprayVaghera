<?php include 'include/header2.php' ?>


<br> 
		<div class="shop-with-sidebar">
			<div class="container">
				<div class="row flex-column-reverse flex-lg-row">
					<!-- left sidebar start -->
					<div class="col-lg-3 col-12 text-start ">
						<div class="topbar-left">
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img width="31" height="34" src="img/bar-ping.webp" alt=""></div>
									<h2>Shop by</h2>
								</div>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Categories</h6>
								</div>
								<ul class="sidebar-tags">
									<li><a href="#">Tops</a><span> (14)</span></li>
									<li><a href="#">Bottoms</a><span> (14)</span></li>
									
								</ul>
							</aside>
							<!-- <aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Availability</h6>
								</div>
								<ul>
									<li><a href="#">Not available</a><span> (1)</span></li>
									<li><a href="#">In stock</a><span> (2)</span></li>
								</ul>
							</aside> -->
							<aside class="topbarr-category sidebar-content">
								<div class="tpbr-title sidebar-title col-md-12 nopadding">
									<h6>Filter by price</h6>
								</div>
								<div class="tpbr-menu col-md-12 nopadding">
									<!-- shop-filter start -->
									<div class="price-bar">
										<div class="info_widget">
											<div class="price_filter">
												<div id="slider-range"></div>
												<div class="price_slider_amount">
													<input type="submit" class="filter-price" value="Filter"/>
													<div class="filter-ranger">
														<h6>Price:</h6>
														<input type="text" id="amount" name="price" placeholder="Add Your Price" />
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- shop-filter end -->
								</div>
							</aside>
							<aside class="hd-gg sidebar-content">
								<div class="sidebar-title">
									<h6>Size</h6>
								</div>
								<ul>
									<li><a href="#">S</a><span> (18)</span></li>
									<li><a href="#">M</a><span> (24)</span></li>
									<li><a href="#">L</a><span> (21)</span></li>
								</ul>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Color</h6>
								</div>
								<ul>
									<li><a href="#">Beige</a><span> (1)</span></li>
									<li><a href="#">White</a><span> (2)</span></li>
									<li><a href="#">Orange</a><span> (2)</span></li>
									<li><a href="#">Black</a><span> (2)</span></li>
									<li><a href="#">Blue</a><span> (2)</span></li>
									<li><a href="#">Green</a><span> (2)</span></li>
									<li><a href="#">Yellow</a><span> (2)</span></li>
									<li><a href="#">Pink</a><span> (2)</span></li>
								</ul>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Type</h6>
								</div>
								<ul>
									<li><a href="#">Embroidered</a><span> (3)</span></li>
									<li><a href="#">Printed</a><span> (9)</span></li>
								
								</ul>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Styles</h6>
								</div>
								<ul>
									<li><a href="#">Casual</a><span> (1)</span></li>
									<li><a href="#">Dressy</a><span> (2)</span></li>
									<li><a href="#">Girly</a><span> (2)</span></li>
								</ul>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Properties</h6>
								</div>
								<ul>
									<li><a href="#">Colorful Dress</a><span> (1)</span></li>
									<li><a href="#">Maxi Dress</a><span> (2)</span></li>
									<li><a href="#">Midi Dress</a><span> (2)</span></li>
									<li><a href="#">Short Dress</a><span> (2)</span></li>
									<li><a href="#">Short Sleeve</a><span> (2)</span></li>
								</ul>
							</aside>		
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img width="31" height="34" src="img/bar-ping.webp" alt=""></div>
									<h2>Tags</h2>
								</div>
								<div class="exp-tags">
									<div class="tags">
										<a href="#">camera</a>
										<a href="#">mobile</a>
										<a href="#">electronic</a>
										<a href="#">destop</a>
										<a href="#">tablet</a>
										<a href="#">accessories</a>
										<a href="#">camcorder</a>
										<a href="#">laptop</a>
									</div>
								</div>
							</aside>
						</div>
					</div>
					<!-- left sidebar end -->

                    <!-- right sidebar start -->
					<div class="col-lg-9 col-12">
						<!-- shop toolbar start -->
						<div class="shop-content-area">
							<div class="shop-toolbar d-flex flex-column align-item-start flex-md-row justify-content-start justify-content-md-between">
								<div class="col-auto mb-3">
									<form class="tree-most" method="get">
										<div class="orderby-wrapper">
											<label>Sort By</label>
											<select name="orderby" class="orderby">
												<option value="menu_order" selected="selected">Default sorting</option>
												<option value="popularity">Sort by popularity</option>
												<option value="rating">Sort by average rating</option>
												<option value="date">Sort by newness</option>
												<option value="price">Sort by price: low to high</option>
												<option value="price-desc">Sort by price: high to low</option>
											</select>
										</div>
									</form>
								</div>
								<div class="col-auto text-center">
									<div class="limiter">
										<label>Show</label>
										<select>
											<option selected="selected" value="9">9</option>
											<option value="">12</option>
											<option value="">24</option>
											<option value="">36</option>
										</select>
										per page        
									</div>
								</div>
								<div class="col-auto">
									<div class="view-mode">
										<label>View on</label>
										<ul class="nav">
											<li class="nav-item"><button class="nav-link active" data-bs-target="#shop-grid-tab" data-bs-toggle="tab"><i class="fa fa-th"></i></button></li>
											<li class="nav-item "><button class="nav-link" data-bs-target="#shop-list-tab" data-bs-toggle="tab" ><i class="fa fa-th-list"></i></button></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- shop toolbar end -->
						<!-- product-row start -->
						<div class="tab-content">
							<div class="tab-pane fade show active" id="shop-grid-tab">
								<div class="row">
									<div class="col-12">
										<div class="shop-product-tab first-sale">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<span class="sale-text">Sale</span>
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-7.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-2.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$110.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-8.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-12.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$300.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Donec non est</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-6.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-12.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$200.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- product-row end -->
								<!-- product-row start -->
								<div class="row">
									<div class="col-12">
										<div class="shop-product-tab first-sale">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<span class="sale-text">Sale</span>
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-4.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-2.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$250.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-3.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-9.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$370.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<span class="sale-text">Sale</span>
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-9.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-12.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$170.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- product-row end -->
								<!-- product-row start -->
								<div class="row">
									<div class="col-12">
										<div class="shop-product-tab first-sale">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-1.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-1.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$450.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-2.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-3.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$300.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Consequences</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-4.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-5.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$350.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- product-row end -->
								<!-- product-row start -->
								<div class="row">
									<div class="col-12">
										<div class="shop-product-tab first-sale">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-6.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-7.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$250.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-9.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-10.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$180.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="two-product">
														<!-- single-product start -->
														<div class="single-product">
															<span class="sale-text">Sale</span>
															<div class="product-img">
																<a href="#">
																	<img width="540" height="660" class="primary-image" src="img/products/product-11.webp" alt="" />
																	<img width="540" height="660" class="secondary-image" src="img/products/product-12.webp" alt="" />
																</a>
																<div class="action-zoom">
																	<div class="add-to-cart">
																		<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
																	</div>
																</div>
																<div class="actions">
																	<div class="action-buttons">
																		<div class="add-to-links">
																			<div class="add-to-wishlist">
																				<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																			</div>
																			<div class="compare-button">
																				<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																			</div>									
																		</div>
																		<div class="quickviewbtn">
																			<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																		</div>
																	</div>
																</div>
																<div class="price-box">
																	<span class="new-price">$310.00</span>
																</div>
															</div>
															<div class="product-content">
																<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
																<p>Nunc facilisis sagittis ullamcorper...</p>
															</div>
														</div>
														<!-- single-product end -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- product-row end -->
							</div>
							<!-- list view -->
							<div class="tab-pane fade" id="shop-list-tab">
								<div class="list-view">
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-7.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-2.webp" alt="" />
														</a>
													</div>								
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$110.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>										
													</div>									
												</div>
											</div>	
										</div>
									</div>
									<!-- single-product end -->	
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-7.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-8.webp" alt="" />
														</a>
													</div>									
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$450.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>												
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-5.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-6.webp" alt="" />
														</a>
													</div>
												</div>									
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$380.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-11.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-12.webp" alt="" />
														</a>
													</div>
												</div>								
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$340.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div> 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-9.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-10.webp" alt="" />
														</a>
													</div>									
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$400.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div> 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-6.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-7.webp" alt="" />
														</a>
													</div>									
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$200.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-4.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-5.webp" alt="" />
														</a>
													</div>								
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$440.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-2.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-3.webp" alt="" />
														</a>
													</div>								
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Imperial Consequences</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$334.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-4.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-2.webp" alt="" />
														</a>
													</div>									
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Consequences</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$220.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-1.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-1.webp" alt="" />
														</a>
													</div>									
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$230.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
								</div>
							</div>
							<!-- shop toolbar start -->
							<div class="shop-content-bottom mb-5 mb-lg-0">
								<div class="shop-toolbar btn-tlbr">
									<div class="col-auto text-center">
										<div class="pages">
											<label>Page:</label>
											<ul class="d-inline-flex">
												<li class="current">1</li>
												<li><a href="#">2</a></li>
												<li><a href="#" class="next i-next" title="Next"><i class="fa fa-arrow-right"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- shop toolbar end -->
						</div>
					</div>
					<!-- right sidebar end -->
				</div>
			</div>
		</div>


<!-- FOOTER START -->
<?php include 'include/footer.php' ?>
<!-- FOOTER END -->