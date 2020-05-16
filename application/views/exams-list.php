<?php $this->load->view('includes/header'); ?>	
<style type="text/css">.title2:after{top: 70%;}.heading{padding-bottom: 0;}.testBtn{margin-top: 5px;padding: 10px;    font-weight: bold;border-radius: 45%;}</style>
	<!-- About tab start -->
	<section id="about" class="about margin-t-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading text-center">
					
					<h2 class="title2"><?php echo isset($parent[0]->exam_name)?$parent[0]->exam_name.' Exams List':''; ?>
						<span class="title-desc"></span>
					</h2>
				</div>
			</div> <!-- Title row end -->

			<div class="row">
				<div class="featured-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-12 col-sm-12">
						<?php
						if(isset($list) && !empty($list)){
							foreach ($list as $key => $value) {
								
						?>
					  	<li class="">
					  		<a class="animated fadeIn" href="<?php echo base_url(INSTRUCTIONURL.$this->common_lib->encrypt_string($value->id));?>" >
					  			<span class="tab-icon"><i class="fa fa-bank"></i></span>
					  			<div class="tab-info"><h3><?php echo $value->exam_name?></h3></div>
					  			<button class="btn btn-default pull-right testBtn">Take Test</button>
					  		</a>
					  	</li>
					  	<?php
							}
						}
					  	?>
					</ul>
					
	    		</div><!-- Featured tab end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
    </section><!-- About end -->
	
<?php $this->load->view('includes/footer');?>