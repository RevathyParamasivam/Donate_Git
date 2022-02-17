<!-- Main Container -->
            <main id="main-container">

               

                <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="#">Donation</a>
                        <span class="breadcrumb-item active">Make donation</span>
                        <span class="breadcrumb-item" style="color:red"  behavior="scroll" direction="left">For higher amount you may consider Bank Transfer / NEFT / RTGS.</span>
                    </nav>

             
                </div>
                <!-- END Page Content -->

                 <!-- Page Content -->
                <div class="content">
                    
                
                <!--  Breadcrumb -->
                
                </div>
                <!-- END Breadcrumb -->
                    <div class="content">
                    <?php if($responce = $this->session->flashdata('fail')): ?>
                                   <div class="alert alert-danger" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>

                                   
                                 <?php endif;?>

                                 <?php if($responce = $this->session->flashdata('success')): ?>
                                   <div class="alert alert-primary" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>

                                   
                                 <?php endif;?>
                       <div class="row">
                           
                           <div class="my-50 text-center">
                        
                             </div>
                           
                           
                        <div class="col-md-6">
                             <!-- Inline Form -->
                            <div class="block block-rounded block-fx-shadow">
                               
                                <div class="block-content block-content-full">
                                   
                                      <?php echo form_open('members/donation'); ?>


                        <div class="js-validation-bootstrap">
                                   <input type="hidden" name="userId" id="userId" value="<?php echo $userId;?>">
                             <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_dedication_pre">Donation For  </label>
                                            <div class="col-lg-8">
                                                <select class="form-control" id="purpose" name="purpose" required="true" >
                                                    <option value="0">General</option>
                                                   <?php 
                                                                       foreach ($type as $row)
                                                                       {
                                                                        if ($row->status === '1')
                                                                         {
                                                                      echo '<option value="'.$row->id.'">'.$row->purpose.'</option>';
                                                                       }}
                                                        ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    
                                    <div id="inputField">
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                         <input  autocomplete="off" type="text" class="form-control" id="val-amount1" required="true" name="amount1" placeholder="Amount">
                                         <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
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
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Donate</button>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                                   
                                   
                                </div>
                            </div>
                            <!-- END Inline Form -->
                    <!-- Donation  Title -->
                            
                         

                           </div>
                           <div class="col-md-6">
                               
                         <div  id="category"  class="block block-rounded block-fx-shadow">

                             
                             <div class="block-header block-header-default">
                                 <center> <h2 class="font-w700 text-black mb-10" id="purpose_data" ></h2></center> 
                                    <div class="block-options">
                                    </div>
                                </div>
                      
                        
                        <div class="block-content block-content-full">
                            <div class="">
                                
                                
                                 <div class="">
                                    <center>
                                            <div class="block-content bg-primary">
                                                    <div class="h4 font-w700 mb-10 text-white">
                                                       <p id="amount"></p>
                                                    </div>
                                            </div>
                                    </center>
                                </div>
                                <hr>
                                    
                                    <p id="details" style="font-size:15px; "> </p>
                                </div>
                        </div>
                        
                    </div>
                           </div>
                    </div>
                    <!--  Breadcrumb -->
              
                   
                <!-- END Breadcrumb -->
   
                      <script type="text/javascript">
                    // $(document).ready(function()
                    //                   {
                    //     $('#purpose').change(function()
                    //     {
                    //         var role_value = $('#purpose').val();
                    //         if(role_value != '')
                    //             { 
                    //                // alert("Hello! I am an alert box!! "+ role_value +" ");
                    //                  $.ajax({
                    //                      // url:"<?php //echo site_url('page/fetch_option');?>",
                    //                      // method:"POST",
                    //                      // data:{role_value:role_value},
                    //                      //    success:function(data)
                    //                      //     {
                    //                      //         console.log(data);
                    //                      //         $('#option1').html(data);
                                                 
                    //                      //     }
                    //                  })
                    //             }
                            
                            
                    //     });
                        
                    // });
                
                </script>

                <script type="text/javascript">
                                                $(document).ready(function()
                                                {
                                                    var text='<ul><li><span style="color: #000000;">GEMS will not let its needs known to others directly or indirectly unless asked to us specifically</span></li><li><span style="color: #000000;">GEMS will not take loans (credits) or go for debts to fulfill its ministerial needs</span></li><li><span style="color: #000000;">GEMS will not use the designated funds for any other purpose. It will only be spent for that project or cause.<span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 10pt;">&nbsp; &nbsp;&nbsp;</span></span></li></ul>';
                                                    $('#details').html(text);
                                                    $('#amount').html('Financial Faith Policy of GEMS')
                                                    $('#donateBtnDiv').hide();
                                                    $('#inputField').show();
                                                    $('#purpose').change(function()
                                                    {
                                                      var id = $('#purpose').val();
                                                      $('#purpose_data').html('');
                                                      $('#amount').html('');
                                                      $('#donateBtnDiv').show();
                                                      if(id==0 || id=='0')
                                                       {
                                                        //$('#category').attr("style", "display:none");
                                                        $('#donateBtnDiv').hide();
                                                        $('#details').html(text);
                                                           $('#inputField').show();
                                                        $('#amount').html('Financial Faith Policy of GEMS')
                                                      }
                                                    
                                                      
                                                       $.ajax(
                                                       {
                                                            url:"<?php echo site_url('categories/categories_view');?>",
                                                            type: 'POST',
                                                            data:{id:id},
                                                            // dataType :'json',
                                                            success: function(response)
                                                            {                               

                                                              // var data = response;

                                                                           // alert(response);                   
                                                                      // console.log(response);

                                                                     var response =JSON.parse(response);     
                                                                        // console.log(response.message);
                                                                        // console.log(response[0].pay_id);

                                                                        if (response.message === 'failed') 
                                                                        {
                                                                            alert(" Payment Details not able to view. Because the transaction is failed");
                                                                        }
                                                                        else
                                                                        {
                                                                                // $('#payment_id').html(response[0].id); //hold the response in id and show on popup
                                                                                // $('#pay_req_id').html(response[0].pay_req_id); //hold the response in id and show on popup
                                                                            $('#inputField').attr("style", "display:block");
                                                                                $('#purpose_data').html(response[0].purpose);
                                                                                $('#amount').html(response[0].amount);
                                                                                // $('#currency').html(response[0].currency);
                                                                                $('#details').html(response[0].details);
                                                                                // $('#status').html(response[0].bank_status);
                                                                                        
                                                                                // $('#categories_view').modal({backdrop: 'static', keyboard: true, show: true});

                                                                        }
 
                                                            }

                                                       });     


                                                    });
                                                });

                                               </script>
                    




                    
                </div>
                         





                

            </main>
            <!-- END Main Container -->
