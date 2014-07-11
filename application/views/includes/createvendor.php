
<div class="row-fluid">
        <div class="span12">
          <div class="box paint color_12">
            <div class="title">
              <h4> <i class="icon-book"></i><span>Vendor Details</span> </h4>
            </div>
            <div class="content">
              <form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/createvendorsubmit');?>">
                <div class="form-row control-group row-fluid" style="display:none;">
                  <label class="control-label span3" for="normal-field">ID</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="id" >
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="normal-field">Name</label>
                  <div class="controls span9">
                    <input type="text" id="normal-field" class="row-fluid" name="name" value="<?php echo set_value('name');?> ">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Vat</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="vat" value="<?php echo set_value('vat');?> ">
                  </div>
                </div>
                <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">ecc</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="ecc" value="<?php echo set_value('ecc');?> ">
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Cst</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="cst" value="<?php echo set_value('cst');?> ">
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Pan</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="pan" value="<?php echo set_value('pan');?> ">
                  </div>
                </div>
                
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Service tax</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="servicetax" value="<?php echo set_value('servicetax');?> ">
                  </div>
                </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Creditdays</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="creditdays" value="<?php echo set_value('creditdays');?> ">
                  </div>
                </div>
                
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Address</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="address" value="<?php echo set_value('address');?> ">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Phone</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="phone" value="<?php echo set_value('phone');?> ">
                  </div>
                 </div>
                 <div class="form-row control-group row-fluid">
                  <label class="control-label span3" for="description-field">Email</label>
                  <div class="controls span9">
                    <input type="text" id="description-field" class="row-fluid" name="email" value="<?php echo set_value('email');?> ">
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
