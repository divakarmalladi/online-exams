<?php 
$this->load->view('common/header');
$device =  device_type(); 
$schedules = get_schedules();
$worldcuplist = get_worldcup_list();
if($device == 'mobile'){
	$schedulData = array_chunk($schedules, 3);
}else{
	$schedulData = array_chunk($schedules, 9);
}
 

//print_r($schedules); 
?>
<style type="text/css">
	.carousel-item .col-lg-4{max-width: 32.9% !important; display: inline-block !important;}
</style>
	<div class="hero-header hero-bg" style="background:url(assets/img/banner.jpg);">

		<div class="container">

			<div class="row">

				<div class="col-lg-12 no-margin">

					<h1>ICC CRICKET WORLD CUP 2019</h1>

				</div>

				<div class="col-lg-12">

					<div class="box-start">

						<div class="row align-items-center">

							<div class="col-lg-4">

								<div class="info-match">

									<div class="row">



										<div class="col">

											<h4>

												The Oval London

											</h4>

										</div>

									</div>

								</div>

							</div>

							<div class="col-lg-4">

								<div class="horizontal-next-teams">

									<div class="row align-items-center">

										<div class="col">

											<a href="single-team.html">

												<img src="<?php echo base_url();?>assets/img/countries/england.jpg" alt="">

												<span>England</span>

											</a>

										</div>

										<div class="col">

											<strong>Vs</strong>

										</div>

										<div class="col">

											<a href="single-team.html">

												<img src="<?php echo base_url();?>assets/img/countries/south-africa.jpg" alt="">

												<span>South Africa</span>

											</a>

										</div>

									</div>

								</div>

							</div>

						

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>





	<section class="content-info">



		<div class="dark-home paddings-50-50 carousel slide"   data-ride="carousel" id="carouselExampleIndicators">

			<div class="container carousel-inner">

				<?php  if(isset($schedulData) && !empty($schedulData)){
						foreach ($schedulData as $key => $value) {
							//echo '<pre>';print_r($value);	 echo '</pre>';
							$list = array_chunk($value, 3);
							//echo '<pre>';print_r($list);	 echo '</pre>';
					?>
					<div class="row  carousel-item <?php echo $key==0?'active':'';?>">
					<?php if(!empty($list)){ foreach($list as $subkey=>$subval){ //echo '<pre>';print_r($subval);	 echo '</pre>'; ?>
					<div class="<?php echo $device=='mobile'?'col-lg-12':'col-lg-4';?>">

						<div class="recent-results">
							<div class="info-results">
								<ul>
									<?php foreach($subval as $sckey=>$scval){ $team = explode('vs',$scval['match']);?>
									<li>

										<span class="head">

											<?php echo $scval['match'];?> <span class="date"><?php echo $scval['Date'];?></span>

										</span>

										<div class="goals-result">

											<a href="single-team.html">

												<img src="<?php echo base_url();?>assets/img/por.png" alt="">

												<?php echo $team[0];?>

											</a>

											<span class="goals">

												<b>Vs</b>

											</span>

											<a href="single-team.html">

												<img src="<?php echo base_url();?>assets/img/esp.png" alt="">

												<?php echo $team[1];?>

											</a>

										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<?php } } ?>
				</div>
					<?php 
							}
						}
					?>		
				
				

			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
		<div class="section-newsletter no-margin">
			<div class="container">
				<div class="row">
					<?php if(!empty($worldcuplist)){ foreach($worldcuplist as $key=>$val){ ?>
					<div class="card" style="">
					<div class="card-body">
					<h5 class="card-title"><?php echo $val['title'];?></h5>
					<?php echo $val['desc'];?>
					</div>
					</div>
					<?php } } ?>
				</div>
			</div>
		</div>
		<div class="section-newsletter no-margin">

			<div class="container">

				<div class="row">

					<div class="col-md-12">
						<?php /*?>
						<div class="text-center">

							<h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>

							<p>Duis non lorem porta, eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>

						</div>
						<?php */?>
						<form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">

							<div class="row">

								<div class="col-md-6">

									<div class="input-group">

										<span class="input-group-addon">

											<i class="fa fa-envelope"></i>

										</span>

										<input class="form-control" placeholder="Your Name" name="name" type="text" required="required">

									</div>

								</div>

								<div class="col-md-6">

									<div class="input-group">

										<span class="input-group-addon">

											<i class="fa fa-envelope"></i>

										</span>

										<input class="form-control" placeholder="Your  Email" name="email" type="email" required="required">

										<span class="input-group-btn">

											<button class="btn btn-primary" type="submit" name="subscribe">SIGN UP</button>

										</span>

									</div>

								</div>

							</div>

						</form>

						<div id="result-newsletter"></div>

					</div>

				</div>

			</div>

		</div>
	</section>
<?php $this->load->view('common/footer');?>
<script type="text/javascript">
	$('.carousel').carousel()
</script>