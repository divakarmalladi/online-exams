<?php $this->load->view('includes/header.php');?>
<div class="container mt-3">
    <div class="row">
    <?php $this->load->view('includes/adminsidebar.php');?>

        <div class="col-md-10 mt-5 card">
        <div class='col-md-2'>
        <a class='btn btn-primary text-right' href='<?php echo base_url();?>admin-createinfo'>Add job</a>

        </div>

<table class="table border">

    <thead>
        <tr>
        <th scope="col">Title</th>

        <th scope="col">Cateogry</th>
        <th scope="col">Sub Cateogry</th>
        <th scope="col">State</th>
        <th scope="col">Job type</th>

        <th scope="col">Cretated on</th>

        <th scope="col">Status</th>

        </tr>
    </thead>
    <tbody>
    <?php if(isset($jobslist) && !empty($jobslist)){
        foreach($jobslist as $jkey => $jval){?>

        <tr>        
        <td><a href='<?php echo base_url();?>admin-editinfo/<?php echo isset($jval->id)?$jval->id:'';?>'><?php echo isset($jval->title)?ucfirst($jval->title):'';?></a></td>

        <td><?php echo isset($jval->cname)?ucfirst($jval->cname):'';?></td>
        <td><?php echo isset($jval->sub_categoryname)?ucfirst($jval->sub_categoryname):'';?></td>

        <td><?php echo isset($jval->state_name)?$jval->state_name:'';?></td>
        <td><?php echo isset($jval->job_type)?$jval->job_type:'';?></td>

        
        <td><?php echo isset($jval->createdon)?$jval->createdon:'';?></td>
        <td>
            <?php $cls= isset($jval->status) && $jval->status==1?'text-success':'text-danger';?>	
            <span class='fas fa-user <?php echo $cls;?>'></span>
        </td>


        </tr>
    <?php } }else{?>
        <tr><td>No Records Found</td></tr>

    <?php }?>
    </tbody>
</table>
<p><?php echo $links;?></p>
        </div>
        
    </div>
</div>
<?php $this->load->view('includes/footer.php');?>

