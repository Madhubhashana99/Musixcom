<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php 
		include 'includes/navbar.php'; 
	?>

<br><br>

<div class="no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
	<div id="carousel-example-generic" class="carousel slide w-100" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
		  <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner">
		  <div class="item active">
			<img src="resources/banners/banner2.jpg"  alt="First slide">
		  </div>
		  <div class="item">
			<img src="resources/banners/banner3.jpg"  alt="Second slide">
		  </div>
		  <div class="item">
			<img src="resources/banners/banner4.jpg"  alt="Third slide">
		  </div>
		  <div class="item">
			<img src="resources/banners/banner5.jpg"  alt="Fourth slide">
		  </div>
		  <div class="item">
			<img src="resources/banners/banner1.jpg"  alt="Fifth slide">
		  </div>
		</div>
	</div>
</div>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-12">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
					?>


<br><br>

					<div class="container" id="AB">
						<div class="center-text-h1">
							<p class="text-center text-#2B2D2F">
							<strong>
							Musixlk is a retailer of musical instruments and their accessories, located on 
							Matara, Dikwella and Weligama Sri Lanka. Musixlk will differentiate itself from its 
							direct competitors by marketing the store’s education approach, and one of the 
							most hands-on store layouts of its type in Sri Lanka. In addition, we will offer a 
							wider selection of products which can be purchase through our official web site or 
							physical store, and more services to reward customer loyalty, than our 
							competitors. Customers can come to our physical store and experience every 
							instrument we have and choose what best for them.
							</strong>
							</p>	
						</div>
					</div>	
	        	</div>

	        	<!-- <div class="col-sm-12">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
				<div class="col-sm-3">
	        		<?php include 'includes/sidebar2.php'; ?>
	        	</div> -->
	        </div>
	      </section>

		  		<div class="col-sm-12">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
				<div class="col-sm-2">
	        		<?php include 'includes/sidebar2.php'; ?>
	        	</div>

	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>