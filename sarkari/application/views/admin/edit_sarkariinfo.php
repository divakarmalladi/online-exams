<?php $this->load->view('includes/header.php');?>
<div class="container mt-5">
    <div class="row">
    <?php $this->load->view('includes/adminsidebar.php');?>

        <div class="col-md-8 mt-5 card">
        <form method="POST" id='info_frm' name='info_frm'>
        <div class="form-group">
                        <ul class='error'></ul>
                    </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type='text'class="form-control" name='title' id='title' value='<?php echo isset($jobdata[0]->title)?$jobdata[0]->title:''?>' placeholder='Enter Title'>
                    </div>
                    <div class="form-group">
                        <select id='category' name='category' class="form-control">
                        <option value=''>Select Cateogry</option>
                        <?php foreach($categories as $ckey=>$cval){
                            $sel='';
                           if(isset($jobdata) && $jobdata[0]->cid==$cval->cid) $sel='selected';
                           
                            ?>
                        <option value='<?php echo $cval->cid;?>' <?php echo $sel;?>><?php echo $cval->cname;?></option>
                        <?php }?>
                        </select> 
                    </div>
                    <div class="form-group">
                        <select id='subcategory'  name='subcategory' class="form-control">
                        <option value=''>Select Sub Cateogry</option>
                        <?php foreach($subcategories as $sckey=>$scval){
                              $sel='';
                              if(isset($jobdata) && $jobdata[0]->sc_id==$scval->sub_cid) $sel='selected';
                             
                            ?>
                        <option value='<?php echo $scval->sub_cid;?>'  <?php echo $sel;?>><?php echo $scval->sub_categoryname;?></option>
                        <?php }?>
                        </select> 
                    </div>
                    <div class="form-group">
                        <select id='states' class="form-control" name='states'>
                        <option value=''>Select States</option>
                        <?php foreach($states as $stkey=>$stval){
                             $sel='';
                             if(isset($jobdata) && $jobdata[0]->st_id==$stval->sid) $sel='selected';
                            ?>
                        <option value='<?php echo $stval->sid;?>' <?php echo $sel;?>><?php echo $stval->state_name;?></option>
                        <?php }?>
                        </select> 
                    </div>
                    <div class="form-group">
                        <select id='jobtype' class="form-control" name='jobtype'>
                        <option value=''>Select Jobtype</option>
                        <?php foreach($jobtypes as $jtkey=>$jtval){
                              $sel='';
                              if(isset($jobdata) && $jobdata[0]->jt_id==$jtval->jid) $sel='selected';
                             ?>
                        <option value='<?php echo $jtval->jid;?>' <?php echo $sel;?>><?php echo $jtval->job_type;?></option>
                        <?php }?>
                        </select> 
                    </div>
                    <div class="form-group">
                        <select id='status' class="form-control" name='status' >

                        <option value='0' <?php echo $jobdata[0]->status==0?'selected':''?>>In Active</option> 
                        <option value='1' <?php echo $jobdata[0]->status==1?'selected':''?>>Active</option>
                        </select>  
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group" >
                    <textarea id="editor" name='jobdesc'><?php echo isset($jobdata[0]->job_desc)?$jobdata[0]->job_desc:'';?></textarea>

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name='submit' id='sar_submit' value='submit'>
                    </div>    
                </div>
                </div>
            </div>
        </form>
    <div>
</div>
</div>
<?php $this->load->view('includes/footer.php');?>
<script>
$('#category').on('change',function(){
   var catid= $('#category').val();
    $.ajax({
            url:base_url+"Admin/ajax_subcategories",
            type:"post",
            data:{cid:catid},
            success: function(res){
                $('#subcategory').html(res);
            }
        })
});
</script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );

    $('textarea.editor').ckeditor(function() {
        }, { toolbar : [
            ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
            ['Undo','Redo'],
            ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
            ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['Link','Unlink','Anchor', 'Image', 'Smiley'],
            ['Table','HorizontalRule','SpecialChar'],
            ['Styles','BGColor']
        ], toolbarCanCollapse:false, height: '300px', scayt_sLang: 'pt_PT', uiColor : '#EBEBEB' } );



    
$("#sar_submit" ).on('click',function(event){ 
    event.preventDefault();
    var err = {};
    err['title'] = varchar_validate($('#title').val(),1,50,'Title');
    err['category'] = int_validate($('#category').val(),1,4,'category');
    err['subcategory'] = int_validate($('#subcategory').val(),1,4,'subcategory');
    err['states'] = int_validate($('#states').val(),1,4,'states');
    err['jobtype'] = int_validate($('#jobtype').val(),1,4,'jobtype');
    err['status'] = int_validate($('#status').val(),1,4,'status');


    $('.error').html('');
    arr = $.each(err, function(key,value){
            if(value == '' || value == null || value == undefined){
                delete err[key];
            }else{
                $('.error').append("<li>"+err[key]+"</li>").css('color','red');
            } 
     });
     if(Object.keys(arr).length<=0){
        return true;
     }else{
        return false;
    }
 });
</script>