<div class='card hidden-xs'>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active glow">Sarkari Results</a>
                        <?php if(isset($sidemenudata) && !empty($sidemenudata)){
                           foreach($sidemenudata as $ccakey => $ccavalue){
                               if(isset($ccavalue->jt_id) && $ccavalue->jt_id=='6'){?>
                            <a href="<?php echo $this->common->jobviewurl($ccavalue->id);?>" class="list-group-item list-group-item-action"><?php echo $ccavalue->title?$ccavalue->title:'';?></a>
                           <?php }}}?>
                    </div>
                </div>