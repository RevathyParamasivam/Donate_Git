<!--Main Container -->
     

                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Forms Validation -->
                    
                    <!-- -->
                            <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('donation');?>">Donation</a>
                            
                            <a class="ml-auto btn-sm btn-hero btn-danger" href="<?php echo site_url('user');?>"><i class="si si-login mr-10"></i> Login</a>
                            <!-- <span class="breadcrumb-item active">Donation Page</span> -->
                        </nav>
                    </div>
                </div>
                    

      </div>



                    <!-- -->
                         





<!--Main Container -->
          <div class="content">
   <div class="block">

                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-8">

          <?php echo form_open('contact'); ?>


              <div class="js-validation-bootstrap">

                                  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                         <input  autocomplete="off" type="text" class="form-control" id="val-username" required="true" name="name" placeholder="Enter Your Name">
                                         <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input  autocomplete="off" type="email" class="form-control" id="val-email" required="true" name="email" placeholder="Enter Email..">
                                                <span class="required-server"><?php echo form_error('email','<p style="color:#F83A18">','</p>'); ?></span> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-phoneus">Phone <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input autocomplete="off" type="text" class="form-control" required="true" id="val-phonein" name="phone" placeholder="Phone number">
                                                <span class="required-server"><?php echo form_error('phone','<p style="color:#F83A18">','</p>'); ?></span> 
                                            </div>
                                        </div>
                                       
                                                 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_dedication_pre">More About <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="purpose" name="purpose" required="true">
                                                     <!-- <option value="">Please select</option>  -->
                                                    <option value="Missionary">Missionary</option>
                                                    <option value="Church Establishment">Church Establishment</option>
                                                    <option value="Children">Children</option>
                                                    <option value="Evangelism">Evangelism</option>
                                                    <option value="Training">Training</option>
                                                    <option value="Missionaries Welfare">Missionaries Welfare</option>
                                                    <option value="Other Areas">Other Areas</option>
                                                    
                                                    <!-- <option value="3">Hindi</option> -->
                                                </select>
                                                <span class="required-server"><?php echo form_error('purpose','<p style="color:#F83A18">','</p>'); ?></span> 
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-textarea-input1">Remarks</label>
                                            <div class="col-lg-8">
                                                <textarea autocomplete="off" class="form-control" id="example-textarea-input1" name="remarks" rows="1"  placeholder="Remarks "></textarea>
                                                 <span class="required-server"><?php echo form_error('request','<p style="color:#F83A18">','</p>'); ?></span> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="captcha"><?php echo $captcha['image']; ?></label>
                                              <div class="col-lg-8">
                                              <input type="text" autocomplete="off" name="userCaptcha" placeholder="Enter code Here" value="<?php if(!empty($userCaptcha))
                                              { echo $userCaptcha;} ?>" />
                                              <span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> 
                                              </div>
                                            </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>

                       
                   
                    <!-- Bootstrap Forms Validation -->


</div>
</div>


 <!-- -->
                            <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('donation');?>">Donation</a>
                           
                            <a class="ml-auto btn-sm btn-hero btn-danger" href="<?php echo site_url('user');?>"><i class="si si-login mr-10"></i> Login</a>
                            <!-- <span class="breadcrumb-item active">Donation Page</span> -->
                        </nav>
                    </div>
                </div>
                    
                    <!-- -->

                </div>
                
                <!-- END Page Content -->

            </main>
            <!-- END Main Container