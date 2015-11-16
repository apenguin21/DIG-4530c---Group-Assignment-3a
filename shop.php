<!DOCTYPE HTML>
<html>
<?php
	$page_title = 'Shop';
	include '_components/head.php'; 
?>
<body>
	<?php include '_components/header.php'; ?>
    <div class="login">
        <div class="wrap">
			<div class="box1">
				<!-- start loop to populate products -->
				<div class="col_1_of_single1 span_1_of_single1">
					<a href="single.php"><!-- product link -->
						<div class="view1 view-fifth1">
							<div class="top_box">
								<h3 class="m_1">Lorem ipsum dolor sit amet</h3><!-- product name -->
								<p class="m_2">Lorem ipsum</p><!-- product category -->
								<div class="grid_img">
									<div class="css3">
										<img src="images/pic11.jpg" alt=""/><!-- product image -->
									</div>
								  	<div class="mask1">
										<div class="info">Quick View</div>
								  	</div>
								</div>
								<div class="price">£480</div><!-- product price -->
							</div>
						</div>
					</a>
				</div>
				<!-- end loop -->
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php include '_components/footer.php'; ?>
</body>
</html>