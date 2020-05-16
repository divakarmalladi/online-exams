
		<div class='card hidden-xs'>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active glow">
                            Current Affairs
                        </a>
                       <?php if(isset($sidemenudata) && !empty($sidemenudata)){
                           foreach($sidemenudata as $cakey => $cavalue){
                               if(isset($cavalue->jt_id) && $cavalue->jt_id=='13'){?>
                            <a href="<?php echo $this->common->jobviewurl($cavalue->id);?>" class="list-group-item list-group-item-action"><?php echo $cavalue->title?$cavalue->title:'';?></a>
                           <?php }}}?>
                    </div>
                </div>