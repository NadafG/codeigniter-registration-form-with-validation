<div class="container">

     <div class="row">
       <div class="col-md-6 col-md-offset-3">
          <?php 
          $attributes = array("name" => "loginform");
          echo form_open("user/login", $attributes);?>
       </div>
     </div>

     <div class="row">
          <div class="col-md-6 col-md-offset-3">
               <div class="panel panel-default">
                    <div class="panel-heading text-center">
                         <h4> Sign In </h4>
                     </div>

               <div class="panel-body">
                    <div class="form-group">
                         <label for="txt_username"> Username </label>
                         <input class="form-control" name="txt_username" placeholder="Enter email ... " type="text" value="<?php echo set_value('txt_username'); ?>" />
                         <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                    </div>

                     <div class="form-group">
                         <label for="txt_password"> Password </label>
                         <input class="form-control" name="txt_password" placeholder="Enter Password ... " type="text" value="<?php echo set_value('txt_password'); ?>" />
                         <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                    </div>

                    <div class="form-group">
                         <div class="col-lg-12 col-sm-12 text-center">
                              <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Sign In" />
                              <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                         </div>
                    </div>
               </div>
          </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
           </div>
     </div>
</div>