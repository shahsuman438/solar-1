<?php include 'header.php';?>

<section class="ss_product_single spacer_top spacer_bottom"> <!--===== Section Product Single Start =====-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="ss_product_img">
					<div id="thumbs_img">
						<ul>
							<li>
								<img class="img-fluid ss_active_bdr" src="assets/images/ss_product1.png" alt="image" />
							</li>
							<li>
								<img class="img-fluid" src="assets/images/ss_product2.png" alt="image" />
							</li>
							<li>
								<img class="img-fluid" src="assets/images/ss_product3.png" alt="image" />
							</li>
							<li>
								<img class="img-fluid" src="assets/images/ss_product4.png" alt="image" />
							</li>
						</ul>
					</div>
					<div class="product_zoom">
						<img id="large_image" class="img-fluid" src="assets/images/ss_product1.png" alt="image" />
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="ss_product_cont wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
					<h1>PV Solar Panel</h1>
					<h2>रू 29.99</h1>
					<span class="ss_rating">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<div class="ss_discount">
						<p><i class="fas fa-tag"></i> Special PriceGet extra 5% off ( price inclusive of discount )<a href="#"> T&C </a></p>
						<p><i class="fas fa-tag"></i> Bank Offer 5% Unlimited Cashback* On Bank Credit Card<a href="#"> T&C </a></p>
						<p><i class="fas fa-tag"></i> Bank Offer5% Cashback* on Bank Debit Cards<a href="#"> T&C </a></p>
					</div>
					<div class="add_to_cart">
						<a href="#" class="ss_btn">Add to Cart</a>
						<a href="#" class="ss_btn">Add to Wishlist</a>
					</div>
					<div class="ss_specifi">
						<h2>Specification</h1>
						<p><span>Model Name</span> <span>Rd-Lantern 5800</span></p>
						<p><span>Width</span> <span>3.5m</span></p>
						<p><span>Height</span> <span>2.5m</span></p>
					</div>
				</div>
			</div>
		</div>	
		<div class="ss_product_disc spacer_top">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="discription-tab" data-toggle="tab" href="#discription" role="tab" aria-controls="discription" aria-selected="true">Discription</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="discription" role="tabpanel" aria-labelledby="discription-tab">
					<h2>Discription</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
				</div>
			    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					<h2>2 Review</h2>
					<div class="ss_comment pt-3">
						<ul>
							<li>
								<div class="comment_img">
									<img class="img-fluid" src="assets/images/user.jpg" alt="Image" title="Image">
								</div>
								<div class="comment_text">
									<a href="#">Michel John</a>
									<a href="#" class="ss_cmnt_date">(8 July, 2019)</a>
									<span class="ss_rating ss_cmnt_reply">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
										<i class="far fa-star"></i>
									</span>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								</div>
								
							</li>
							<li>
								<div class="comment_img">
									<img class="img-fluid" src="assets/images/user.jpg" alt="Image" title="Image">
								</div>
								<div class="comment_text">
									<a href="#">Michel John</a>
									<a href="#" class="ss_cmnt_date">(8 July, 2019)</a>
									<span class="ss_rating ss_cmnt_reply">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
									</span>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
								</div>
								
							</li>
						</ul>
					</div>
					<div class="ss_cmnt_form">
						<h2>Leave a Replay</h2>
						<form>	
							<div class="ss_contact_form">
								<label class="ss_message">Review</label>
								<textarea placeholder="Enter your message"></textarea>
							</div>	
							<div class="ss_contact_form">
								<label>Name</label>
								<input type="text" placeholder="Enter your name">
							</div>	
							<div class="ss_contact_form">
								<label>Email</label>
								<input type="text" placeholder="Enter your email">
							</div>
							<button class="ss_btn">Submit</button>
						</form>
					</div>
			    </div>
			</div>
		</div>
	</div>	
</section>

<?php include 'footer.php';?>