<!DOCTYPE HTML>
<html>
<?php
	$page_title = 'Home';
	include '_components/head.php'; 
?>
<body>
	<?php include '_components/header.php'; ?>
    <div class="index-banner">
	   	<div class="banner-wrap">
	   		<!-- start code to populate featured product -->
		   	<div class="slider-left">
				<img src="images/banner1.jpg" alt=""/><!-- product description -->
			</div>
			<div class="slider-right">
			    <h1>Classic</h1><!-- product name -->
			    <h2>White</h2><!-- product category -->
			    <p>Lorem ipsum dolor sit amet</p><!-- product description -->
			    <div class="btn">
			    	<a href="shop.php">Shop Now</a><!-- product url -->
			    </div>
			</div>
			<!-- end featured product code -->
			<div class="clear"></div>
		</div>
    </div>
    <div class="main">
        <div class="wrap">
			<div class="content-bottom">
				<div class="box1">
					<!-- start loop to populate products -->
					<div class="col_1_of_3 span_1_of_3">
						<a href="single.html"><!-- product link -->
						    <div class="view view-fifth">
						  		<div class="top_box">
							  		<h3 class="m_1">Lorem ipsum dolor sit amet</h3><!-- product name -->
							  		<p class="m_2">Lorem ipsum</p><!-- product category -->
						         	<div class="grid_img">
								   		<div class="css3">
								   			<img src="images/pic3.jpg" alt=""/><!-- product image -->
								   		</div>
							          	<div class="mask">
			                       			<div class="info">Quick View</div>
					                  	</div>
			                    	</div>
		                       		<div class="price">$40</div><!-- product price -->
							   	</div>
							</div>
							<span class="rating"><!-- product avg review -->
								<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
								<label for="rating-input-1-5" class="rating-star1"></label>

								<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
								<label for="rating-input-1-4" class="rating-star1"></label>

								<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
								<label for="rating-input-1-3" class="rating-star1"></label>

								<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
								<label for="rating-input-1-2" class="rating-star"></label>

								<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
								<label for="rating-input-1-1" class="rating-star"></label>&nbsp;
				    	    </span>
							<ul class="list">
								<li>
									<img src="images/plus.png" alt=""/>
								  	<ul class="icon1 sub-icon1 profile_img">
										<li>
											<a class="active-icon c1" href="#">Add To Cart</a>
											<ul class="sub-icon1 list">
												<li><h3>sed diam nonummy</h3><a href=""></a></li>
												<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
											</ul>
									  	</li>
									</ul>
								</li>
							</ul>
					    	<div class="clear"></div>
				    	</a>
				    </div>
				    <!-- end loop -->
					<div class="clear"></div>
				</div>
			</div>
		</div>
    </div>
    <?php include '_components/footer.php'; ?>
</body>
</html>