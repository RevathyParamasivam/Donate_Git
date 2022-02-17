<!--Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Forms Validation -->
                    
                    <!-- -->
                            <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Prayer</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('categories/vbb');?>">Prayer Request</span>
                            <!-- <span class="breadcrumb-item active">Donation Page</span> -->
                        </nav>
                    </div>
                </div>
                    





                    <!-- -->
                         






           
<!--   <div class="form-group row">
          <label class="col-lg-4 col-form-label" for="val-username">My Name <span class="text-danger">*</span></label>
          <div class="col-lg-8">
              <input autocomplete="off" type="text" id="name" name="name" placeholder="My Name" value="<?php if(!empty($name))
               { echo $username;} ?>" />
          </div>
            <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
	</div>
	
  <div class="form-group">
    <label class="col-lg-4 col-form-label" for="val-email">My Email Id <span class="text-danger">*</span></label>
    <input autocomplete="off" type="text" id="eamil" name="email" placeholder="My Email Id" value="<?php if(!empty($email))
{ echo $username;} ?>" />
    <span class="required-server"><?php echo form_error('username','<p style="color:#F83A18">','</p>'); ?></span> 
  </div>

    <div class="form-group">
    <input autocomplete="off" type="password" id="user_password" name="user_password" placeholder="User Password" value="" />
    <span class="required-server"><?php echo form_error('user_password','<p style="color:#F83A18">','</p>'); ?></span> 
	</div>
	
  <div class="form-group">
    <label for="captcha"><?php echo $captcha['image']; ?></label>
    <br>
    <input type="text" autocomplete="off" name="userCaptcha" placeholder="Enter above text" value="<?php if(!empty($userCaptcha))
    { echo $userCaptcha;} ?>" />
    <span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> 
	</div>
  <div class="form-group">
    <input type="submit" class="btn btn-success" value="Sign In" name="" />
  </div>

 -->
<!--Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Forms Validation -->
                    
                    <!-- -->
                            <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Prayer</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('categories/vbb');?>">Prayer Request</span>
                            <!-- <span class="breadcrumb-item active">Donation Page</span> -->
                        </nav>
                    </div>
                </div>
   <div class="block">

                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-8">

          <?php echo form_open('prayer'); ?>


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
                                        <label class="col-lg-4 col-form-label" for="example-textarea-input1">Prayer Request</label>
                                            <div class="col-lg-8">
                                                <textarea autocomplete="off" class="form-control" id="example-textarea-input1" name="request" rows="1"  placeholder="Remarks "></textarea>
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
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Prayer</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('categories/vbb');?>">Prayer Request</span>
                            <!-- <span class="breadcrumb-item active">Donation Page</span> -->
                        </nav>
                    </div>
                </div>
                    
                    <!-- -->

                </div>
                
                <!-- END Page Content -->

            </main>
            <!-- END Main Container