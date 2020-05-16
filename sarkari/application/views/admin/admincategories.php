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
  <?php if(isset($categories) && !empty($categories)){
      foreach($categories as $catkey => $catval){?>

    <tr>
    <td><?php echo isset($catval->cid)?ucfirst($catval->cid):'';?></td>
    <td><?php echo isset($catval->cname)?ucfirst($catval->cname):'';?></td>
    <td><?php echo isset($catval->curl)?$catval->curl:'';?></td>
    <td><?php echo isset($catval->createdon)?$catval->createdon:'';?></td>
    <td><?php echo isset($catval->status) && $catval->status==1?'Active':'In active';?></td>


    </tr>
  <?php } }else{?>
    <tr><td>No Records Found</td></tr>

  <?php }?>
  </tbody>
</table>
        </div>
        <div class="col-md-4 mt-5 card">
        <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">category name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="status">Status</label>
<select id='status' class="form-control"><option value='1'>Active</option> <option value='0'>In Active</option></select>  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
    </div>
</div>
<?php $this->load->view('includes/footer.php');?>

