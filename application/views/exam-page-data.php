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
	.dotted-border-right{border: 1px dotted #ccc;padding: 5px;max-height: 200px;overflow-y: scroll;}

	.icon-pentagon{height: 15px;width: 30px;}
	.icon-pentagon:before{border-left: 15px solid rgba(0, 0, 0, 0);border-right: 15px solid rgba(0, 0, 0, 0);}
	.icon-pentagon:after{border-left: 15px solid rgba(0, 0, 0, 0);border-right: 15px solid rgba(0, 0, 0, 0);}
	.dotted-border-right li{display: inline-block;padding: 11px;}
	.pad-5{padding: 5px;}
	.badge{background-color: #49a2e7;padding: 5px 10px;border-radius: 10px 0px 10px 0px;}
	.feature-box-quesion ul{list-style: none;padding-left: 0;}
	.feature-box-quesion ul li{padding:5px 0px;}
	.icon-polygon {height: 30px;width: 30px;padding: 5px;position: relative;text-align: center;display: inline-block;border-radius: 10px 0px 10px 0px;color: #fff;}
	/* The container */
	.checkbox-container {position: relative;padding-left: 35px;margin-bottom: 15px;cursor: pointer;font-size: 22px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
	/* Hide the browser's default checkbox */
	.checkbox-container input {position: absolute;opacity: 0;cursor: pointer;height: 0;width: 0;}
	/* Create a custom checkbox */
	.checkmark{position: absolute;top: 0;left: 0;height: 20px;width: 20px;background-color: #e7e7e7;}
	/* On mouse-over, add a grey background color */
	.checkbox-container:hover input ~ .checkmark,.checkbox-container:hover input ~ .checkmark-radio {background-color: #ccc;}
	/* When the checkbox is checked, add a blue background */
	.checkbox-container input:checked ~ .checkmark,.checkbox-container input:checked ~ .checkmark-radio {background-color: #2196F3;}
	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after, .checkmark-radio:after {content: "";position: absolute;display: none;}
	/* Show the checkmark when checked */
	.checkbox-container input:checked ~ .checkmark:after, .checkbox-container input:checked ~ .checkmark-radio:after {display: block;}
	/* Style the checkmark/indicator */
	.checkbox-container .checkmark:after{left: 9px;top: 5px;width: 5px;height: 10px;border: solid white;border-width: 0 3px 3px 0;-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg); transform: rotate(45deg);}
	.checkbox-container .checkmark-radio:after {top: 5px;left: 5px;width: 10px;height: 10px;border-radius: 50%;background: white;}.checkmark-radio {position: absolute;top: 0;left: 0;height: 20px;width: 20px;background-color: #e7e7e7;border-radius: 50%;}
	.btn{padding: 10px 30px;}.btn.btn-primary{border: 1px solid #ff9900 !important;}
	.solid{background: none !important;text-transform: uppercase;}
	.btn-success.solid{color: #05d405 !important;}.btn-danger.solid{color: #49a2e7 !important;border-color: #49a2e7 !important;}.btn-primary.solid{color: #fa9600 !important;}
	.feature-box-buttons{margin-top: 15px;padding-left: 0px;}.feature-box-buttons a{margin: 5px;}
	.error{display: none;color: red;}
	/* width */
::-webkit-scrollbar {width: 5px;}::-webkit-scrollbar-track {background: #f1f1f1;}::-webkit-scrollbar-thumb {
  background: #888; }::-webkit-scrollbar-thumb:hover {  background: #555; }
</style>
<!-- Service box start -->
<section id="feature" class="feature margin-t-50">
	<div class="container">
		<div class="row">
			<form method="post" id="question_submit" class="question_submit">
				<div class="col-sm-12 text-center"><label> Exam Name: <span class="">: <?php echo $exam_details[0]->exam_name;?></label></div>
				<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
					<ul class="dotted-border-right">
						<?php 
							for($i=0; $i<$exam_details[0]->tq;$i++){
								$btnColor = isset($submitted[$i]->btn_clr)?$submitted[$i]->btn_clr:(isset($submitted[$i]['btn_clr'])?$submitted[$i]['btn_clr']:'icon-polygon gray');
									$style = $quesNumber==$i?'style="border-left: 2px solid #49a2e7;border-right: 2px solid #49a2e7;"':'';
						?>
						<li><a href="javascript:;" id="<?php echo $i;?>"><span class="<?php echo $btnColor;?>" <?php echo $style;?> ><?php echo $i+1;?></span></a></li>
						<?php  } ?>
					</ul>
					<ul class="pad-5">
						<li>Total Questions <span class="badge badge-primary" > <?php echo $exam_details[0]->tq;?> </span></li>
						<li>Attempted Questions <span class="badge badge-primary" id="aquest"> 0</span></li>
						<li>Review Questions <span class="badge badge-primary" id="rquest"> 0</span></li>
						<li>Skipped Questions <span class="badge badge-primary" id="squest"> 0</span></li>
					</ul>
				</div><!--/ End first featurebox -->
				<div class="feature-box-quesion col-sm-8 wow fadeInDown" data-wow-delay=".5s">

					<h5><?php echo $question->question;?></h5>
					<ul>
						<?php if(isset($type) && $type=='checkbox'){  ?>
						<li><label for="checkbox1" class="checkbox-container"><input type="checkbox" id="checkbox1">   <span class="checkmark"></span></label> <span>Pension, Education and Food grains</span>	</li>
						
						<?php }else{ ?>

						<?php if(isset($question->option1) && $question->option1!=''){ 
							//$checked1 = $this->common_lib->check_submitted_data($submitted, $quesNumber, $value);
							
							?>
							<li><label for="checkbox1" class="checkbox-container"><input name="choose_answer" type="radio" id="checkbox1" value="1" data-id="<?php echo $question->option1;?>" <?php echo $this->common_lib->check_submitted_data($submitted, $quesNumber, 1);?> >  <span class="checkmark-radio"></span></label> <span><?php echo $question->option1;?></span>	</li>
						<?php } if(isset($question->option2) && $question->option2!=''){ ?>
							<li><label for="checkbox2" class="checkbox-container"><input name="choose_answer" type="radio" id="checkbox2" value="2" data-id="<?php echo $question->option2;?>" <?php echo $this->common_lib->check_submitted_data($submitted, $quesNumber, 2);?> >  <span class="checkmark-radio"></span></label> <span><?php echo $question->option2;?></span>	</li>
						<?php } if(isset($question->option3) && $question->option3!=''){ ?>
							<li><label for="checkbox3" class="checkbox-container"><input name="choose_answer" type="radio" id="checkbox3" value="3" data-id="<?php echo $question->option3;?>" <?php echo $this->common_lib->check_submitted_data($submitted, $quesNumber, 3);?> >  <span class="checkmark-radio"></span></label> <span><?php echo $question->option3;?></span>	</li>
						<?php } if(isset($question->option4) && $question->option4!=''){ ?>
							<li><label for="checkbox4" class="checkbox-container"><input name="choose_answer" type="radio" id="checkbox4" value="4" data-id="<?php echo $question->option4;?>" <?php echo $this->common_lib->check_submitted_data($submitted, $quesNumber, 4);?> >  <span class="checkmark-radio"></span></label> <span><?php echo $question->option4;?></span>	</li>
						<?php } if(isset($question->option5) && $question->option5!=''){ ?>
							<li><label for="checkbox5" class="checkbox-container"><input name="choose_answer" type="radio" id="checkbox5" value="5" data-id="<?php echo $question->option5;?>" <?php echo $this->common_lib->check_submitted_data($submitted, $quesNumber, 5);?> >  <span class="checkmark-radio"></span></label> <span><?php echo $question->option5;?></span>	</li>
							
						<?php } } ?>
						<li class="error" id="error_id">Please choose / select an option to proceed</li>
					</ul>
					<div class="feature-box-buttons col-sm-8 wow fadeInDown" data-wow-delay=".5s">
					<a href="javascript:;" class="btn btn-success solid square" id="submit"><?php echo $exam_details[0]->tq>$quesNumber+1?'Next':'Submit';?></a>
					<a href="javascript:;" class="btn btn-primary solid square" id="review">Save for review</a>
					<a href="javascript:;" class="btn btn-danger solid square" id="skip">Skip</a>
				</div>
				</div><!--/ End first featurebox -->
				
			</form>
		</div><!-- Content row end -->
		<div class="gap-40"></div>
		<div class="gap-40"></div>
	</div><!--/ Container end -->
</section>
<!--/ Service box end -->
<script type="text/javascript">
	$('.feature-box-buttons a').on('click', function(e){
		$('#error_id').hide();
		var attr_id = $(this).attr('id');
		var selected_answer = $('input[name=choose_answer]:checked').val();
		var selected_text = $('input[name=choose_answer]:checked').data('id');
		if((selected_answer=='' || selected_answer==undefined || selected_answer==null) && attr_id!='skip'){
			$('#error_id').show(); return false;
		}else{
			var submitt = '';
			if("<?php echo $exam_details[0]->tq-1;?>"=="<?php echo $quesNumber;?>"){
				if(confirm("Are you sure to submit the test")){
					submitt = 'submit_test';
				}
			}
			$.ajax({
				url:"<?php echo base_url();?>exam-question-submit",
				type:"POST",
				data:{option:selected_text, action:attr_id,question_id:<?php echo $question->id;?>,quesNumber:<?php echo $quesNumber;?>,load:"next",selected_text:selected_answer,submit_test:submitt},
				success: function(result){
					if(result!=''){
						if("<?php echo $exam_details[0]->tq-1;?>">"<?php echo $quesNumber;?>"){
							$('#exam_data').html(result);
							$('#aquest').html($('.icon-polygon.green').length);
							$('#squest').html($('.icon-polygon.blue').length);
							$('#rquest').html($('.icon-polygon.orange').length);
						}
					}else{
						console.log('Failed to load exam page');
					}
				}
			})
		}
	});
	$('.feature-box a').on('click', function(e){
		var attr_id = $(this).attr('id');
		$.ajax({
			url:"<?php echo base_url();?>exam-page-data",
			type:"POST",
			data:{quesNumber:attr_id,load:"select"},
			success: function(result){
				if(result!=''){
					$('#exam_data').html(result);
				}else{
					console.log('Failed to load exam page');
				}
			}
		})
	});
</script>