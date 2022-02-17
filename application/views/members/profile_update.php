<!-- Main Container -->
            <main id="main-container">

               

                <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="#">Donor</a>
                        <span class="breadcrumb-item active">Profile</span>
                        <span class="breadcrumb-item active">Update</span>
                    </nav>

                    <?php if($responce = $this->session->flashdata('sucess')): ?>
                                   <div class="alert alert-success" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                 <?php endif;?>

                                    

                                 <?php if($responce = $this->session->flashdata('fail')): ?>
                                   <div class="alert alert-danger" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                 <?php endif;?>
                    <div class="row">

                        
                        <div class="col-xl-12">
                            <!-- Lessons -->
                            <div class="block block-rounded">
              
                               <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-8">
                                <?php foreach($profile as $row)
                                { ?>
                            <form class="js-validation-bootstrap" 
                            action="<?php echo site_url('members/home/profile_detail_update/'.$row->id);?>" method="post">
                                    <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="val-phone">Phone <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phone" required="true" name="phone" value="<?php echo $row->phone; ?>" >
                                            </div>
                                        </div>
                                     <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="val-skill">Gender <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="gender_id">
                                                    <option value="">Choose...</option>
                                                    <?php 
                                                     foreach ($gender as $row_reg)
                                                        {
                                                         
                                                                          ?>
                                            <option value="<?php echo $row_reg->id; ?>"<?php if ($row->gender == $row_reg->id): ?> selected="selected"<?php endif; ?>><?php echo $row_reg->name; ?> </option>
                                                                           <?php 
                                                      
                                                                       }
                                                                    ?>
                                                </select>
                                            </div>
                                        </div>


                                     <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="val-skill">Matrial Status <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-matrial" name="matrial_id">
                                                    <option value="">Choose...</option>
                                                    <?php 
                                                     foreach ($matrial as $row_matrial)
                                                        {
                                                         
                                                                          ?>
                                            <option value="<?php echo $row_matrial->id; ?>"<?php if ($row->matrial_status == $row_matrial->id): ?> selected="selected"<?php endif; ?>><?php echo $row_matrial->name; ?> </option>
                                                                           <?php 
                                                      
                                                                       }
                                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="val-username">Designation <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-usernamer" required="true" name="designation" value="<?php echo $row->designation; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-6 col-form-label" for="miss_pre">Birth Day <span class="text-danger">*</span></label>
                                            
                                            <div class="col-lg-6">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker2" 
                                                name="bday" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy" value="<?php echo $row->dob?>">
                                            </div>
                                        </div>
                                        
                                        
                                            <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="val-address">Address <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-address" required="true" name="address" value="<?php echo $row->address; ?>" >
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="val-place">place <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-place" required="true" name="place" value="<?php echo $row->place; ?>" >
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                    <label class="col-lg-6 col-form-label" for="val-country">country <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-country" required="true" name="country" value="<?php echo $row->country; ?>" >
                                            </div>
                                        </div>
                                    <?php }?>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                                    
                            </div>
                            <!-- END Lessons -->
                        </div>
                    </div>



                </div>
                <!-- END Page Content -->
          

            </main>
            <!-- END Main Container -->
