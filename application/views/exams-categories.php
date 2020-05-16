<?php $this->load->view('includes/header');?>	
	<!-- Main container start -->

	<section id="main-container">
		<div class="container margin-t-50">

			<!-- Services -->

			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic">Exam Categories</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<?php
					$i = 1; 
					if(isset($exams) && !empty($exams)){ 
						foreach ($exams as $key => $value) {
							$exm_id = $this->common_lib->encrypt_string($value->id);
							$exam_url = strtolower(str_replace(' ', '-', trim($value->exam_name))).'/'.$exm_id; 
					?>
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
						<a href="<?php echo base_url($exam_url);?>">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-file-text"></i></span>
								<h3><?php echo $value->exam_name;?></h3>
								<p><?php echo $value->exam_description;?></p>
							</div>
						</a>
					</div><!--/ End first service -->

				<?php 
							if($i%4==0){
								echo '</div></div><div class="row"><div class="col-md-12">';
							}
							$i = $i+1;

						} 

					}
				?>
				</div>
			</div><!-- Content 1st row end -->

			<div class="gap-40"></div>
			<!-- Services end -->


		</div><!--/ 1st container end -->
	</section><!--/ Main container end -->
	
<?php $this->load->view('includes/footer');?>