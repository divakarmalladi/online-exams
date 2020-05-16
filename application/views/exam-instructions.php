<?php $this->load->view('includes/header'); ?>
<style type="text/css">
	.feature-box ul{list-style: none;}
	.feature-box ul li{font-size: 16px;padding: 10px;}
	.feature-box ul li .orange{background-color: #ff9900 !important; }
	.icon-pentagon.orange:before{border-bottom: 10px solid #ff9900 !important;}
	.icon-pentagon.orange:after{border-top: 10px solid #ff9900 !important;}

	.feature-box ul li .green{background-color: #05d405 !important; }
	.icon-pentagon.green:before{border-bottom: 10px solid #05d405 !important;}
	.icon-pentagon.green:after{border-top: 10px solid #05d405 !important;}

	.feature-box ul li .blue{background-color: #49a2e7 !important; }
	.icon-pentagon.blue:before{border-bottom: 10px solid #49a2e7 !important;}
	.icon-pentagon.blue:after{border-top: 10px solid #49a2e7 !important;}

	.feature-box ul li .gray{background-color: #d2d2d2 !important; }
	.icon-pentagon.gray:before{border-bottom: 10px solid #d2d2d2 !important;}
	.icon-pentagon.gray:after{border-top: 10px solid #d2d2d2 !important;}

	.feature-box ul li .red{background-color: #d2d2d2 !important; }
	.icon-pentagon.red:before{border-bottom: 10px solid #d2d2d2 !important;}
	.icon-pentagon.red:after{border-top: 10px solid #d2d2d2 !important;}

	.insdesc{margin-top: 0;position: absolute;margin-left: 10px;}
	.dotted-border-right{border-right: 1px dotted #ccc;}

</style>
<!-- Service box start -->
	<section id="feature" class="feature margin-t-50">
		<div class="container">

			<div class="row">
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<ul class="dotted-border-right">
						<li><span class="icon-pentagon orange"></span> 	<span class="insdesc">: Marked the question for review</span></li>
						<li><span class="icon-pentagon green"></span>	<span class="insdesc">:	Answered the question</span></li>
						<li><span class="icon-pentagon blue"></span>	<span class="insdesc">:	Skipped the question</span></li>
						<li><span class="icon-pentagon gray"></span>	<span class="insdesc">:	Not visited yet</span></li>
					</ul>
				</div><!--/ End first featurebox -->
				<div class="feature-box col-sm-8 wow fadeInDown" data-wow-delay=".5s">
					<ul >
						<li><span>Exam Name</span> 	<span class="insdesc">: <?php echo $exam_details[0]->exam_name;?></span></li>
						<?php if($exam_details[0]->tq!='' && $exam_details[0]->tq!=0){ ?>
							<li><span>Total Questions</span> 	<span class="insdesc">: <?php echo $exam_details[0]->tq;?></span></li>
						<?php } ?>
						<?php if($exam_details[0]->exam_time!=''){ ?>
							<li><span>Total Time</span>	<span class="insdesc">:	<?php echo $exam_details[0]->exam_time;?></span></li>
						<?php } ?>
						<li><span>Marks for Correct Answer</span>	<span class="insdesc">:	<?php echo $exam_details[0]->e_q_marks!='' && $exam_details[0]->e_q_marks!=0?$exam_details[0]->e_q_marks:1;?></span></li>
						<?php if($exam_details[0]->max_marks!='' && $exam_details[0]->max_marks!=0){ ?>
							<li><span>Total Marks</span>	<span class="insdesc">:	<?php echo $exam_details[0]->max_marks;?></span></li>
						<?php } ?>
						<li><a href="<?php echo base_url($this->common_lib->exam_url($exam_details[0]->id)); ?>" class="slider btn btn-primary blue">Continue to test</a></li>
					</ul>
				</div><!--/ End first featurebox -->
				
				
			</div><!-- Content row end -->

			<div class="gap-40"></div>

			
			<div class="gap-40"></div>

		</div><!--/ Container end -->
	</section><!--/ Service box end -->

<?php $this->load->view('includes/footer');?>