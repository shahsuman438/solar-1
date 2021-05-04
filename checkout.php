<?php include 'header.php';?>

<section class="ss_checkout spacer_top spacer_bottom"> <!--===== Section Checkout Start =====-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_address_form ss_box_bg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
					<form>
						<h2>Contact Detail</h2>
						<input type="text" placeholder="First Name" class="require"/>
						<input type="text" placeholder="Last Name" class="require"/>
						<input type="text" placeholder="Email Address" class="require" data-valid="email" data-error="Email should be valid."/>
						<input type="text" placeholder="Contact Number" class="require"/>
						<div class="ss_border"></div>
						<h2>Shipping Address</h2>
						<label class="select_cart">
							<select>
								<option>Select Country</option>
								<option>Nepal</option>
								<option>India</option>
								<option>USA</option>
							</select>
						</label>
						<label class="select_cart">
							<select>
								<option>Select State</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</label>
						<label class="select_cart">
							<select>
								<option>Select City</option>
								<option>Birgunj</option>
								<option>KTM</option>
							</select>
						</label>
						<input type="text" placeholder="Zip Code" class="require"/>
						<button class="ss_btn show_c_one">Next Step</button>
					</form>
				</div>	  
			</div>	
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_address_form ss_box_bg show_cart_one wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
					<form>
						<h2>Payment Method</h2>
						<div class="ss_payment">
							<a href="#">
								<i class="far fa-credit-card"></i>
							</a>
						</div>
						<div class="ss_border"></div>
						<h2>Details</h2>
						<label class="select_cart">
							<select>
								<option>Select Type</option>
								<option>Visa Card</option>
								<option>MasterCard</option>
							</select>
						</label>
						<input type="text" placeholder="Name" class="require"/>
						<input type="text" placeholder="Card No. xxxx-xxx-xxxx-4586" class="require"/>
						<div class="ss_cvv">
							<span><input type="text" placeholder="Expiry Date 25/22" class="require"/></span>
							<span><input type="text" placeholder="CVV xxx" class="require"/></span>
						</div>
						<button class="ss_btn show_c_two">Next Step</button>
					</form>
				</div>	
			</div>	
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_address_form ss_box_bg show_cart_two wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">
					<form>
						<div class="ss_order">
							<div class="ss_order_one">
								<h2 class="pb-3">Shipping To</h2>
							</div>
							<div class="ss_order_two">
								<a href="#">Edit</a>
							</div>
							<p>Birgunj, 44300, Nepal</p>
						</div>
						<div class="ss_border"></div>
						<div class="ss_order">
							<div class="ss_order_one">
								<h2 class="pb-3">Payment Detail</h2>
							</div>
							<div class="ss_order_two">
								<a href="#">Edit</a>
							</div>
							<div class="ss_order_one">
								<p>xxxx-xxxx-xxxx-1234</p>
							</div>
							<div class="ss_order_two">
								<i class="far fa-credit-card"></i>
							</div>
						</div>
						<div class="ss_border"></div>
						<div class="ss_order">
							<div class="ss_order_one">
								<h2 class="pb-3">Delevery</h2>
							</div>
							<div class="ss_order_two">
							</div>
							<div class="ss_order_one">
								<div class="s_remember">
									<label>Standard (3 days)
										<input type="checkbox">
										<span class="s_checkbox"></span>
									</label>
								</div>
							</div>
							<div class="ss_order_two">
								<p>रू 10</p>
							</div>
							<div class="ss_order_one">
								<div class="s_remember">
									<label>Express (2 days)
										<input type="checkbox">
										<span class="s_checkbox"></span>
									</label>
								</div>
							</div>
							<div class="ss_order_two">
								<p>रू 20</p>
							</div>
							<div class="ss_order_one">
								<div class="s_remember">
									<label>Premium (1 days)
										<input type="checkbox">
										<span class="s_checkbox"></span>
									</label>
								</div>
							</div>
							<div class="ss_order_two">
								<p>रू 30</p>
							</div>
						</div>
						<button class="ss_btn show_c_three">Submit Order</button>
					</form>
				</div>	
			</div>	
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_address_form ss_box_bg show_cart_three wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
					<div class="order_success text-center">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 491.695 491.695">
						<g>
							<path d="M436.714,0H149.471c-16.438,0-29.812,13.374-29.812,29.812v66.714c-54.49,15.594-94.489,65.857-94.489,125.288
								c0,59.431,39.998,109.694,94.489,125.288v114.783c0,16.438,13.374,29.812,29.812,29.812h234.733c2.785,0,5.455-1.106,7.425-3.075
								l71.821-71.822c1.969-1.969,3.075-4.64,3.075-7.425V29.812C466.525,13.374,453.152,0,436.714,0z M149.471,21h287.243
								c4.858,0,8.811,3.953,8.811,8.812v31.689H140.659V29.812C140.659,24.953,144.612,21,149.471,21z M46.17,221.813
								c0-60.263,49.027-109.29,109.29-109.29c60.263,0,109.29,49.027,109.29,109.29s-49.027,109.291-109.29,109.291
								C95.197,331.104,46.17,282.076,46.17,221.813z M140.659,461.884V351.258c4.86,0.552,9.797,0.846,14.802,0.846
								c39.135,0,74.292-17.347,98.195-44.752h64.336c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-49.381
								c9.133-15.95,14.984-34.005,16.644-53.242h32.736c5.799,0,10.5-4.701,10.5-10.5c0-5.799-4.701-10.5-10.5-10.5h-32.603
								c-1.42-19.194-7.02-37.242-15.886-53.241h48.488c5.799,0,10.5-4.701,10.5-10.5c0-5.799-4.701-10.5-10.5-10.5h-62.974
								c-23.918-28.323-59.67-46.347-99.558-46.347c-5.005,0-9.942,0.294-14.802,0.846v-9.867h304.866v316.372h-42.009
								c-16.439,0-29.811,13.374-29.811,29.811v42.011H149.471C144.612,470.695,140.659,466.743,140.659,461.884z M394.705,455.845v-27.16
								c0-4.859,3.953-8.811,8.811-8.811h27.16L394.705,455.845z"/>
							<path d="M359.246,158.869h34.87c5.799,0,10.5-4.701,10.5-10.5c0-5.799-4.701-10.5-10.5-10.5h-34.87c-5.799,0-10.5,4.701-10.5,10.5
								C348.746,154.168,353.447,158.869,359.246,158.869z"/>
							<path d="M359.246,233.11h34.87c5.799,0,10.5-4.701,10.5-10.5c0-5.799-4.701-10.5-10.5-10.5h-34.87c-5.799,0-10.5,4.701-10.5,10.5
								C348.746,228.409,353.447,233.11,359.246,233.11z"/>
							<path d="M359.246,307.352h34.87c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-34.87c-5.799,0-10.5,4.701-10.5,10.5
								S353.447,307.352,359.246,307.352z"/>
							<path d="M394.116,381.593c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-98.225c-5.799,0-10.5,4.701-10.5,10.5
								s4.701,10.5,10.5,10.5H394.116z"/>
							<path d="M236.982,168.845l-12.81-12.81c-3.45-3.449-8.036-5.349-12.915-5.349s-9.465,1.9-12.915,5.349l-67.19,67.19l-18.573-18.573
								c-3.449-3.448-8.036-5.348-12.914-5.348c-4.878,0-9.465,1.9-12.914,5.349l-12.813,12.812c-7.12,7.121-7.12,18.708,0.001,25.829
								l44.297,44.296c3.45,3.451,8.037,5.351,12.916,5.351c0,0,0.001,0,0.001,0c4.878,0,9.465-1.9,12.913-5.349l92.917-92.917
								C244.103,187.554,244.103,175.966,236.982,168.845z M131.151,270.807l-40.429-40.428l8.942-8.942l24.062,24.062
								c4.101,4.101,10.749,4.101,14.85,0l72.681-72.681l8.942,8.942L131.151,270.807z"/>
						</g>
						</svg>
						<h2>Congratulations!<br> Your order is accepted</h2>
						<p>We will send to your notification when the goods will be delivered</p>
						<a href="index.php" class="ss_btn">Continue Shopping</a>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</section>

<?php include 'footer.php';?>