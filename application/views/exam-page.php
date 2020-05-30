<?php $this->load->view('includes/header'); ?>
<div class="exam_data" id="exam_data">
	<?php //$this->load->view('exam-page-data.php');?>
</div>
<?php $this->load->view('includes/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url:"<?php echo base_url();?>exam-page-data",
			type:"POST",
			data:{exam_id:"<?php echo $exam_id;?>",quesNumber:0,load:"first"},
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