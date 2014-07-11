<?php echo validation_errors();?>
<div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Purchase Bill Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/editpurchaseordersubmit');?>">
                <div class="form-row control-group row-fluid" style="display:none;">
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" value="<?php echo $before->id ;?>" >
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Vender</label>
                  <div class="controls span9">
                   <?php 
                     
                     echo form_dropdown('vender',$vender, $before->vender ,'class="chzn-select chzn-done" id="default-select1"');
                  ?>  

                  </div>
                 </div>
               <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Total</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="total" value="<?php echo $before->total ;?>">
                 </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Tax</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="tax" value="<?php echo $before->tax;?>">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Finaltotal</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="finaltotal" value="<?php echo $before->finaltotal ;?>">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Status</label>
                  <div class="controls span9">
                   <?php 
                     
                     echo form_dropdown('status',$status,$before->status ,'class="chzn-select chzn-done" id="default-select1"');
                  ?>  

                  </div>
                 </div>
                 <div class="span3 visible-desktop"></div>
                  <div class="span7 ">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
   </div>
