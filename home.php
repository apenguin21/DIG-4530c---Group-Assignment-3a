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
						<a href="single.php"><!-- product link -->
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