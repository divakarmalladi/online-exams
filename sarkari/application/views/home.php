<?php $this->load->view('includes/header.php');?>

    <!-- Page Content -->
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2 mt-5">


                <div class='card hidden-xs'>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active glow">Sarkari Results</a>
                        <?php if(isset($jobdata) && !empty($jobdata)){
                           foreach($jobdata as $cakey => $cavalue){
                               if(isset($cavalue->jt_id) && $cavalue->jt_id=='6'){?>
                            <a href="<?php echo $this->common->jobviewurl($cavalue->id);?>" class="list-group-item list-group-item-action"><?php echo $cavalue->title?$cavalue->title:'';?></a>
                           <?php }}}?>
                    </div>
                </div>

            </div>
            <div class="col-md-8 text-center">
                <h1 class="mt-5">Welcome To Official Sarkari Result,(SARKARINOTIFY.COM)</h1>
                <div class="row ">
<?php 
$caticons=array('school','briefcase','book-reader','chalkboard-teacher','graduation-cap','burn','power-off','user-md','subway','tty','address-card');
$cls='';
if(!ismobile()){$cls='col-sm-3';}
foreach($categories as $catkey => $catval){ if($catkey<11){ ?>
                    <div class="<?php echo $cls;?> jobcat">
                        <div class="card">
                            <a href="#">
                                <div class="card-body">
                                    <h5 class="card-title"><i class='fas fa-<?php echo isset($caticons[$catkey])?$caticons[$catkey]:'school';?>'></i> <?php echo isset($catval->cname)?ucfirst($catval->cname):'';?></h5>
                                </div>
                                
                            </a>
                        </div>
                    </div>
<?php }}?>
<div class="<?php echo $cls;?> jobcat">
                        <div class="card">
                            <a href="#">
                                <div class="card-body">
                                    <h5 class="card-title"><i class='fas fa-ethernet'></i> Other</h5>
                                </div>
                                
                            </a>
                        </div>
                    </div>
</div>

<!-- <div class="row ">

                    <div class=" col-sm-3 jobcat">
                        <div class="card">
                            <a href="#">
                                <div class="card-body">
                                    <h5 class="card-title">
                                    <img src='<?php //echo base_url();?>assets/images/state-icons/andaman-nicobar.jpg'></img>
                                    Andaman</h5>
                                </div>
                            </a>
                        </div>
                    </div>
</div> -->


                <div class="row my-2">
                    <div class="tab">
                        <button class="tablinks active" onclick="openTab(event, 'State')">State Government</button>
                        <button class="tablinks" onclick="openTab(event, 'Central')">Central Government</button>
                        <button class="tablinks" onclick="openTab(event, 'qualification')">Jobs By
                            Qualification</button>

                    </div>

                    <div id="State" class="tabcontent list-group ">
                        <div class='row'>
                            <div class="col-md-6">
                                <?php $i=1;if(isset($states) && !empty($states)){
                                    foreach($states as $stkeys=>$stvalues){
                                        if($i==7){?>
                                        </div><div class="col-md-6 hidden-xs">
                                        <?php }?>
                                    <a href="#" class="list-group-item list-group-item-action"><?php echo isset($stvalues->state_name)?$stvalues->state_name:''?></a>
                                <?php  $i++; if($i>12){break;}}}?>
                            </div>
                        </div>
                    </div>

                    <div id="Central" class="tabcontent list-group" style="display: none;">
                        <div class='row'>
                            <div class="col-md-6">
                                <a href="#" class="list-group-item list-group-item-action">Army</a>
                                <a href="#" class="list-group-item list-group-item-action">Navy</a>
                                <a href="#" class="list-group-item list-group-item-action">Airforce</a>
                                <a href="#" class="list-group-item list-group-item-action disabled">R.B.I</a>
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <a href="#" class="list-group-item list-group-item-action">Army</a>
                                <a href="#" class="list-group-item list-group-item-action">Navy</a>
                                <a href="#" class="list-group-item list-group-item-action">Airforce</a>
                                <a href="#" class="list-group-item list-group-item-action disabled">R.B.I</a>
                            </div>
                        </div>

                    </div>
                    <div id="qualification" class="tabcontent list-group" style="display: none;">
                        <div class='row'>
                            <div class="col-md-6">
                                <a href="#" class="list-group-item list-group-item-action">SSC</a>
                                <a href="#" class="list-group-item list-group-item-action">Degree</a>
                                <a href="#" class="list-group-item list-group-item-action">MBBS</a>
                                <a href="#" class="list-group-item list-group-item-action disabled">Inter</a>
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <a href="#" class="list-group-item list-group-item-action">Army</a>
                                <a href="#" class="list-group-item list-group-item-action">Navy</a>
                                <a href="#" class="list-group-item list-group-item-action">Airforce</a>
                                <a href="#" class="list-group-item list-group-item-action disabled">R.B.I</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class='row my-2'>
                    <div class="col-md-6 card">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">Latest Notifications</a>
                            <?php if(isset($jobdata) && !empty($jobdata)){
                           foreach($jobdata as $cakey => $cavalue){
                               if(isset($cavalue->jt_id) && $cavalue->jt_id=='1'){?>
                            <a href="#" class="list-group-item list-group-item-action"><?php echo $cavalue->title?$cavalue->title:'';?></a>
                           <?php }}}?>
                        </div>
                    </div>
                    <div class="col-md-6 card">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Sarkari Results
                            </a>
                            <?php if(isset($jobdata) && !empty($jobdata)){
                           foreach($jobdata as $cakey => $cavalue){
                               if(isset($cavalue->jt_id) && $cavalue->jt_id=='2'){?>
                            <a href="#" class="list-group-item list-group-item-action"><?php echo $cavalue->title?$cavalue->title:'';?></a>
                           <?php }}}?>
                        </div>
                    </div>

                </div>
             
                <!-- SEO CONTENT -->
                <div class="row">
                    <?php 
                    if(isset($seodata) && !empty($seodata)){
                    foreach($seodata->home->seocontent as $keys => $vals){?>
                        <div class='card my-2'>
                            <span class='seohead'><strong><?php echo isset($vals->heading)?$vals->heading:"";?></strong></span>
                            <p class='seobody mt-2'><span><?php echo isset($vals->body)?$vals->body:"";?></span></p>
                        </div>
                    <?php }}?>
                </div>
                <!-- SEO CONTENT -->
            </div>
            <div class="col-md-2 mt-5">

                <div class='card hidden-xs'>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active glow">
                            Current Affairs
                        </a>
                       <?php if(isset($jobdata) && !empty($jobdata)){
                           foreach($jobdata as $cakey => $cavalue){
                               if(isset($cavalue->jt_id) && $cavalue->jt_id=='13'){?>
                            <a href="<?php echo $this->common->jobviewurl($cavalue->id);?>" class="list-group-item list-group-item-action"><?php echo $cavalue->title?$cavalue->title:'';?></a>
                           <?php }}}?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php $this->load->view('includes/footer.php');?>
    <script>
//         var app='';
//         var i=1;
//         $("#jobtype option").each(function() {
//             if($( this ).text()==''){i++;}
//             else{
//             app+='("'+$( this ).text()+'"),';
//             }
//         });
// console.log(app);

    function openTab(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
