<!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Forms Validation -->
                    
                    <!-- -->
                            <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('example/donation');?>">Donation</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('example/single');?>">Single Missionary</span>
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
                                    
                            <form class="js-validation-bootstrap" action="<?php echo site_url('donation/conform_donation');?>" method="post">
                                        
                                <!-- For form identification -->
                                <input type="hidden" class="form-control" id="form_id" name="miss_form" value="miss_form">
                                    <!-- For form identification -->
                                  <span style="text-align:left; color:blue; " id="">
                                         Single Missionary family : Rs 8000. If you put 2 means 8000*2 = 16000.
                                        </span>
                                 
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Sponsorship Amount <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" name="val-number" placeholder="8000">
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
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_pre">Missionary Preference <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="miss_pre" name="miss_pre" required="true">
                                                     <option value="">Please select</option> 
                                                    <option value="1">Any</option>
                                                    <option value="2">Native Missionary</option>
                                                    <option value="3">Cross-Cultural Missionary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="month_report_pre">Monthly Report Language Preference <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="month_report_pre" name="month_report_pre" required="true">
                                                     <option value="">Please select</option> 
                                                    <option value="1">Tamil</option>
                                                    <option value="2">English</option>
                                                    <option value="3">Hindi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_dedication_pre">Do you want the missionary be dedicated at your Church? or Home? <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="miss_dedication_pre" name="miss_dedication_pre" required="true">
                                                     <option value="">Please select</option> 
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
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
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
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
                            <span class="breadcrumb-item" href="<?php echo site_url('example/single');?>">Single Missionary</span>
                            <span class="breadcrumb-item active">Donation Page</span>
                        </nav>
                    </div>
                </div>
                    
                    <!-- -->

                </div>
                <!-- END Page Content -->

                <script type="text/javascript">
                   

                        $('#no_miss').change(function()
                        {
                            var miss_count = $('#no_miss').val();
                            
                            var spon_amount = 4000;
                            if (miss_count !='') 
                            {
                                ex_amount = miss_count*spon_amount;
                                // alert(ex_amount);
                                var message = "Minimum Amount is ";

                                var data = message + ex_amount

                                // alert(display);
                                $("#amount_message").html(data);
                            }
                        });

                        $('#amount').change(function()
                        {
                            var don_amount = $('#amount').val();
                            
                            if (don_amount !='') 
                            {
                                     jQuery.ajax({
                                            url: "<?php echo site_url('donation/convenience_fee'); ?>",
                                        data:{'amount' : don_amount},
                                        type: "POST",
                                        success:function(data)
                                        {
                                        
                                        $("#final_amount_message").html(data);
                                        // $("#loaderIcon").hide();
                                        },
                                        error:function (){}
                                        });
                               
                                if (don_amount >= ex_amount )
                                 {
                                                // alert("test");
                                                // alert(total_amount);
                                 }
                                  else
                                  {
                                    alert("Your enter the amount is low in Minimum amount. If its ok please click ok button do the further process ");
                                    
                                  }              
                            }
                        });



                    </script>




 
                        <div class="block-content block-content-full">
                            <div class="">
                                
                                <div class="">
                                    <p style="font-size:18px; ">Contribution towards Missionary Support Fund is accepted for supporting a Single Missionary or a Missionary Couple.</p>
                                    <center><span class="badge badge-primary text-uppercase font-w700 py-30 px-15">Single Missionary  : Rs. 4000/-</span></center>
                                </div>
                                    <p style="font-size:18px; ">Several components like Basic Pay, Travel Allowance, Medical Allowance, Children education Allowance, Provident Fund, etc. are taken care by GEMS under different The above listed standard sponsorship contributions are fixed only to facilitate the convenience of the contributor(s).</p>
                                    <p style="font-size:18px; ">Sponsorship may be shouldered by a single individual, prayer groups, or by churches. Once contribution towards this cause is received, GEMS assigns a Missionary to the contributor(s). Periodic reports from the missionary will be sent to the contributor(s) for information and prayer. General contributions or contributions less that the above mentioned amount are also accepted towards, but assignment of a missionary and monthly reports will not be sent to the contributor(s).</p>
                                </div>
                                <div class="block-content block-content-full border-top clearfix">
                            <!-- <center><a class="btn btn-hero btn-alt-danger float-center" data-toggle="modal" data-target="#modal-popin"> -->
                                    <center><a class="btn btn-hero btn-alt-danger" href="<?php echo site_url('donation/single_donation');?>">
                                    <i class="" > Donate</i>
                                    </a></center>
                            
                                </div>
                            </div>

                
                
                
                <script type="text/javascript">
                   

                        $('#no_miss').change(function()
                        {
                            var miss_count = $('#no_miss').val();
                            
                            var spon_amount = 4000;
                            if (miss_count !='') 
                            {
                                ex_amount = miss_count*spon_amount;
                                // alert(ex_amount);
                                var message = "Minimum Amount is ";

                                var data = message + ex_amount

                                // alert(display);
                                $("#amount_message").html(data);
                            }
                        });

                        $('#amount').change(function()
                        {
                            var don_amount = $('#amount').val();
                            
                            if (don_amount !='') 
                            {
                                     jQuery.ajax({
                                            url: "<?php echo site_url('donation/convenience_fee'); ?>",
                                        data:{'amount' : don_amount},
                                        type: "POST",
                                        success:function(data)
                                        {
                                        
                                        $("#final_amount_message").html(data);
                                        // $("#loaderIcon").hide();
                                        },
                                        error:function (){}
                                        });
                               
                                if (don_amount >= ex_amount )
                                 {
                                                // alert("test");
                                                // alert(total_amount);
                                 }
                                  else
                                  {
                                    alert("Your enter the amount is low in Minimum amount. If its ok please click ok button do the further process ");
                                    
                                  }              
                            }
                        });



                    </script>




 
                        <div class="block-content block-content-full">
                            <div class="">
                                
                                <div class="">
                                    <p style="font-size:18px; ">Contribution towards Missionary Support Fund is accepted for supporting a Single Missionary or a Missionary Couple.</p>
                                    <center><span class="badge badge-primary text-uppercase font-w700 py-30 px-15">Single Missionary  : Rs. 4000/-</span></center>
                                </div>
                                    <p style="font-size:18px; ">Several components like Basic Pay, Travel Allowance, Medical Allowance, Children education Allowance, Provident Fund, etc. are taken care by GEMS under different The above listed standard sponsorship contributions are fixed only to facilitate the convenience of the contributor(s).</p>
                                    <p style="font-size:18px; ">Sponsorship may be shouldered by a single individual, prayer groups, or by churches. Once contribution towards this cause is received, GEMS assigns a Missionary to the contributor(s). Periodic reports from the missionary will be sent to the contributor(s) for information and prayer. General contributions or contributions less that the above mentioned amount are also accepted towards, but assignment of a missionary and monthly reports will not be sent to the contributor(s).</p>
                                </div>
                                <div class="block-content block-content-full border-top clearfix">
                            <!-- <center><a class="btn btn-hero btn-alt-danger float-center" data-toggle="modal" data-target="#modal-popin"> -->
                                    <center><a class="btn btn-hero btn-alt-danger" href="<?php echo site_url('donation/single_donation');?>">
                                    <i class="" > Donate</i>
                                    </a></center>
                            
                                </div>
                            </div>



















                
                
            </main>
            <!-- END Main Container -->


        <!-- payment Gateway   -->


                      $this->load->library('instamojo');
                
                  $user_reg = $this->create_user($spon_name,$spon_email,$spon_phone);
                      

                    if($user_reg === 1)
                    {
                         if(isset($single))
                         {
                             $fee = 3+($spon_amount*0.02);
                                     $tax = $fee * .15;
                        			$final_amount =$spon_amount;
                        
                        		
                        			$payment_id ='';
                        			$couple = '';
                        			$created_at = date("d-m-Y H:i:s");
                        
                        			$data = array(	'payment_id' =>$payment_id,
                                   					'name' =>$spon_name,
                                   					'email' =>$spon_email,
                                   					'phone' =>$spon_phone,
                                   					'address' =>$spon_address,
                                   					'place' =>$spon_place,
                                   					'country' =>$spon_country,
                                   					'miss_count' =>$miss_count,
                                   					'amount' =>$spon_amount,
                                   					'miss_pre' =>$spon_option1,
                                   					'mon_rep' =>$spon_option2,
                                   					'miss_dedi' =>$spon_option3,
                                   					'remarks' =>$spon_remarks,
                                   					'created_at'=>$created_at,
                                   				 );
                        
                        				$result = $this->Missionary_model->add_miss_donor($data);
                        
                        				$pay = $this->instamojo->pay_request(
                        						$amount = $final_amount , 
                        						$purpose = "Missionary Donation" , 
                        						$buyer_name = $spon_name , 
                        						$email = $spon_email, 
                        						$phone = $spon_phone ,
                        		     			$send_email = 'TRUE' , 
                        		     			$send_sms = 'TRUE' , 
                        		     			$repeated = 'FALSE'
                        
                        		     		);
                        
                                 $pay_url = $pay['longurl']   ;
                        		redirect($pay_url,'refresh') ;
     
                         }
                        else
                        {
                            $fee = 3+($spon_amount*0.02);
                                     $tax = $fee * .15;
                        			$final_amount =$spon_amount;
                		
                        			$payment_id ='';
                        			$couple = $miss_count;
                                    $miss_count = "Null";
                        			$created_at = date("d-m-Y H:i:s");
                            
                                    echo $payment;
                                    echo $couple;
                                    echo $miss_count;
                                    echo $created_at;
                            
                        
//                        			$data = array(	'payment_id' =>$payment_id,
//                                   					'name' =>$spon_name,
//                                   					'email' =>$spon_email,
//                                   					'phone' =>$spon_phone,
//                                   					'address' =>$spon_address,
//                                   					'place' =>$spon_place,
//                                   					'country' =>$spon_country,
//                                   					'miss_count' =>$miss_count,
//                                                    'couple' => $couple,
//                                   					'amount' =>$spon_amount,
//                                   					'miss_pre' =>$spon_option1,
//                                   					'mon_rep' =>$spon_option2,
//                                   					'miss_dedi' =>$spon_option3,
//                                   					'remarks' =>$spon_remarks,
//                                   					'created_at'=>$created_at,
//                                   				 );
//                        
//                        				$result = $this->Missionary_model->add_miss_donor($data);
//                        
//                        				$pay = $this->instamojo->pay_request(
//                        						$amount = $final_amount , 
//                        						$purpose = "Missionary Donation" , 
//                        						$buyer_name = $spon_name , 
//                        						$email = $spon_email, 
//                        						$phone = $spon_phone ,
//                        		     			$send_email = 'TRUE' , 
//                        		     			$send_sms = 'TRUE' , 
//                        		     			$repeated = 'FALSE'
//                        
//                        		     		);
//                        
//                                 $pay_url = $pay['longurl']   ;
//                        		redirect($pay_url,'refresh') ;
     
                        }                           
                        
                    }
                    else
                    {
                        echo " error";
                    }

        <!---->


















