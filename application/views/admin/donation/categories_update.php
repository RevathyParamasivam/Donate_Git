<!-- Main Container -->
            <main id="main-container">

               

                <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="#">Donation</a>
                        <span class="breadcrumb-item active">Categories</span>
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
                                <?php foreach($categories as $row)
                                { ?>
                            <form class="js-validation-bootstrap" 
                            action="<?php echo site_url('admin/donation/update_categories/'.$row->id);?>" method="post">

                                    
                                     

                                  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Purpose <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-name" required="true" name="purpose" value="<?php echo $row->purpose; ?>" >
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Amount Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-name" required="true" name="amount" value="<?php echo $row->amount_detail; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-textarea-input1">Details<span class="text-danger">*</span> </label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="example-textarea-input1" name="details" rows="7" ><?php echo $row->details; ?></textarea>
                                                 
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
