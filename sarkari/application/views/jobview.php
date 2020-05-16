<?php $this->load->view('includes/header.php');?>


<div class="container mt-5">
	<div class="row mt-5">
		<div class="col-md-2 mt-5">
		<?php	$this->load->view('includes/leftmenu');?>

			
		
		</div>
		<div class="col-md-8 mt-5 card">
			<h1 class='text-center'><?php echo isset($jobdata[0]->title)?$jobdata[0]->title:'';?></h1>

			<div class='container'>
				<h5 class="seohead">Job Description</h5>
				<?php echo $jobdata[0]->job_desc?trim($jobdata[0]->job_desc):'';?>
			</div>
			
			<div class="list-group">
				<h4 class="mb-1 seohead">Related links</h4>

				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">List group item heading</h5>
						<small>3 days ago</small>
					</div>
					<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
						varius blandit.</p>
					<small>Donec id elit non mi porta.</small>
				</a>
				
			</div>
		</div>

		<div class="col-md-2 mt-5">
		<?php	$this->load->view('includes/rightmenu');?>

		</div>
	</div>
</div>
<?php $this->load->view('includes/footer.php');?>

