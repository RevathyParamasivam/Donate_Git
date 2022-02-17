<!--Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Forms Validation -->
                    
                    <!-- -->
                            <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Donation</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('donations/Training');?>">Training Support</span>
                            <span class="breadcrumb-item active">Donation Page</span>
                        </nav>
                    </div>
                </div>
                    
                    <!-- -->
                                         
                    <div class="block">
<!--
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Validation</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
-->
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-8">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    
                                    
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php echo form_open('donations/Training/donation'); ?>
                                    <div class="js-validation-bootstrap">
<!--                            <form class="js-validation-bootstrap" action="<?php //echo site_url('donation/conform_donation');?>" method="post">-->   
                                        
                                <!-- For form identification -->
                                <input type="hidden" class="form-control" id="church" name="Training" value="Training">
                                    <!-- For form identification -->

                                    <marquee style="color:red"  behavior="scroll" direction="left">For above Rs 1L Kindly Contact Us or Do it in Bank Transfer!</marquee>

                                    <span style="text-align:left; color:blue; " id="">
                                         IMPACT Training Program Support : Rs.15,00,000 /program, Area Convention Support : Rs.50,000 /program
                                        </span>                            
                                <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_dedication_pre">Purpose <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="purpose" name="purpose" required="true">
                                                     <!-- <option value="">Please select</option>  -->
                                                <option value="IMPACT Training Program">IMPACT Training Program</option>
                                                    <option value="Area Convention">Area Convention </option>
                                                    
                                                    <!-- <option value="3">Hindi</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Sponsorship Amount <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" required="ture" name="val-number" placeholder="8000">
                                            </div>
                                        </div>        
                                
                                    <hr>
                                        <center><h6 style="color: blue;"> Sponser Details</h6></center>
                                        <hr>
                                
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Sponsor/Sponsoring Group Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
            <input type="text" class="form-control" id="val-username" required="true" name="name" placeholder="Sponsor/Sponsoring Group Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="example-textarea-input">Full Address<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="example-textarea-input" name="address" rows="1" required="true" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="place">Place <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="place" required="true" name="place" placeholder="Place">
                                            </div>
                                        </div>
                                          
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-country">Country <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-country" required="true" name="country" placeholder="country">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="val-email" required="true" name="email" placeholder="Enter Email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-phoneus">Phone <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" required="true" id="val-phonein" name="phone" placeholder="Phone number">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_pre">Missionary Preference <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="miss_pre" name="miss_pre" required="true">
                                                     <option value="">Please select</option> 
                                                    <option value="Any">Any</option>
                                                    <option value="Native Missionary">Native Missionary</option>
                                                    <option value="Cross-Cultural Missionary">Cross-Cultural Missionary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="month_report_pre">Monthly Report Language Preference <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="month_report_pre" name="month_report_pre" required="true">
                                                     <option value="">Please select</option> 
                                                    <option value="Tamil">Tamil</option>
                                                    <option value="English">English</option>
                                                    <option value="Hindi">Hindi</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_dedication_pre">Do you want the missionary be dedicated at your Church? or Home? <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="miss_dedication_pre" name="miss_dedication_pre" required="true">
                                                     <option value="">Please select</option> 
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                     <option value="3">Hindi</option>
                                                </select>
                                            </div>
                                        </div> -->
                                            
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="example-textarea-input1">Remarks</label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="example-textarea-input1" name="remark" rows="1"  placeholder="Remarks "></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Bootstrap Forms Validation -->
                        
                    <!-- -->
                            <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Donation</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('Training');?>">Training Support</span>
                            <span class="breadcrumb-item active">Donation Page</span>
                        </nav>
                    </div>
                </div>
                    
                    <!-- -->

                </div>
                
                <!-- END Page Content -->

            </main>
            <!-- END Main Container