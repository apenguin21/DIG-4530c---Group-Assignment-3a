<!DOCTYPE HTML>
<html>
<?php
	$page_title = 'Product';
	include '_components/head.php'; 
?>
<body>
	<?php include '_components/header.php'; ?>

	<div class="single">
		<div class="wrap">
			<div>
			  	<div class="labout span_1_of_a1">
					<img src="images/t1.jpg" /><!-- product image -->
				</div>

				<div class="cont1 span_2_of_a1">
					<h3 class="m_3">Lorem ipsum dolor sit amet</h3><!-- product name -->
					<div class="price_single">
						<span>$66.00</span><!-- product price -->
					</div>
					<ul class="options">
						<h4 class="m_9">Select a Size</h4><!-- product size -->
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">8</a></li>
						<li><a href="#">9</a></li>
						<div class="clear"></div>
					</ul>
					<div class="btn_form">
					   <form>
						 <input type="submit" value="buy now" title="">
					  </form>
					</div>
					<p class="m_desc"><!-- product description -->
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					</p>
					<div class="toogle">
						<h3 class="m_3">Product Reviews</h3>
						<!-- start loop to populate product reviews -->
						<span>4</span><span>/5</span><!-- review rating -->
						<p class="m_text"><!-- review text -->
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
						</p>
						<!-- end loop -->
					</div>
				</div>

				<div class="clear"></div>

				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
	</div>

    <?php include '_components/footer.php'; ?>
</body>
</html>