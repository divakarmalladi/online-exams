<?php $this->load->view('includes/header.php');?>
<div class="container mt-3">
    <div class="row">
    <?php $this->load->view('includes/adminsidebar.php');?>

        <div class="col-md-6 mt-5 card">

<table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Sub Cateogry</th>

        <th scope="col">Cateogry</th>
        <th scope="col">Url</th>
        <th scope="col">Cretated on</th>

        <th scope="col">Status</th>

        </tr>
    </thead>
    <tbody>
    <?php if(isset($subcategories) && !empty($subcategories)){
        foreach($subcategories as $scatkey => $scatval){?>

        <tr>
        <td><?php echo isset($scatval->sub_cid)?ucfirst($scatval->sub_cid):'';?></td>
        <td><?php echo isset($scatval->sub_categoryname)?ucfirst($scatval->sub_categoryname):'';?></td>

        <td><?php echo isset($scatval->cname)?ucfirst($scatval->cname):'';?></td>
        <td><?php echo isset($scatval->curl)?$scatval->curl:'';?></td>
        <td><?php echo isset($scatval->createdon)?$scatval->createdon:'';?></td>
        <td><?php echo isset($scatval->status) && $scatval->status==1?'Active':'In active';?></td>


        </tr>
    <?php } }else{?>
        <tr><td>No Records Found</td></tr>

    <?php }?>
    </tbody>
</table>
<p><?php echo $links;?></p>
        </div>
        <div class="col-md-4 mt-5 card">
        <form method="post">
  <div class="form-group">
    <label for="subcat">Sub category name</label>
    <input type="text" class="form-control" id="subcat" aria-describedby="emailHelp" placeholder="Enter Sub category">
  </div>
  <div class="form-group">
    <label for="status">Select category</label>
<select id='category' class="form-control">
<option value=''>Select Cateogry</option>
<?php foreach($categories as $ckey=>$cval){?>
<option value='<?php echo $cval->cid;?>'><?php echo $cval->cname;?></option>
<?php }?>
</select>  </div>
  <div class="form-group">
    <label for="status">Status</label>
<select id='status' class="form-control"><option value='1'>Active</option> <option value='0'>In Active</option></select>  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
    </div>
</div>
<?php //$this->load->view('includes/footer.php');?>

