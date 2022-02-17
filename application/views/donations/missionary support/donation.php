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
                            <span class="breadcrumb-item" href="<?php echo site_url('example/single');?>">Missionary Support</span>
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
                                <div class="col-xl-6">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php echo form_open('donations/Missionary/donation'); ?>
                                    <div class="js-validation-bootstrap">
                                        
                                <!-- For form identification -->
                                <input type="hidden" class="form-control" id="form_id" name="miss_form" value="miss_support">
                                    <!-- For form identification -->
                                  <span style="text-align:left; color:blue; " id="">
                                         Single Missionary : Rs 4000. If the Number of Missionary 2 means 4000*2 = 8000.
                                         <span style="text-align:left; color:green; " id=""> Missionary family : Rs 8000. If the Number of Missionary 2 means 8000*2 = 16000.</span>
                                        </span>
                                    
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_dedication_pre">Purpose <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="purpose" name="purpose" required="true">
                                                     <!-- <option value="">Please select</option>  -->
                                                    <option value="Single Missionary">Single Missionary</option>
                                                    <option value="Missionary Family">Missionary Family</option>
                                                    <!-- <option value="3">Hindi</option> -->
                                                </select>
                                            </div>
                                        </div>

                                                  
                                <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Number of Missionary / Family <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" required="ture" name="val-digits" placeholder="1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Sponsorship Amount <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" required="ture"  name="val-number" placeholder="4000">
                                            </div>
                                        </div>        
                                
                                    <hr>
                                        <center><h6 style="color: blue;"> Sponser Details</h6></center>
                                        <hr>
                                
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">Sponsor/Sponsoring Group Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
            <input type="text" class="form-control" id="name" required="true" name="name" placeholder="Sponsor/Sponsoring Group Name">
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
                                        <div class="form-group row">
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
                                                    <!-- <option value="3">Hindi</option> -->
                                                </select>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="example-textarea-input1">Remarks</label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="example-textarea-input1" name="remark" rows="1"  placeholder="Remarks "></textarea>
                                            </div>
                                        </div>
                                
                                        <!---->
                                            <div class="form-group row">
                                                        
                                                   
                                            </div>        

                                        <!---->
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" id="submit" class="btn btn-alt-primary">Submit</button>
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
                            <a class="breadcrumb-item" href="<?php echo site_url('example/donation');?>">Donation</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('example/single');?>">Missionary Support</span>
                            <span class="breadcrumb-item active">Donation Page</span>
                        </nav>
                    </div>
                </div>
                    
                    <!-- -->
                                    <!-- Jquery check-->
                <script type="text/javascript">
                
//                  $('#val-number').change(function()
//                        {
//                            var value = $('#val-number').val();
//                            
//                            if (!value || value == undefined || value == "")
//                                
//                            {
//                                alert("please enter the valuse");
//                            }
//                      else
//                          {
//                              alert("please enter the Sponsorship Amount");
//                          }
//                        });
//                    
//                            $('#submit').onclick(function()
//                        {
//                            var value = $('#val-number').val();
//                            
//                            if (!value || value == undefined || value == "")
//                                
//                            {
//                                alert("please enter the valuse");
//                            }
//                      else
//                          {
//                              alert("please enter the Sponsorship Amount");
//                          }
//                        });
                    
                </script>
                
                <!-- Jquery check-->

                </div>
                
                <!-- END Page Content -->


            </main>
            <!-- END Main Container