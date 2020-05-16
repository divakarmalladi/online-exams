<?php $this->load->view('includes/header.php');?>

<div class="container mt-3">
    <div class="row">
    <?php $this->load->view('includes/adminsidebar.php');?>

        <div class="col-md-6 mt-5 card">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Cateogry Title</th>
      <th scope="col">Url</th>
      <th scope="col">Cretated on</th>

      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
  <?php if(isset($states) && !empty($states)){
      foreach($states as $stkey => $stval){?>

    <tr>
    <td><?php echo isset($stval->sid)?ucfirst($stval->sid):'';?></td>
    <td><?php echo isset($stval->state_name)?ucfirst($stval->state_name):'';?></td>
    <td><?php echo isset($stval->state_url)?$stval->state_url:'';?></td>
    <td><?php echo isset($stval->createdon)?$stval->createdon:'';?></td>
    <td><?php echo isset($stval->status) && $stval->status==1?'Active':'In active';?></td>


    </tr>
  <?php } }else{?>
    <tr><td>No Records Found</td></tr>

  <?php }?>
  </tbody>
</table>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer.php');?>

